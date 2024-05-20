<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./src/styles/Global.css">
    <link rel="stylesheet" type="text/css" href="./src/styles/Accueil.css">
    <title>PolyRecherche - Accueil</title>
</head>

<body>
    <?php require_once("./src/components/header.php"); ?>
    <section class="home-search" id="scroll-down">
        <div class="white_bold">
            <span> 1 338 156 </span> documents scientifiques,
            <span> 3 662 796 </span> références
        </div>
        <form action="/search/index" method="get" id="searchNG">
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group position-relative">
                        <input type="text" name="q" class="form-control autocompletesearch ui-autocomplete-input" autocomplete="off" placeholder="Rechercher..." required>
                        <button type="submit" aria-label="search" class="search-button">
                            Rechercher
                        </button>
                    </div>
                </div>
            </div>
        </form>
        <div class="white_bold browse-domain">
            Consulter Polyrecherche par discipline
        </div>
        <div>
            <div class="wrapper" id="wrapperDomain">
                <a href="/search/index/?q=domain_t:chim">Chimie</a>
                <a href="/search/index/?q=domain_t:stat">Statistiques </a>
                <a href="/search/index/?q=domain_t:phys">Physique </a>
                <a href="/search/index/?q=domain_t:shs">Sciences de l'Homme et Société</a>
                <a href="/search/index/?q=domain_t:sdu">Planète et Univers </a>
                <a href="/search/index/?q=domain_t:info">Informatique </a>
                <a href="/search/index/?q=domain_t:spi">Sciences de l'ingénieur </a>
                <a href="/search/index/?q=domain_t:math">Mathématiques </a>
                <a href="/search/index/?q=domain_t:nlin">Science non linéaire </a>
                <a href="/search/index/?q=domain_t:sdv">Sciences du Vivant </a>
                <a href="/search/index/?q=domain_t:sde">Sciences de l'environnement</a>
                <a href="/search/index/?q=domain_t:qfin">Économie et finance quantitative </a>
                <a href="/search/index/?q=domain_t:scco">Sciences cognitives</a>
            </div>
        </div>
    </section>
    <section class="about">
        <h2>Challenges Scientifiques et Collaboration</h2>
        <p>Les chercheurs sont regroupés dans des laboratoires tels que le LISTIC ou autre, où ils travaillent sur des thématiques variées mais souvent liées, comme l'intelligence artificielle (IA). Par exemple, certains se spécialisent dans les modèles de langage (LLM) tandis que d'autres se concentrent sur le traitement d'images. Polyrecherche facilite la collaboration et le partage d'informations entre ces chercheurs, en offrant une plateforme où ils peuvent publier et accéder à des travaux de recherche, participer à des projets collaboratifs, et suivre les évolutions dans leur domaine respectif.</p>

        <h2>Gestion et Visualisation des Publications</h2>
        <p>Actuellement, le suivi des activités de recherche se fait principalement par le biais des publications dans des conférences et des journaux scientifiques. Polyrecherche va plus loin en automatisant la collecte de ces publications, en construisant des graphes de citations (indiquant quels articles citent quels autres articles) et en fournissant des tableaux de bord statistiques. Ces outils permettent d'avoir une vue d'ensemble de l'activité de recherche, tant au niveau du laboratoire qu'au niveau individuel.</p>

        <h2>Bibliométrie et Analyse de Données</h2>
        <p>Notre plateforme offre des fonctionnalités avancées de bibliométrie, permettant de récupérer automatiquement les publications des chercheurs, de construire des graphes de citations, et d'analyser comment les travaux sont cités au fil du temps. Avec un volume de données pouvant atteindre 200 articles et 8000 citations, Polyrecherche relève les défis du Big Data en proposant des outils robustes pour traiter et visualiser ces données.</p>

        <h2>Fonctionnalités Clés</h2>
        <ul>
            <li><strong>Publications :</strong> Publiez et accédez à des articles scientifiques, des thèses, et d'autres types de travaux de recherche.</li>
            <li><strong>Collaboration :</strong> Collaborez avec d'autres chercheurs à travers des projets de recherche partagés.</li>
            <li><strong>Recherche :</strong> Utilisez notre moteur de recherche avancé pour trouver des publications pertinentes.</li>
            <li><strong>Profil :</strong> Créez et gérez votre profil d'utilisateur, incluant votre CV, vos publications et vos projets.</li>
            <li><strong>Visualisation :</strong> Visualisez des graphes de citations et des tableaux de bord statistiques pour analyser les tendances de recherche.</li>
        </ul>

        <div class="logo-section">
            <div class="logo-container-first">
                <a href="https://www.univ-smb.fr/listic/" target="_blank" rel="noopener">
                    <img style="height: 100px;" src="./assets/LISTIC_logo.jpeg" alt="LISTIC - USMB">
                </a>
            </div>
            <div class="logo-container">
                <a href="https://www.univ-smb.fr/" target="_blank" rel="noopener">
                    <img style="height: 100px;" src="./assets/LogoUSMB.png" alt="Université Savoie Mont Blanc">
                </a>
            </div>
            <div class="logo-container">
                <a href="https://www.polytech.univ-smb.fr/" target="_blank" rel="noopener">
                    <img style="height: 100px;" src="./assets/LogoPolytechAcChy.png" alt="Polytech Annecy">
                </a>
            </div>

            <div class="logo-container">
                <a href="https://edytem.osug.fr/" target="_blank" rel="noopener">
                    <img style="height: 100px;" src="./assets/LogoEDYTEM.jpg" alt="EDYTEM">
                </a>
            </div>
            <div class="logo-container">
                <a href="https://www.cnrs.fr/fr" target="_blank" rel="noopener">
                    <img style="height: 100px;" src="./assets/LogoCNRS.jpg" alt="CNRS">
                </a>
            </div>
            <div class="logo-container">
                <a href="https://scholar.google.com/" target="_blank" rel="noopener">
                    <img style="height: 100px;" src="./assets/LogoGoogleScholar.jpg" alt="Google Scholar">
                </a>
            </div>
            <div class="logo-container">
                <a href="https://hal.science/" target="_blank" rel="noopener">
                    <img style="height: 100px;" src="./assets/LogoHAL.png" alt="HAL">
                </a>
            </div>
        </div>
    </section>

    <?php
    require_once("./src/components/footer.php");
    ?>
</body>