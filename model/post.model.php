<?php

// Post model
// inclusion du fichier de configuration
include("config/config.inc.php");

// inclusion du 'pdo.inc.php' qui est le fichier de connexion
// à la base de données (dans ce fichier, il y aura également des contrôles)
include("model/pdo.inc.php");

// on essaye de se connecter
try {
		// $query = "SELECT post_ID, post_date, post_content, post_title, post_img_url, display_name, cat_descr
		// FROM blog_posts

		// INNER JOIN blog_users
		// ON post_author = ID

		// INNER JOIN blog_categories
		// ON post_category = cat_id
		
		// WHERE post_ID = " . $_GET["article"];

		// die($query);

		// // On envoie la requête
		// $req = $pdo->query($query);

		// // Nous utiliserons les résultats en tant que tableau scalaire (mode par défaut)
		// // Traitement des résultats en boucle
		// // while( $data = $req->fetch() )
		// // {
        // //     // echo "fetch()";
		// // 	// var_dump($data);
        // //     echo "<br>" . $data["post_title"] . "<br>";
        // $data = $req->fetch();
		// // var_dump($data);
		// // Terminer la requête en fermant le curseur
		// // $req->closeCursor();

		// la requête est une requête préparée avec des marqueurs nommés
		$query = "SELECT post_ID, post_date, post_content, post_title, post_img_url, display_name, cat_descr
		FROM blog_posts

		INNER JOIN blog_users
		ON post_author = ID

		INNER JOIN blog_categories
		ON post_category = cat_id
		
		WHERE post_ID = :article";

		// on prépare la requête
		$curseur = $pdo->prepare($query);	

		// on donne aux marqueurs les valeurs qui vont bien en précisant ce qu'elles doivent être
        // dans le cas qui suit c'est un entier
        $curseur->bindValue(':article', $_GET["article"], PDO::PARAM_INT);

		// on exécute la requête
        $curseur->execute();

		// setFetchMode : Définit le mode de récupération par défaut pour cette requête
		// Récupère la ligne suivante d'un ensemble de résultats sous forme de tableau associatif
		$curseur->setFetchMode(PDO::FETCH_ASSOC);

		// on donne à la variable $data la valeur de ce qui a été récupéré
		$data = $curseur->fetch();
		
		// ligne de debug
		// var_dump($data);
		// exit;

	}

	// on récupère les anomalies qui auraient pu se produire dans la variable que l'on déclare
	// ci-dessous '$e'
	catch ( Exception $e ) {
		die("Erreur MySQL : " . $e->getMessage());
	}