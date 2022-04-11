<?php
$page = "Index";
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Roboto:wght@300;700&family=Raleway&display=swap" rel="stylesheet">
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    <title>Thomas DUFOUR</title>
</head>
<body>
<div class="left-side" style="display: flex; flex-direction: column">
    <div class="profil-picture">

    </div>
    <div class="nom-prenom">
        <h1>DUFOUR Thomas</h1>
    </div>
    <div class="menu">
        <ul class="flex-menu">
            <li class="flex-item"><a href="index.php" id="home" class="link-item selected-page">Home</a></li>
            <li class="flex-item"><a href="#about" id="presentationBts" class="link-item">About</a></li>
            <li class="flex-item"><a href="#"  class="link-item">BTS SIO</a></li>
            <li class="flex-item"><a href="#" class="link-item">Skills</a></li>
            <li class="flex-item"><a href="#" class="link-item">Education</a></li>
        </ul>
    </div>
    <div class="reseau">
        <ul class="line-social">
            <li><a href="https://github.com/Krowv"><span class="iconify icone" data-icon="brandico:linkedin-rect"></span></a></li>
            <li><a href="https://www.linkedin.com/in/thomas-dufour-885a75205/"><span class="iconify icone" data-icon="akar-icons:github-fill"></span></a></li>
        </ul>
    </div>
</div>
<div class="copyright">
    ©Copyright ©2022 <strong>DUFOUR Thomas</strong>
</div>
<div class="home">
    <div class="right-side">
        <div class="présentation">
            <p>Thomas DUFOUR</p>
            <br>
            <p>Portfolio</p>
        </div>
    </div>
