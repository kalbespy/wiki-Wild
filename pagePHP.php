<!DOCTYPE html>


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>wikiWild - PHP</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,900;1,100;1,500&display=swap"
        rel="stylesheet">
    <link rel="icon" href="/assets/favicon.png">
</head>


<body>
<?php include("_header.php"); ?>

    <main>

    <header>
        <h1>PHP</h1>
    </header>

    <main id="main">

        <section id="filter">
            <div class="filterSection">
                <h2>Filtrer par source</h2>
                <div class="tags">
                    <button id='wild' class="filterButton"> <span class=buttonText>Wild</span></button>
                    <button id='wilder' class="filterButton"> <span class=buttonText>Wilders</span></button>
                </div>
            </div>
            <div class="filterSection">
                <h2>Filtrer par type</h2>
                <div class="tags">
                    <button id="rtfm" class="filterButton"> <span class=buttonText>RTFM</span></button>
                    <button id="article" class="filterButton"> <span class=buttonText>Article</span></button>
                    <button id="video" class="filterButton"> <span class=buttonText>Vidéo</span> </button>
                    <button id="jeux" class="filterButton"> <span class=buttonText>Jeu</span></button>
                </div>
            </div>
        </section>



        <!-- Section des articles -->

        <section class="article">


            <!-- Article 1 -->


            <article> 
                <a href='https://www.php.net/' target="_blank">
                    <div class="jsArticle js1">
                        <div class="categoryFilter">
                            <p class="btnFilter">Wilder</p>
                            <p class="btnFilter">RTFM</p>
                        </div>
                    </div>
                    <div class="articleDescription">
                        <h3>Toute la doc PHP !</h3>
                        <p class="articleText">La doc officielle de PHP - UN MUST !</p>
                        <p class="date">29/09/22</p>
                    </div>
                </a>
                

            </article>



            <!-- Article 2 -->


            <article> 
                <a href='https://www.php-fig.org/psr/' target="_blank">
                    <div class="jsArticle js2">
                        <div class="categoryFilter">
                            <p class="btnFilter"> Wild</p>
                            <p class="btnFilter">RTFM</p>
                        </div>
                    </div>
                    <div class="articleDescription">
                        <h3>Les PSR - PHP</h3>
                        <p class="articleText">Les PSR - Guide des bonnes pratiques PHP</p>
                        <p class="date">29/09/22</p>
                    </div>
                </a>
            </article>

            <!-- Article 3 -->

            <article> 
                <a href='https://phpsandbox.io/' target="_blank">

                    <div class="jsArticle js3">
                        <div class="categoryFilter">
                            <p class="btnFilter">Wilder</p>
                            <p class="btnFilter"> Article</p>
                        </div>
                    </div>
                    <div class="articleDescription">
                        <h3>PHPSandbox</h3>
                        <p class="articleText">PHPSandbox - Coder en PHP sans serveur interne</p>
                        <p class="date">29/09/22
                        </p>
                    </div>
                </a>

            </article>


            <!-- Article 4 -->


            <article> 
                <a href='https://www.codewars.com/join?language=php' target="_blank">

                    <div class="jsArticle js1">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wilder
                            </p>

                            <p class="btnFilter">JEU</p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Pour faire des petits exercices</h3>
                        <p class="articleText">CodeWars PHP - L'entrainement shonen commence</p>
                        <p class="date">29/09/22
                        </p>
                    </div>
                </a>
                

            </article>


            <!-- Article 5 -->


            <article> 
                <a href='https://www.mail-tester.com/' target="_blank">

                    <div class="jsArticle js2">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wilder
                            </p>

                            <p class="btnFilter">Article</p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Tester l'indésirabilité de vos spams</h3>
                        <p class="articleText">Testez l'indésirabilité (spam) de vos emails</p>
                        <p class="date">29/09/22
                        </p>
                    </div>
                </a>
                

            </article>


            <!-- Article 6 -->


            <article> 
                <a href='https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/introduction-fonction/'
                    target="_blank">

                    <div class="jsArticle js3">

                        <div class="categoryFilter">
                            <p class="btnFilter">Wilder</p>

                            <p class="btnFilter"> Article
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Les fonctions en PHP !</h3>
                        <p class="articleText">Introduction en francais aux fonctions</p>
                        <p class="date">29/09/22
                        </p>
                    </div>
                </a>
                

            </article>


            <!-- Article 7 -->


            <article> <a href='https://www.youtube.com/watch?v=2Bc9wMsC-7M&ab_channel=CharlieProd' target="_blank">

                    <div class="jsArticle js1">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wild
                            </p>

                            <p class="btnFilter">Vidéo</p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Les tableaux !</h3>
                        <p class="articleText">Les tableaux en PHP pour les nuls</p>
                        <p class="date">29/09/22
                        </p>
                    </div>
                </a>
                

            </article>


            <!-- Article 8 -->


            <article> <a href='https://www.progmatique.fr/article-33-Php-fonctions-manipuler-tableaux.html'
                    target="_blank">

                    <div class="jsArticle js2">

                        <div class="categoryFilter">
                            <p class="btnFilter">Wilder</p>
                            <p class="btnFilter">Article</p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Vidéo pour apprendre à gérer les fonctions</h3>
                        <p class="articleText">Fonctions sur les tableaux: Cheat Sheet</p>
                        <p class="date">29/09/22
                        </p>
                    </div>
                </a>
                

            </article>


            <!-- Article 9 -->


            <article> <a
                    href='https://www.youtube.com/watch?v=sBfSLbMnId0&ab_channel=DaniKrossing'
                    target="_blank">

                    <div class="jsArticle js3">

                        <div class="categoryFilter">
                            <p class="btnFilter">Wild</p>
                            <p class="btnFilter">Vidéo</p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Les variables, local et global</h3>
                        <p class="articleText">Comprendre la portée des variables: Locale vs Globale</p>
                        <p class="date">29/09/22
                        </p>
                    </div>
                </a>
                

            </article>


        </section>


    </main>

    <script src="script.js"></script>
    <?php include("_footer.php"); ?>
</body>


</html>