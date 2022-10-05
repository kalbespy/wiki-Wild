<!DOCTYPE html>


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="link.css" />
    <title>wikiWild - JS</title>
   
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,900;1,100;1,500&display=swap"
        rel="stylesheet">
    <link rel="icon" href="/assets/favicon.png">
</head>


<body>
<?php include("_header.php"); ?>


    <main id="main">

    <header>
        <h1>Javascript</h1>
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

            <article class="card wild rtfm"> <a href='https://developer.mozilla.org/fr/docs/Web/JavaScript' target="_blank">

                    <div class="souspageArticle js1 ">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wild
                            </p>

                            <p class="btnFilter"> RTFM
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Toute la doc Javascript Mozilla</h3>
                        <p class="articleText">Retrouvez toute la doc Javascript de Mozilla, une ressource sûr et
                            fiable.
                        </p>
                        <p class="date">29/09/22
                        </p>
                    </div>
                </a>

            </article>



            <!-- Article 2 -->

            <article class="card wilder video"> <a href='https://www.youtube.com/watch?v=N8ap4k_1QEQ&ab_channel=ProgrammingwithMosh'
                    target="_blank">


                    <div class="souspageArticle js2">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wilder
                            </p>

                            <p class="btnFilter"> Vidéo
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Vidéo pour apprendre à gérer les fonctions</h3>
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



            <article class="card wild article"> <a
                    href='https://www.programiz.com/javascript/library/array#:~:text=In%20JavaScript%2C%20Array%20is%20a,default%20or%20custom%20sorting%20rules.'

                    target="_blank">

                    <div class="souspageArticle js3">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wild
                            </p>

                            <p class="btnFilter"> Article
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Liste de toutes les arrays javascript</h3>
                        <p class="articleText">Toutes les arrays javascript avec leurs fonctions et des exemples.
                        </p>
                        <p class="date">29/09/22
                        </p>
                    </div>
                </a>

            </article>


            <!-- Article 4 -->

            <article class="card wild rtfm"> <a href='https://developer.mozilla.org/fr/docs/Web/JavaScript' target="_blank">

                    <div class="souspageArticle js1">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wild
                            </p>

                            <p class="btnFilter"> RTFM
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Toute la doc Javascript Mozilla</h3>
                        <p class="articleText">Retrouvez toute la doc Javascript de Mozilla, une ressource sûr et
                            fiable.
                        </p>
                        <p class="date">29/09/22
                        </p>
                    </div>
                </a>
    
            </article>


            <!-- Article 5 -->
            
            <article class="card wilder video"> <a href='https://www.youtube.com/watch?v=N8ap4k_1QEQ&ab_channel=ProgrammingwithMosh'
                    target="_blank">

                    <div class="souspageArticle js2">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wilder
                            </p>

                            <p class="btnFilter"> Vidéo
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Vidéo pour apprendre à gérer les fonctions</h3>
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
                    href='https://www.programiz.com/javascript/library/array#:~:text=In%20JavaScript%2C%20Array%20is%20a,default%20or%20custom%20sorting%20rules.'
                    target="_blank">

                    <div class="souspageArticle js3">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wild
                            </p>

                            <p class="btnFilter"> Article
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Liste de toutes les arrays javascript</h3>
                        <p class="articleText">Toutes les arrays javascript avec leurs fonctions et des exemples.
                        </p>
                        <p class="date">29/09/22
                        </p>
                    </div>
                </a>
                
            </article>


            <!-- Article 7 -->

            <article class="card wild rtfm"> <a href='https://developer.mozilla.org/fr/docs/Web/JavaScript' target="_blank">

                    <div class="souspageArticle js1">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wild
                            </p>

                            <p class="btnFilter"> RTFM
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Toute la doc Javascript Mozilla</h3>
                        <p class="articleText">Retrouvez toute la doc Javascript de Mozilla, une ressource sûr et
                            fiable.
                        </p>
                        <p class="date">29/09/22
                        </p>
                    </div>
                </a>

            </article>


            <!-- Article 8 -->

            <article class="card wilder video"> <a href='https://www.youtube.com/watch?v=N8ap4k_1QEQ&ab_channel=ProgrammingwithMosh'
                    target="_blank">

                    <div class="souspageArticle js2">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wilder
                            </p>

                            <p class="btnFilter"> Vidéo
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Vidéo pour apprendre à gérer les fonctions</h3>
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

            <article class="card wild article"> <a
                    href='https://www.programiz.com/javascript/library/array#:~:text=In%20JavaScript%2C%20Array%20is%20a,default%20or%20custom%20sorting%20rules.'

                    target="_blank">

                    <div class="souspageArticle js3">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wild
                            </p>

                            <p class="btnFilter"> Article
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Liste de toutes les arrays javascript</h3>
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
    <?php include("_footer.php"); ?>
    <script src="script.js"></script>


</body>


</html>