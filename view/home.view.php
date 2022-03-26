        <!-- inclusion de la 'nav' qui rassemble la déclaration du code HTML ainsi que la 'nav' -->
        <?php include("view/layout/nav.inc.php"); ?>
        <!-- Page Header-->
        <!-- inclusion du 'header' -- textes et image de fond -->
        <?php include("view/layout/header.inc.php"); ?>

        <?php // var_dump($data);
        // foreach ($data as $onedata) {
            // echo "Data : ";
            // var_dump($onedata);
        // }
        ?> 
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- on récupère tous les posts en faisant une boucle avec foreach (pour tous) -->
                    <?php  foreach ($data as $onedata) { ?>
                            <!-- Post preview-->
                            <!-- on affiche un aperçu du post -->
                            <div class="post-preview">
                                <a href="post.php?article=<?= $onedata["post_ID"] ?>">
                                    <h2 class="post-title"><?= $onedata["post_title"] ?></h2>
                                    </a>
                                    <!-- image de fond -->
                                    <img src="<?= $onedata["post_img_url"] ?>" alt="">
                                    <!-- sous-titre et contenu du post -- à ce niveau on a enlevé la troncature car elle se fait dans 
                                         home.model.php -->
                                    <h3 class="post-subtitle"><?= $onedata["post_content"] //substr($onedata["post_content"],0, 200) ?> [...]</h3>
                                    <p class="post-meta">
                                        Rédigé par
                                        <a href="#!"><?= $onedata["display_name"] ?></a>
                                        le <?= $onedata["post_date"] ?>
                                        <br>
                                        Classé dans <b><?= $onedata["cat_descr"] ?></b>
                                    </p>
                            </div>
                            <!-- Divider-->
                            <hr class="my-4" />
                    <?php }?>       
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Anciennes publications →</a></div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <!-- inclusion du 'footer' on va rechercher le layout (gabarit) qui va bien -->
        <?php include("view/layout/footer.inc.php"); ?>
        <!-- Bootstrap core JS-->
