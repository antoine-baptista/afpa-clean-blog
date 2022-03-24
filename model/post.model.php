<?php

// Post model

include("config/config.inc.php");
include("model/pdo.inc.php");

try {
		$query = "SELECT post_ID, post_date, post_content, post_title, post_img_url, display_name, cat_descr
		FROM blog_posts

		INNER JOIN blog_users
		ON post_author = ID

		INNER JOIN blog_categories
		ON post_category = cat_id
		
		WHERE post_ID = " . $_GET["article"];

		// die($query);

		// On envoie la requête
		$req = $pdo->query($query);

		// Nous utiliserons les résultats en tant que tableau scalaire (mode par défaut)
		// Traitement des résultats en boucle
		// while( $data = $req->fetch() )
		// {
        //     // echo "fetch()";
		// 	// var_dump($data);
        //     echo "<br>" . $data["post_title"] . "<br>";
        $data = $req->fetch();
		// var_dump($data);
		// Terminer la requête en fermant le curseur
		// $req->closeCursor();
	}
	catch ( Exception $e ) {
		die("Erreur MySQL : " . $e->getMessage());
	}