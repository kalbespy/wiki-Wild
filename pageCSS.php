<!DOCTYPE html>


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="link.css" />
    <title>wikiWild - CSS</title>
   
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,900;1,100;1,500&display=swap"
        rel="stylesheet">
    <link rel="icon" href="/assets/favicon.png">
</head>

<body>
<?php include("_header.php"); ?>


    <main id="main">

    <header>
        <h1>CSS</h1>
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

            <article class="card wild rtfm"> <a href='https://developer.mozilla.org/fr/docs/Web/CSS' target="_blank">

                    <div class="souspageArticle css1 ">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wild
                            </p>

                            <p class="btnFilter"> RTFM
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>La doc CSS Mozilla</h3>
                        <p class="articleText">Retrouvez toute la doc Javascript de Mozilla, une ressource sûr et
                            fiable.
                        </p>
                        <p class="date">29/09/22
                        </p>
                    </div>
                </a>

            </article>



            <!-- Article 2 -->

            <article class="card wild jeux"> <a href='https://flexboxfroggy.com/#fr'
                    target="_blank">


                    <div class="souspageArticle css2">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wild
                            </p>

                            <p class="btnFilter"> Jeu
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Apprenez les flexbox de façon ludique</h3>
                        <p class="articleText">Apprenez à gerer les flexbox avec Flexbox Froggy. Un jeu ludique pour bien comprendre les fonctionnements des flexbox.
                        </p>
                        <p class="date">29/09/22
                        </p>
                    </div>
                </a>

            </article>


            <!-- Article 3 -->



            <article class="card wilder article"> <a
                    href='https://www.w3schools.com/cssref/css3_pr_mediaquery.asp'

                    target="_blank">

                    <div class="souspageArticle css3">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wilder
                            </p>

                            <p class="btnFilter"> Article
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Gérer les mediaquery / La base du responsive</h3>
                        <p class="articleText">Le site de la w3schools vous apprend à gérer vos mediaQuery afin que votre projet soit aussi beau en mobile qu'en desktop.
                        </p>
                        <p class="date">29/09/22
                        </p>
                    </div>
                </a>

            </article>


            <!-- Article 4 -->

            <article class="card wilder article"> <a href='https://code.tutsplus.com/fr/tutorials/the-30-css-selectors-you-must-memorize--net-16048' target="_blank">

                    <div class="souspageArticle css4">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wilder
                            </p>

                            <p class="btnFilter"> Article
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Les 30 sélécteurs CSS à connaitre</h3>
                        <p class="articleText">Retrouvez les 30 sélécteurs CSS les plus utiles. De quoi viser le bon élément facilement.
                        </p>
                        <p class="date">03/10/22
                        </p>
                    </div>
                </a>
    
            </article>


            <!-- Article 5 -->
            
            <article class="card wild video"> <a href='https://www.youtube.com/watch?v=K74l26pE4YA&ab_channel=Fireship'
                    target="_blank">

                    <div class="souspageArticle css5">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wild
                            </p>

                            <p class="btnFilter"> Vidéo
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Les Flexbox en 100s</h3>
                        <p class="articleText">Une vidéo amusante et rapide expliquant les grandes lignes des flexbox.
                            suivre et à
                            comprendre.
                        </p>
                        <p class="date">03/10/22
                        </p>
                    </div>
                </a>
                

            </article>


            <!-- Article 6 -->



            <article class="card wild jeux"> <a
                    href='https://cssgridgarden.com/#fr'
                    target="_blank">

                    <div class="souspageArticle css6">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wild
                            </p>

                            <p class="btnFilter"> Jeu
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Apprenez les grid de façon ludique </h3>
                        <p class="articleText">Apprenez les grid avec grid garden. Un jeu amusant qui vous rappellera les grandes heures de plant vs zombie.
                        </p>
                        <p class="date">05/10/22
                        </p>
                    </div>
                </a>
                
            </article>


            <!-- Article 7 -->

            <article class="card wilder article"> <a href='https://css-tricks.com/snippets/css/a-guide-to-flexbox/' target="_blank">

                    <div class="souspageArticle css7">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wilder
                            </p>

                            <p class="btnFilter"> Article
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Comment fonctionne les flexbox</h3>
                        <p class="articleText">La ressource préféré de Thomas pour comprendre les flexbox. Aussi disponible en poster sur leur site !
                        </p>
                        <p class="date">05/10/22
                        </p>
                    </div>
                </a>

            </article>


            <!-- Article 8 -->

            <article class="card wild video"> <a href='https://www.youtube.com/watch?v=wu1Sk8iOPnE&list=PLjwdMgw5TTLVjTZQocrMwKicV5wsZlRpj&index=22&ab_channel=Grafikart.fr'
                    target="_blank">

                    <div class="souspageArticle css8">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wild
                            </p>

                            <p class="btnFilter"> Vidéo
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Découverte du CSS: Media query et le "responsive"</h3>
                        <p class="articleText">Une vidéo pour vous apprendre à gérer le responsive de votre site.
                        </p>
                        <p class="date">05/10/22
                        </p>
                    </div>
                </a>
                

            </article>


            <!-- Article 9 -->

            <article class="card wild article"> <a
                    href='https://css-tricks.com/centering-css-complete-guide/'

                    target="_blank">

                    <div class="souspageArticle css9">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wild
                            </p>

                            <p class="btnFilter"> Article
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Centrer en CSS: Le guide</h3>
                        <p class="articleText">Centrer un élément en CSS peut être l'épreuve la plus difficile que vous aurez dans votre vie. 
                        </p>
                        <p class="date">05/10/22
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
    <?php include("_footer.php"); ?>
    <script src="script.js"></script>


</body>


</html>