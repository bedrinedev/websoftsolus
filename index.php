<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Expert sur les modules et les modules personnalisés | Websoftsolus</title>
    <meta name="description" content="Websoftsolus vous propose des modules WHMCS et des scripts logiciels personnalisés de haute qualité.">
    <link rel="apple-touch-icon" href="IMG/favicon.png">
    <link rel="icon" href="IMG/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="CSS/framework.css">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <meta charset="utf-8">
</head>

<body>
    <header>
        <div id="tete-site-1">
            <div class="titre-site" valign="middle">
                <a href="index.php" class="nosoulignes">
                    <p class="text9 gras maj titre-site">
                        Websoftsolus
                    </p>
                </a>
            </div>

            <nav class="menu-nav" align="right" valign="middle">
                <ul>
                    <li class="btn">
                        <a href="#">Contact</a>
                    </li>
                    <li class="btn">
                        <a href="#contact">Connexion</a>
                    </li>
                </ul>
            </nav>
        </div>
        <nav class="menu-nav-2" align="right" valign="middle">
            <ul>
                <li class="btn">
                    <a href="#">Accueil</a>
                </li>
                <li class="btn">
                    <a href="#">Modules WHMCS</a>
                </li>
                <li class="btn">
                    <a href="#">Modules récent</a>
                </li>
                <li class="btn">
                    <a href="#">Autres modules complémentaires</a>
                </li>
                <li class="btn">
                    <a href="#">Prestations de service</a>
                </li>
                <li class="btn">
                    <a href="#">Entreprise</a>
                </li>
                <li class="btn-active">
                    <a href="#contact">Commander</a>
                </li>
            </ul>
        </nav>
    </header>

    <div id="contenu-site">
        <section class="accueil reveal" id="accueil">
            <div class="accueilcontent" align="center">
                <h1 class="autotext text9 blanc gras">Expert en module WHMCS</h1>
            </div>
        </section>
        <section class="info reveal" id="info">
            <div class="infocontent" align="center">
                <div class="info">
                    <h2 class="text7 blanc reveal-1">Services</h2>
                    <div class="grid-service">
                        <div class="service">
                            <img src="IMG/integration.png" class="reveal-2" alt="Intégration WHMCS" align="center" width="80" height="80">
                            <div class="textservice">
                                <h3 class="color_text text2 gras reveal-3" align="center">Intégration WHMCS</h3>
                                <h4 class="blanc">Si vous recherchez une intégration de la plus haute qualité avec votre conception Web,
                                    vous êtes au bon endroit !</h4>
                            </div>
                        </div>
                        <div class="service">
                            <img src="IMG/module.png" class="reveal-2" alt="Module WHMCS" align="center" width="80" height="80">
                            <div class="textservice">
                                <h3 class="color_text text2 gras reveal-3" align="center">Module WHMCS</h3>
                                <h4 class="blanc">Les services WHMCS fournissent des modules / modules complémentaires qui, selon eux,
                                    profiteront à la communauté WHMCS.</h4>
                            </div>
                        </div>
                        <div class="service">
                            <img src="IMG/dev-pers.png" class="reveal-2" alt="Développement personnalisé" align="center" width="80" height="80">
                            <div class="textservice">
                                <h3 class="color_text text2 gras reveal-3" align="center">Développement personnalisé</h3>
                                <h4 class="blanc">Nous avons de l'expérience dans le développement de modules de serveur personnalisés,
                                    de modules de passerelle, de modules de registraire de domaine et même de crochets d'action personnalisés.</h4>
                            </div>
                        </div>
                        <div class="service">
                            <img src="IMG/affiliate.png" class="reveal-2" alt="Programme d'affiliation" align="center" width="80" height="80">
                            <div class="textservice">
                                <h3 class="color_text text2 gras reveal-3" align="center">Programme d'affiliation</h3>
                                <h4 class="blanc">Websoftsolus reconnaît la nécessité d'avoir un bon programme d'affiliation honnête
                                    afin d'être compétitif sur Internet.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="a-propos" id="a-propos">
            <div class="a-propos">
                <img src="IMG/a-propos.png" class="reveal-2" alt="À propos de nous" align="center" width="180" height="180">
                <div class="textservice">
                    <h2 class="color_text text5 gras reveal-3">À propos de nous</h2>
                    <h4 class="blanc">Websoftsolus vous propose uniquement des modules et des modules/addons personnalisés de la plus haute qualité.
                        Avec Websoftsolus, vous obtenez tout ce dont vous avez besoin et le soutien que vous méritez pour lancer et maintenir
                        une entreprise en ligne prospère. Nous ne nous contenterons pas de vous remettre votre logiciel et de vous dire que vous
                        êtes seul. Non. Nous fournissons tout le soutien dont vous avez besoin.</h4>
                </div>
            </div>
        </section>
        <section class="contact" id="contact">
            <div class="contactcontent" align="center">
                <h2 class="text7 blanc soulignes reveal-1" align="center">
                    Formulaire de contact
                </h2>
                <div class="reveal" id="form-ctt">
                    <form class="form-ctt" method="post" role="form">
                        <div class="contenu-form reveal-1">
                            <div align="center">
                                <input type="text" name="prenom-ctt" id="prenom-ctt" class="form-control" placeholder="Prenom *" value="<?php if (isset($_POST['prenom-ctt'])) {
                                                                                                                                            echo $_POST['prenom-ctt'];
                                                                                                                                        } ?>">
                            </div>
                            <div align="center">
                                <input type="text" name="nom-ctt" id="nom-ctt" class="form-control" placeholder="Nom *" value="<?php if (isset($_POST['nom-ctt'])) {
                                                                                                                                    echo $_POST['nom-ctt'];
                                                                                                                                } ?>">
                            </div>
                            <div align="center">
                                <input type="email" name="email-ctt" id="email-ctt" class="form-control" placeholder="E-mail *" value="<?php if (isset($_POST['email-ctt'])) {
                                                                                                                                            echo $_POST['email-ctt'];
                                                                                                                                        } ?>">
                            </div>
                            <div align="center">
                                <textarea name="message-ctt" id="message-ctt" placeholder="Message *"><?php if (isset($_POST['message-ctt'])) {
                                                                                                            echo $_POST['message-ctt'];
                                                                                                        } ?></textarea>
                            </div>
                            <p class="etoile gras" align="center">* Ces informations sont requise</p>
                            <div align="center">
                                <input type="submit" value="Envoyer" name="btn-valider-ctt" class="btn-valider-ctt">
                            </div>
                            <p align="center" class="reponsectt"></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <footer>
        <div id="pied-site" class="reveal">
            <div class="copyright reveal-1" align="center">
                <p class="blanc">
                    Copyright © Websoftsolus <?php echo date("Y"); ?>
                </p>
            </div>
            <div class="reseau-social reveal-2" align="center">
                <a class="reseau-social nosoulignes" href="" target="_blanck">
                    <img src="IMG/facebook.png" class="reveal-1" alt="Facebook" align="center" width="35" height="35">
                </a>
                <a class="reseau-social nosoulignes" href="v" target="_blanck">
                    <img src="IMG/twitter.png" class="reveal-1" alt="Twitter" align="center" width="35" height="35">
                </a>
                <a class="reseau-social nosoulignes" href="v" target="_blanck">
                    <img src="IMG/instagram.png" class="reveal-1" alt="Instagram" align="center" width="35" height="35">
                </a>
                <a class="reseau-social nosoulignes" href="v" target="_blanck">
                    <img src="IMG/linkedin.png" class="reveal-1" alt="Linkedin" align="center" width="35" height="35">
                </a>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="JS/autotext.js"></script>
    <script src="JS/contact.js"></script>
    <script src="JS/scroll-animation.js"></script>
</body>

</html>