<?php

// inclusion du fichier de configuration
include("config/config.inc.php");

// inclusion du 'pdo.inc.php' qui est le fichier de connexion
// à la base de données (dans ce fichier, il y aura également des contrôles)
include("model/pdo.inc.php");

     // on essaye de se connecter
     try{
        // ---------------------
        // débogage avec un 'var_dump' -- le 'vardump()' a pour but d'afficher les information d'une variable
        // var_dump($_POST);
        //  $query = "INSERT INTO blog_contacts
        //              (contact_name2, contact_email, contact_phone, contact_message)
        //              VALUES
        //              ('" . addslashes($_POST["name"]) . "', '" . $_POST["email"] . "', '" . $_POST["phone"] . "', '" . addslashes($_POST["message"]) . "')";
        // ---------------------
        // $query = "INSERT INTO blog_contacts
        //         (contact_name, contact_email, contact_phone, contact_message)
        //         VALUES
        //         ('" . addslashes($_POST["name"]) . "', '" . $_POST["email"] . "', '" . $_POST["phone"] . "', '" . addslashes($_POST["message"]) . "')";
        // $req = $pdo->exec($query);
        // ---------------------
	   // on donne à la variable '$query' un valeur -- en l'occurence c'est une requête (string) qui sera utilisée plus tard
	   // FROM d'où proviennent les données
        // et là, contrairement aux autres fois, la requête est une requête préparée avec des marqueurs nommés       
        $query = "INSERT INTO blog_contacts
                 (contact_name, contact_email, contact_phone, contact_message)
                 VALUES
                 (:contact_name, :contact_email, :contact_phone, :contact_message)";
        
        // ligne de débug
        // die($query);
        
        // on prépare la requête
        $curseur = $pdo->prepare($query);
        
        // on donne aux marqueurs les valeurs qui vont bien en précisant ce qu'elles doivent être
        // dans les cas suivants, il n'y a que du string -- je préfère les calecons !!
        $curseur->bindValue(':contact_name', $_POST["name"], PDO::PARAM_STR);
        $curseur->bindValue(':contact_email', $_POST["email"], PDO::PARAM_STR);
        $curseur->bindValue(':contact_phone', $_POST["phone"], PDO::PARAM_STR);
        $curseur->bindValue(':contact_message', $_POST["message"], PDO::PARAM_STR);

        // on eexécute la requête après qu'elle ait été préparée
        $curseur->execute();

        // echo $query
        // echo "Votre message a bien été pris en compte.";

}
	// on récupère les anomalies qui auraient pu se produire dans la variable que l'on déclare
	// ci-dessous '$e'
     catch (Exception $e) {
         // die("Erreur MySQL : " . $e->getmessage());
         // et si nous arrivions à la ligne suivante, le code serait arrêté et un message s'afficherait
         // pour l'internaute grace à une fonction qui se trouve dans la nav et qui analyse si l'url
         // contient le mot 'erreur'
         header("Location:index.php?erreur=1");
         exit;
}
