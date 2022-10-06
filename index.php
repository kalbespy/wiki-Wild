<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="link.css" />
    <title>wikiWild - Accueil</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,900;1,100;1,500&display=swap"
        rel="stylesheet">
    <link rel="icon" href="/assets/favicon.png">
</head>

<body>

<?php include("_header.php"); ?>

    <h1 class="titleHomepage">Bienvenue sur wikiWild !</h1>
    <section id="homeSection">
        <div class="homeSection">
            <div class="homeImg" ><img src="assets/php.png" alt="php image"></div>
            <div class="sectionHomeText">
                <h2>PHP</h2>
                <h3>Rasmus Lerdorf / 1994</h3>
                <p>PHP est un langage de script utilisé le plus souvent côté serveur : dans cette architecture, le serveur interprète le code PHP des pages web demandées et génère du code (HTML, XHTML, CSS par exemple) et des données (JPEG, GIF, PNG par exemple) pouvant être interprétés et rendus par un navigateur web. PHP peut également générer d'autres formats comme le WML, le SVG et le PDF.</p>
                <a href="pagePHP.php" > <button type="button" class="buttonHome">Voir toutes les docs</button></a>
            </div>
        </div>
    </section>
    <section id="homeSection"> 
        <div class="homeSection">
            <div class="homeImg"><img src="assets/javascript.png" alt="js image"></div>
            <div class="sectionHomeText">
                <h2>JAVASCRIPT</h2>
                <h3>	Brendan Eich / 1996</h3>
                <p>JavaScript est un langage de programmation de scripts principalement employé dans les pages web interactives et à ce titre est une partie essentielle des applications web. Avec les langages HTML et CSS, JavaScript est au cœur des langages utilisés par les développeurs web3. Une grande majorité des sites web l'utilisent4, et la majorité des navigateurs web disposent d'un moteur JavaScript5 pour l'interpréter.</p>
                <a href="pageJS.php" ><button type="button" class="buttonHome">Voir toutes les docs</button></a>
            </div>
        </div>
    </section>

    <section id="homeSection">
        <div class="homeSection">
           <div class="homeImg"><img src="assets/html.png" alt="cssimage"></div>
           <div class="sectionHomeText">
            <h2>CSS</h2>
                <h3>CSS Working Group / 1994</h3>
                <p>Les feuilles de style en cascade1, généralement appelées CSS de l'anglais Cascading Style Sheets, forment un langage informatique qui décrit la présentation des documents HTML et XML. Les standards définissant CSS sont publiés par le World Wide Web Consortium (W3C). Introduit au milieu des années 1990, CSS devient couramment utilisé dans la conception de sites web et bien pris en charge par les navigateurs web dans les années 2000.</p>
               <a href="pageCSS.php" ><button type="button" class="buttonHome" >Voir toutes les docs</button></a>
                
            </div>
        </div>
</section>
<?php include("_footer.php"); ?>
<!-- <button  id="mode"> <span>Thème sombre</span></button> -->
<script src="script.js"></script>
</body>
</html>
