<?php

// var_dump($_GET);    // méthode GET visible dans l'URL
// var_dump($_POST);   // méthode POST non visible dans l'URL

// on effectue quelques contrôles de cohérence sur quelques champs
// si le nom est absent
if (!isset($_POST["name"]) ) {
        die("Nom obligatoire !");
} 
// si le nom est égal à une chaine vide
if ($_POST["name"] == "") {
    die("Le nom doit contenir une valeur !");
}
// si la longueur du nom est supérieure à 25 caractères
if (strlen($_POST["name"]) > 25) {
    die("Le nom doit comporter uniquement 25 caractères maximum !");
}

// inclusion du modèle 'home.model.php' dans le contrôleur
include("model/contact.add.model.php");

// quand on arrive à la ligne qui suit on affiche un message à l'attention de l'internaute
// lui indiquant que son message a été pris en compte -- redirection vers le fichier nav
header("Location:index.php?notif=1");
exit;
