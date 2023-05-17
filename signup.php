<?php
require('./templates/header.php');
?>

<section class="vh-100 bg-brown-dark">
    <div class="container py-3 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-lg-block">
                            <img src="assets/images/connexion-inscription.jpg" alt="login form" class="img-fluid" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5">
                                <form>
                                    <div class="d-flex align-items-center mb-2 pb-1">
                                        <a href="index.php"><img src="assets/images/logo-quai-antique.png" alt="Logo Quai Antique" class="w-50"></a>
                                    </div>

                                    <h5 class="fw-bold mb-2 pb-2 orange">Inscrivez-vous</h5>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <span class="form-label" for="form3Example1m"></span>
                                                <input type="text" id="form3Example1m" class="form-control form-control-sm" placeholder="Prénom" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <span class="form-label" for="form3Example1n"></span>
                                                <input type="text" id="form3Example1n" class="form-control form-control-sm" placeholder="Nom" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <span class="form-label" for="form2Example17"></span>
                                        <input type="email" id="form2Example17" class="form-control form-control-sm" placeholder="E-mail" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <span class="form-label" for="form2Example27"></span>
                                        <input type="password" id="form2Example27" class="form-control form-control-sm" placeholder="Mot de passe" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <span class="form-label" for="form2Example27"></span>
                                        <input type="password" id="form2Example27" class="form-control form-control-sm" placeholder="Confirmez le mot de passe" />
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                    <option selected>Nombre de convives par défaut</option>
                                                    <option value="1">1 personne</option>
                                                    <option value="2">2 personnes</option>
                                                    <option value="3">3 personnes</option>
                                                    <option value="3">4 personnes</option>
                                                    <option value="3">5 personnes</option>
                                                    <option value="3">6 personnes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                    <option selected>Allergènes</option>
                                                    <option value="1">Pas d'allergènes</option>
                                                    <option value="2">Allergènes d’origine végétale</option>
                                                    <option value="2">Allergènes d’origine animale</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-check">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                                        <label class="form-check-label" for="form2Example3">
                                            <p class="small">J'accepte toutes les <a href="#!" class="purple">conditions générales</a></p>
                                        </label>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button class="btn orange-button btn-lg" type="button">S'inscrire</button>
                                    </div>
                                    <p class="small">Vous avez déjà un compte ? <a href="login.php" class="purple">Connexion</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>