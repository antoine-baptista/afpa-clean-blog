<?php
        // inclusion du modèle 'home.model.php' dans le contrôleur
        include("model/home.model.php");
        
        // ligne commentée, peut être décommentée pour faire des tests
        // var_dump($data);
        
        // on donne à la variable '$layout_title' une valeur
        // cette valeur a été déclarée au préalable dans le fichier de configuration 'config.inc.php' 
        $layout_title = 'Titre = ' . $header_title;

        // inclusion de la vue 'home.view.php'
        include("view/home.view.php");