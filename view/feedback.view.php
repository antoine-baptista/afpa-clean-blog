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
            <div class="container px-4 px-lg-12">
                <div class="row gx-4 gx-lg-12 justify-content-between">
                    <div class="col-md-10 col-lg-12 col-xl-12">
                            <!-- Adpatation des classes Bootstrap
                                 je concatène à chaque classe Bootstrap la valeur du contact_ID afin que toutes les lignes
                                 puissent avoir un id différent et ainsi s'ouvrir indépendamment dans la page
                                 si toutes possédaient le même id -- elles s'ouvriraient toutes ensemble
                                 --------------------------
                                 et je mets en forme les datas récupérés avec les icônes  -->
                            <?php foreach ($data as $onedata) {?>
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-heading<?= $onedata["contact_ID"] ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= $onedata["contact_ID"] ?>" aria-expanded="false" aria-controls="flush-collapse<?= $onedata["contact_ID"] ?>">
                                            Message # <?= $onedata["contact_ID"] ?> | posté le : <?= $onedata["contact_date"] ?> par <?= $onedata["contact_name"] ?>
                                        </button>
                                        </h2>
                                        <div id="flush-collapse<?= $onedata["contact_ID"] ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?= $onedata["contact_ID"] ?>" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">email contact 📧 : <a href="mailto:"><?= $onedata["contact_email"] ?></a> <br> Téléphone contact 📲 : <?= $onedata["contact_phone"] ?> <br> Message 💬 : <p class="text-primary"><?= $onedata["contact_message"] ?></p></div>
                                        </div>
                                    </div>
                                </div>           
                                
                            <?php } ?>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
        <!-- inclusion du 'footer' on va rechercher le layout (gabarit) qui va bien -->
        <?php include("view/layout/footer.inc.php"); ?>
