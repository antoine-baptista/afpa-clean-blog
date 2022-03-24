<?php

include("config/config.inc.php");
include("model/pdo.inc.php");

	try {
		$query = "SELECT post_ID, post_date, LEFT(post_content, " . TRONCATURE . ") AS post_content, post_title, post_img_url, display_name, cat_descr
		FROM blog_posts

		INNER JOIN blog_users
		ON post_author = ID

		INNER JOIN blog_categories
		ON post_category = cat_id
		
		ORDER BY post_id DESC";

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
        $data = $req->fetchAll();
		// var_dump($data);
		// Terminer la requête en fermant le curseur
		// $req->closeCursor();
	}
	catch ( Exception $e ) {
		die("Erreur MySQL : " . $e->getMessage());
	}








$bg = "assets/img/home-bg.jpg";
$header_title="Blog de Surf";
$header_subtitle="Pas pour les midinettes !";
$content = "";





// $titre_art_1 = "La Torche surf";
// $subtitle_art_1 = "Les surf camps bretons";
// $author_art_1 = "Antoine B.";
// $date_art_1 = "18 Mars 2022";