<!--    HTML regroupant le HTML ainsi que la nav avec des classes BOOTSTRAP
        Cette 'view' (vue) est appelée chaque fois que l'utilisateur
        clique sur 'A PROPOS'
-->   

        <!-- inclusion de la 'nav' qui rassemble la déclaration du code HTML ainsi que la 'nav' -->
        <?php include("view/layout/nav.inc.php"); ?>
        <!-- Page Header-->
        <!-- inclusion du 'header' -- textes et image de fond -->
        <?php include("view/layout/header.inc.php"); ?>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Nos articles camps de surf sont reconnus par la communauté pour apporter de réels conseils aux surfeurs désireux de voir le monde et de s’essayer à l’expérience surf à l’étranger. Notre support est totalement gratuit et ne vise qu’à vous aider au mieux dans la préparation de vos surf trips en France et à l’étranger. Dans ce souci, nous nous plions en quatre pour vous apporter toutes les réponses à vos questions, et vous permettre de passer les meilleurs séjours surf possibles ! Aloha !</p>
                        <p>Cette rubrique est dédiée à des articles sur le monde et les actualités du surf. De façon un peu plus large, nous aimons faire un retour de nos expériences dans les surf camps que nous avons eu l’occasion de visiter. Ce blog comporte également des articles sur la nourriture, la culture locale, les conseils concernant vos voyages à l’étranger. Enfin, c’est une manière pour nous de nous exprimer et d’avoir vos retours sur différents sujets, puisque cette section est ouverte aux commentaires. N’hésitez pas à nous donner vos recommandations, vos avis sur un sujet en particulier ou compléter nos infos si vous ne les jugez pas assez pertinentes ! </p>
                        <p>En matière de surf, la France pourrait bien avoir son mot à dire. Si la culture surf y est aussi bien implantée depuis tant d’année, c’est pour de nombreuses raisons. La principale d’entre elle est sans doute la multitude de spots qu’elle offre sur un si petit territoire. De Dunkerque à Hendaye, du Pas-de-Calais au Pays Basque, en passant par la Normandie, la Bretagne, la Vendée, la Charentes, la Gironde et les Landes, le surf en France n’a jamais été aussi développé qu’à l’heure actuelle. Bon présage pour certains, exaspérant pour d’autre, les chiffres sont là : chaque année, de plus en plus d’adeptes rejoignent l’aventure et se lancent à l’eau, planche sous le bras. En parallèle de la demande croissante, de plus en plus d’écoles de surf ouvrent, de plus en plus de professeurs de surf son diplômés, de plus en plus de planches sont vendus.</p>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
        <!-- inclusion du 'footer' on va rechercher le layout (gabarit) qui va bien -->
        <?php include("view/layout/footer.inc.php"); ?>
