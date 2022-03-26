<?php
        // inclusion du modèle 'home.model.php' dans le contrôleur
        include("model/contact.model.php");
        // on donne à la variable '$layout_title' une valeur
        // cette valeur a été déclarée au préalable dans le fichier de configuration 'config.inc.php' 
        $layout_title = 'Pour nous contacter ...';
        // inclusion de la vue 'home.view.php'
        include("view/contact.view.php");