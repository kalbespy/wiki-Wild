<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="link.css" />
    <title>wikiWild</title>
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
                <h3>Magnus Carlsen/1994 /8.2.0</h3>
                <p>PHP est un langage de script utilisé le plus souvent côté serveur : dans cette architecture, le serveur interprète le code PHP des pages web demandées et génère du code (HTML, XHTML, CSS par exemple) et des données (JPEG, GIF, PNG par exemple) pouvant être interprétés et rendus par un navigateur web. PHP peut également générer d'autres formats comme le WML, le SVG et le PDF.</p>
                <a href="pagePHP.php">
                    <button type="button" class="buttonHome">Voir toutes les docs</button>
                </a>
            </div>
        </div>
    </section>
    <section id="homeSection"> 
        <div class="homeSection">
            <div class="homeImg"><img src="assets/javascript.png" alt="php image"></div>
            <div class="sectionHomeText">
                <h2>JAVASCRIPT</h2>
                <h3>Magnus Carlsen/1994 /8.2.0</h3>
                <p>PHP est un langage de script utilisé le plus souvent côté serveur : dans cette architecture, le serveur interprète le code PHP des pages web demandées et génère du code (HTML, XHTML, CSS par exemple) et des données (JPEG, GIF, PNG par exemple) pouvant être interprétés et rendus par un navigateur web. PHP peut également générer d'autres formats comme le WML, le SVG et le PDF.</p>
                <button type="button" class="buttonHome">Voir toutes les docs</button>
            </div>
        </div>
    </section>

    <section id="homeSection">
        <div class="homeSection">
           <div class="homeImg"><img src="assets/html.png" alt="php image"></div>
           <div class="sectionHomeText">
            <h2>CSS</h2>
                <h3>Magnus Carlsen/1994 /8.2.0</h3>
                <p>PHP est un langage de script utilisé le plus souvent côté serveur : dans cette architecture, le serveur interprète le code PHP des pages web demandées et génère du code (HTML, XHTML, CSS par exemple) et des données (JPEG, GIF, PNG par exemple) pouvant être interprétés et rendus par un navigateur web. PHP peut également générer d'autres formats comme le WML, le SVG et le PDF.</p>
                <button type="button" class="buttonHome" >Voir toutes les docs</button>
                
            </div>
        </div>
</section>
<?php include("_footer.php"); ?>
<!-- <button  id="mode"> <span>Thème sombre</span></button> -->
<script src="script.js"></script>
</body>
</html>
