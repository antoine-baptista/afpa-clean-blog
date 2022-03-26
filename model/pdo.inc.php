<?php

// on essaye quelque chose
try
// on va regarder si on a accès à la base de données
// en reprenant les informations qui ont été mises dans le fichier 'config.inc.php'
{
    $dns = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
    // on déclare la variable '$options' en lui donnant la valeur du tableau récupéré
    $options = array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . DB_CHARSET,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    // interrogation de la base de données
    // on donne à la variable '$pdo' la valeur new PDO avec les valeurs récupérées
    $pdo = new PDO( $dns, DB_USER, DB_PASSWORD, $options);
    // echo "Connexion établie !!";
    // var_dump($pdo);
}
// on récupère les anomalies qui auraient pu se produire dans la variable que l'on déclare
// ci-dessous '$e'
catch ( Exception $e )

{
    // et si cette variable n'est pas à Null, bim on affiche le message qu'elle contient
    die("Connexion à MySQL impossible : " . $e->getMessage());
}