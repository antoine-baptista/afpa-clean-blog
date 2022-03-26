        <!-- inclusion de la 'nav' qui rassemble la déclaration du code HTML ainsi que la 'nav' -->
        <?php include("view/layout/nav.inc.php"); ?>
        <!-- Page Header-->
        <!-- inclusion du 'header' -- textes et image de fond -->
        <?php include("view/layout/header.inc.php"); ?>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>
                            <?php echo $data["post_content"]; ?>
                        </p>
                        <p class="post-meta">
                                    Rédigé par
                                    <a href="#!"><?= $data["display_name"] ?></a>
                                    le <?= $data["post_date"] ?>
                                    <br>
                                    Classé dans <b><?= $data["cat_descr"] ?></b>
                        </p>
                    </div>
                </div>
            </div>
        </article>
        <!-- Footer-->
        <!-- inclusion du 'footer' on va rechercher le layout (gabarit) qui va bien -->
        <?php include("view/layout/footer.inc.php"); ?>
        <!-- Bootstrap core JS-->
        
