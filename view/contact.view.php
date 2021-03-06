<!-- Inclusion du layout (gabarit) qui contient le début du code HTML ainsi que la nav -->
<?php include("view/layout/nav.inc.php"); ?>
        <!-- Page Header-->
        <!-- Inclusion du layout (gabarit) qui contient le header -->
        <?php include("view/layout/header.inc.php"); ?>
        <!-- Main Content-->
        <!-- Ci-dessous HTML Bootstrap qui constitue le code pour la page 'contact' -->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Vous voulez me contacter ? Remplissez le formulaire ci-dessous pour m'envoyer un message et je vous répondrai dans les plus brefs délais !</p>
                        <div class="my-5">
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form id="contactForm" action="contact.add.php" method="post">
                                <div class="form-floating">
                                    <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." maxlength=25 required />
                                    <label for="name">Nom</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Un nom est requis.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="email" name="email" type="email" placeholder="Enter your email..." required />
                                    <label for="email">Adresse mail</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">Une adresse mail est requise.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Adresse mail non valide.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="phone" name="phone" required pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" type="tel" placeholder="Enter your phone number..." />
                                    <label for="phone">Numéro de téléphone</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">Un numéro de téléphone est requis.</div>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" name="message" placeholder="Enter your message here..." style="height: 12rem" required></textarea>
                                    <label for="message">Message</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">Un message est requis.</div>
                                </div>
                                <br />
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Soumission du formulaire réussie !</div>
                                        Pour activer ce formulaire, inscrivez-vous à
                                        <br />
                                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Erreur d'envoi du message !</div></div>
                                <!-- Submit Button-->
                                <!-- C'est ce bouton qui envoie avec l'instruction 'submit' les données qui ont été saisies dans le formulaire
                                     à la base de données -->
                                <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
        <!-- Inclusion du layout (gabarit) qui contient le footer -->
        <?php include("view/layout/footer.inc.php"); ?>
        <!-- Bootstrap core JS-->
        
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->

