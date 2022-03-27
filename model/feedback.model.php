<?php

// inclusion du fichier de configuration
include("config/config.inc.php");

// inclusion du 'pdo.inc.php' qui est le fichier de connexion
// à la base de données (dans ce fichier, il y aura également des contrôles)
include("model/pdo.inc.php");

	// on essaye de se connecter
	try {
		// on donne à la variable '$query' un valeur -- en l'occurence c'est une requête (string) qui sera utilisée plus tard
		// FROM d'où proviennent les données
		// INNER JOIN tables vers lesquelles on fait les jointures
		// ORDER BY ordre avec lequel on souhaite afficher les datas
		$query = "SELECT *
		FROM blog_contacts
		ORDER BY contact_ID DESC";

		// ligne commentée, permet de faire du debug du code
		// die($query);

		// On envoie la requête vers la connexion pour récupérer
		// les données
		$req = $pdo->query($query);

		// -------------------
		// Nous utiliserons les résultats en tant que tableau scalaire (mode par défaut)
		// Traitement des résultats en boucle
		// while( $data = $req->fetch() )
		// {
        //     // echo "fetch()";
		// 	// var_dump($data);
        //     echo "<br>" . $data["post_title"] . "<br>";
		// -------------------

		// on déclare une variable '$data' à laquelle on attribue le tableau récupéré par la
		// requête à laquelle on demande de parcourir toutes les données
		// fetch = va chercher et ALL c'est tout ..
        $data = $req->fetchAll();

		// ligne commentée, permet de faire du debug du code
		// var_dump($data);

		// Terminer la requête en fermant le curseur
		// $req->closeCursor();
	}
	// on récupère les anomalies qui auraient pu se produire dans la variable que l'on déclare
	// ci-dessous '$e'
	catch ( Exception $e ) {
		// et si cette variable n'est pas à Null, bim on affiche le message qu'elle contient
		die("Erreur MySQL : " . $e->getMessage());
	}

// déclaration en dur des variables dont on a besoin dans le header dans la page d'accueil
$bg = "assets/img/feedback2-bg.jpg";
$layout_title="Vos commentaires ...";
$header_title="Feedback";
$header_subtitle="Que de commentaires, fioufffff ..";
$content = "";

// -------------------
// $titre_art_1 = "La Torche surf";
// $subtitle_art_1 = "Les surf camps bretons";
// $author_art_1 = "Antoine B.";
// $date_art_1 = "18 Mars 2022";
// -------------------