</div>
<div class="presentation">
    <div class="presentation-title">
        <h2 id="about">A propos</h2>
        <hr class="title-subtitle">
    </div>
    <div class="flex-presentation">
        <div class="content-img-presentation">
            <img src="assets/pdp.png" alt="">
        </div>
        <div class="content-text-presentation">
            <h3>Présentation</h3>
            <hr class="title-subtitle">
            <p>Bonjour, je suis  <i>DUFOUR Thomas</i> étudiant en alternance en <strong>BTS SIO</strong> (<i>Services informatiques aux organisations</i>) a l'école IRIS du campus Mediaschool pour l'entreprise <strong>Wendling Adhésif et équipements</strong>. J'ai choisi l'option <strong>SLAM</strong> (<i>Solution Logicielles et Application Métier</i>) pour devenir un développeur Web orienté Back-end.</p>
            <p>Etant de base plutôt orienté <strong>Front-end</strong>, je suis rapidement passé dans une orientation plutôt <strong>Back-end</strong> pour les besoins de mon entreprise.</p>
            <br>
            <h3>Ce que je veux devenir</h3>
            <hr class="title-subtitle">
            <p>Comme je l'ai dis au préalable, je souhaiterais devenir un <strong>développeur Web</strong>, dans l'idéal, <i>spécialisé</i> dans les framework PHP tels que <strong>Symfony et Laravel</strong></p>
            <p>J'ai aussi comme ambition d'apprendre un framework <strong>Javascript</strong> : <i>Vue.js</i></p>
        </div>
    </div>
    <div class="presentation-bts">
        <h2 id="bts-sio">Qu'est ce que le BTS SIO</h2>
        <hr class="title-subtitle">
        <div class="flex-optn">
            <div class="opt-slam">
                <h3 class="tac">SLAM</h3>
                <h4>Qu'est-ce que l'option SLAM ?</h4>
                <p>L’option <strong>SLAM</strong> est destinée aux étudiants qui s’orientent vers les métiers liés à la <strong>conception et la maintenance</strong> de programmes applicatifs.</p>
                <p>Le diplômé participe à la <i>production et à la fourniture</i> de services en <strong>développant</strong>, en <strong>adaptant</strong> ou en <strong>maintenant</strong> des solutions applicatives.</p>
                <p>En ayant également suivi des cours plus généraux, l’étudiant disposera de solides connaissances en <strong>informatique générale</strong>, mais aussi en télécommunications, systèmes d’information, bases de données, outils de développement des applications</p>
                <h4>Les débouchés</h4>
                <ul>
                    <li>Développeur d’applications informatiques</li>
                    <li>Chargé d’études informatiques</li>
                    <li>Responsable des services applicatifs</li>
                    <li>Programmeur analyste</li>
                    <li>Programmeur d’applications</li>
                    <li>Technicien d’études informatiques</li>
                </ul>
            </div>
            <div class="opt-sisr">
                <h3 class="tac">SISR</h3>
                <h4>Qu'est-ce que l'option SISR ?</h4>
                <p>L’option <strong>SISR</strong> est destinée aux étudiants qui s’orientent vers les métiers liés à la <strong>conception et la maintenance</strong> d’infrastructures réseaux.</p>
                <p>Comme pour <i>l’autre option</i>, des cours plus généraux viendront compléter la formation et apporter des <strong>compétences</strong> plus généralistes, permettant ainsi aux diplômés d’être opérationnels dans <i>n’importe quelle entreprise</i>.</p>
                <p>Assurer la <strong>sécurité</strong>, la <strong>maintenance</strong> et <strong>l’installation</strong> des réseaux et des <i>équipements informatiques</i> font partie des principales missions des futurs administrateurs, techniciens ou pilotes d’exploitation.</p>
                <h4>Les débouchés</h4>
                <ul>
                    <li>Technicien de production</li>
                    <li>Technicien d’infrastructure</li>
                    <li>Technicien réseau — télécoms</li>
                    <li>Technicien systèmes et réseaux</li>
                    <li>Administrateur systèmes et réseaux</li>
                    <li>Support systèmes et réseaux</li>
                    <li>Pilote d’exploitation</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="projets-e-4">
        <h2>Projets E4</h2>
        <hr class="title-subtitle">
        <div class="flex-projets">
            <div class="card">
                <a href="assets/pdf/userTicket.pdf">
                    <div class="img-cadre">
                        <img src="assets/test.jpg" alt="">
                    </div>
                    <div class="title-mission">
                        <p>Gestion ticket utilisateur</p>
                    </div>
                    <div class="description-mission">
                        <p>Gestion d'une erreur faite par un préparateur de commande</p>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="assets/pdf/webServer.pdf">
                    <div class="img-cadre">
                        <img src="assets/cmd.jpg" alt="">
                    </div>
                    <div class="title-mission">
                        <p>Certificat SSL</p>
                    </div>
                    <div class="description-mission">
                        <p>Installation d'un certificat SSL/TLS pour appel API</p>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="">
                    <div class="img-cadre">
                        <img src="assets/connexion.png" alt="">
                    </div>
                    <div class="title-mission">
                        <p>Inscription / Connexion</p>
                    </div>
                    <div class="description-mission">
                        <p>Création d'un formulaire d'inscription et de de connextion</p>
                    </div>
                </a>
            </div>
            <!--<div class="card">
                <a href="">
                    <div class="img-cadre">

                    </div>
                    <div class="title-mission">

                    </div>
                    <div class="description-mission">

                    </div>
                </a>
            </div>
            <div class="card">
                <a href="">
                    <div class="img-cadre">

                    </div>
                    <div class="title-mission">

                    </div>
                    <div class="description-mission">

                    </div>
                </a>
            </div>
            <div class="card">
                <a href="">
                    <div class="img-cadre">

                    </div>
                    <div class="title-mission">

                    </div>
                    <div class="description-mission">

                    </div>
                </a>
            </div>-->
        </div>
    </div>
    <div class="div-hr-rupture">
        <hr class="rupture-hr">
    </div>
    <div class="skills">
        <div class="skill-content">
            <span>HTML/CSS</span>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="skill-content">
            <span>PHP</span>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="skill-content">
            <span>Symfony</span>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="skill-content">
            <span>Javascript</span>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
</div>
<script src="src/js/app.js"></script>
</body>
</html>