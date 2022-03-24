<?php
if ( (!isset($_GET['article'])) || ($_GET['article'] == 1) ) {

    $bg = 'assets/img/post-bg.jpg';
    $title="La Torche Surf";
    $color="green";

    $subtitle="Toutes les infos sur le spot Breton !";
    $content = 'La Torche fait partie de ces spots de surf mythiques en France comme à l’étranger. La pointe de la torche, dernier bastion du surf français face à l’immensité de l’Atlantique, est un spot de premier choix pour les surfeurs expérimentés. L’exposition du spot de la torche, dans 

    <style>
        .test {
            color: ' . $color . ';
        }
    </style>

    le pays du bigoudin, est optimale et bénéficie d’une houle brute venue tout droit des tempêtes de l’Atlantique Nord. Par bonnes conditions, la torche s’embrase pour devenir un spot de surf déchirant aux vagues monstrueuses. Vous cherchez des infos sur le spot la torche surf ? Les surf camps à la Torche et en Bretagne ? Vous <span class="test">êtes au bon endroit</span> !';

}

else if ($_GET['article'] == 2) {

    $bg = 'assets/img/image-6-1.jpg';
    $title="Costa Rica surf";
    // $color="";

    $subtitle="Pour planifier votre surf trip ou trouver un surf camp au Costa Rica, rendez-vous sur nos différents spots";
    $content = 'Notre site est un guide essentiel qui vous aide dans vos recherches des meilleurs surf camps autour du monde ! Que vous cherchiez des surf camps en France ou à l’étranger, Surfcamp.fr vous aiguille tout au long de la préparation de votre surf trip en recensant pour les infos clés de à retenir par surf camp et par spot : cours de surf, moniteurs de surf, surf house, activités proposées, ambiance de la guest house, possibilité de louer des planches et ou des combinaisons … Surfcamp.fr ne vise qu’à vous donner un maximum d’information et vous proposer la meilleure expérience qui soit pour votre prochain surf trip. Que vous soyez débutant et que vous cherchiez à attendre le surf, ou que vous cherchiez un guide locale ou un parcours surf personnalisé, vous avez l’embarras du choix.';

}

else if ($_GET['article'] == 3) {

    $bg = 'assets/img/image-5-1.jpg';
    $title="San Sebastien Surf";
    // $color="";

    $subtitle="ce qu'il faut savoir sur le spot";
    $content = 'Notre site est un guide essentiel qui vous aide dans vos recherches des meilleurs surf camps autour du monde ! Que vous cherchiez des surf camps en France ou à l’étranger, Surfcamp.fr vous aiguille tout au long de la préparation de votre surf trip en recensant pour les infos clés de à retenir par surf camp et par spot : cours de surf, moniteurs de surf, surf house, activités proposées, ambiance de la guest house, possibilité de louer des planches et ou des combinaisons … Surfcamp.fr ne vise qu’à vous donner un maximum d’information et vous proposer la meilleure expérience qui soit pour votre prochain surf trip. Que vous soyez débutant et que vous cherchiez à attendre le surf, ou que vous cherchiez un guide locale ou un parcours surf personnalisé, vous avez l’embarras du choix.';

}

else  {

    $bg = 'assets/img/erreur-404.jpg';
    $title="Erreur 404";
    // $color="";

    $subtitle="Page inexistante !!";
    $content = '';

}