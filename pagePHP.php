<!DOCTYPE html>


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="link.css" />
    <title>wikiWild - PHP</title>
   
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,900;1,100;1,500&display=swap"
        rel="stylesheet">
    <link rel="icon" href="/assets/favicon.png">
</head>


<body>

<?php include("_header.php"); ?>


    <main id="main">

    <header>
        <h1>PHP</h1>
    </header>

        <section id="filter">
            <div class="filterSection">
                <h3>Filtrer par source</h3>
                <div class="tags">
                    <button id='wild' class="filterButton"> <span class=buttonText>Wild</span></button>
                    <button id='wilder' class="filterButton"> <span class=buttonText>Wilders</span></button>
                </div>
            </div>
            <div class="filterSection2">
                <h3>Filtrer par type</h3>
                <div class="tags">
                    <button id="rtfm" class="filterButton"> <span class=buttonText>RTFM</span></button>
                    <button id="article" class="filterButton"> <span class=buttonText>Article</span></button>
                    <button id="video" class="filterButton"> <span class=buttonText>Vidéo</span> </button>
                    <button id="jeux" class="filterButton"> <span class=buttonText>Jeu</span></button>
                </div>
            </div>
        </section>



        <!-- Section des articles -->


        <section id="cards" class="articles">



            <!-- Article 1 -->

            <article class="card wild rtfm"> <a href='https://www.php.net/docs.php' target="_blank">

                    <div class="souspageArticle php1 ">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wild
                            </p>

                            <p class="btnFilter"> RTFM
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>La doc officielle de PHP - UN MUST !</h3>
                        <p class="articleText">Retrouvez toute la doc Javascript de Mozilla, une ressource sûr et
                            fiable.
                        </p>
                        <p class="date">29/09/22
                        </p>
                    </div>
                </a>

            </article>



            <!-- Article 2 -->

            <article class="card wild rtfm"> <a href='https://www.php-fig.org/psr/'
                    target="_blank">


                    <div class="souspageArticle php2">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wild
                            </p>

                            <p class="btnFilter"> RTFM
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Les PSR - Guide des bonnes pratiques PHP</h3>
                        <p class="articleText">Apprenez à gerer les fonctions de base avec Mosh, un tutoriel facile à
                            suivre et à
                            comprendre.
                        </p>
                        <p class="date">29/09/22
                        </p>
                    </div>
                </a>

            </article>


            <!-- Article 3 -->



            <article class="card wilder article"> <a
                    href='https://phpsandbox.io/'

                    target="_blank">

                    <div class="souspageArticle php3">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wilder
                            </p>

                            <p class="btnFilter"> Article
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>PHPSandbox - Coder en PHP sans serveur interne</h3>
                        <p class="articleText">Toutes les arrays javascript avec leurs fonctions et des exemples.
                        </p>
                        <p class="date">29/09/22
                        </p>
                    </div>
                </a>

            </article>


            <!-- Article 4 -->

            <article class="card wilder jeux"> <a href='https://www.codewars.com/join?language=php' target="_blank">

                    <div class="souspageArticle php4">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wilder
                            </p>

                            <p class="btnFilter"> Jeu
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>CodeWars PHP - L'entrainement shonen commence</h3>
                        <p class="articleText">Retrouvez toute la doc Javascript de Mozilla, une ressource sûr et
                            fiable.
                        </p>
                        <p class="date">29/09/22
                        </p>
                    </div>
                </a>
    
            </article>


            <!-- Article 5 -->
            
            <article class="card wilder article"> <a href='https://www.mail-tester.com/'
                    target="_blank">

                    <div class="souspageArticle php5">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wilder
                            </p>

                            <p class="btnFilter"> Article
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Testez l'indésirabilité (spam) de vos emails</h3>
                        <p class="articleText">Apprenez à gerer les fonctions de base avec Mosh, un tutoriel facile à
                            suivre et à
                            comprendre.
                        </p>
                        <p class="date">29/09/22
                        </p>
                    </div>
                </a>
                

            </article>


            <!-- Article 6 -->



            <article class="card wild article"> <a
                    href='https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/introduction-fonction/'
                    target="_blank">

                    <div class="souspageArticle php6">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wild
                            </p>

                            <p class="btnFilter"> Article
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Introduction en francais aux fonctions</h3>
                        <p class="articleText">Toutes les arrays javascript avec leurs fonctions et des exemples.
                        </p>
                        <p class="date">29/09/22
                        </p>
                    </div>
                </a>
                
            </article>


            <!-- Article 7 -->

            <article class="card wild video"> <a href='https://www.youtube.com/watch?v=2Bc9wMsC-7M&ab_channel=CharlieProd' target="_blank">

                    <div class="souspageArticle php7">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wild
                            </p>

                            <p class="btnFilter"> Vidéo
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Les tableaux en PHP pour les nuls</h3>
                        <p class="articleText">Retrouvez toute la doc Javascript de Mozilla, une ressource sûr et
                            fiable.
                        </p>
                        <p class="date">29/09/22
                        </p>
                    </div>
                </a>

            </article>


            <!-- Article 8 -->

            <article class="card wilder article"> <a href='https://www.progmatique.fr/article-33-Php-fonctions-manipuler-tableaux.html'
                    target="_blank">

                    <div class="souspageArticle php8">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wilder
                            </p>

                            <p class="btnFilter"> Article
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Fonctions sur les tableaux: Cheat Sheet</h3>
                        <p class="articleText">Apprenez à gerer les fonctions de base avec Mosh, un tutoriel facile à
                            suivre et à
                            comprendre.
                        </p>
                        <p class="date">29/09/22
                        </p>
                    </div>
                </a>
                

            </article>


            <!-- Article 9 -->

            <article class="card wild video"> <a
                    href='https://www.youtube.com/watch?v=sBfSLbMnId0&ab_channel=DaniKrossing'

                    target="_blank">

                    <div class="souspageArticle php9">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wild
                            </p>

                            <p class="btnFilter"> Vidéo
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Comprendre la portée des variables: Locale vs Globale</h3>
                        <p class="articleText">Toutes les arrays javascript avec leurs fonctions et des exemples.
                        </p>
                        <p class="date">29/09/22
                        </p>
                    </div>
                </a>
                

            </article>


        </section>

        <section id="text" class="noCard">
            <p> Aucune ressource trouvée avec les filtres choisis. <br>
                Veuillez sélectionner au minimum un filtre Source et un fitre Type.</p>
        </section>

    </main>

    <script src="script.js"></script>

    <?php include("_footer.php"); ?>

</body>


</html>