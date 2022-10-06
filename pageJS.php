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



            <article class="card wilder article"> <a
                    href='https://www.freecodecamp.org/news/the-complete-javascript-handbook-f26b2c71719c'

                    target="_blank">

                    <div class="souspageArticle js3">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wilder
                            </p>

                            <p class="btnFilter"> Article
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Le guide du débutant javascript</h3>
                        <p class="articleText">Retrouvez le guide complet pour bien débuter en Javascript. Une ressource longue mais très complète.
                        </p>
                        <p class="date">03/10/22
                        </p>
                    </div>
                </a>

            </article>


            <!-- Article 4 -->

            <article class="card wild article"> <a href='https://nouvelle-techno.fr/articles/manipuler-le-dom-en-javascript' target="_blank">

                    <div class="souspageArticle js4">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wild
                            </p>

                            <p class="btnFilter"> Article
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Manipulation du DOM</h3>
                        <p class="articleText">Apprenez à manipuler le DOM, un indispensable dans votre parcours pour devenir un maitre dev.
                        </p>
                        <p class="date">03/10/22
                        </p>
                    </div>
                </a>
    
            </article>


            <!-- Article 5 -->
            
            <article class="card wilder video"> <a href='https://www.youtube.com/watch?v=gHD7FOONV2o&ab_channel=NouvelleTechno'
                    target="_blank">

                    <div class="souspageArticle js5">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wilder
                            </p>

                            <p class="btnFilter"> Vidéo
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Vidéo explicative sur la manipulation du DOM</h3>
                        <p class="articleText">Une vidéo complète pour bien réviser sa manipulaiton du DOM. 
                        </p>
                        <p class="date">05/10/22
                        </p>
                    </div>
                </a>
                

            </article>


            <!-- Article 6 -->


            <article class="card wild rtfm"> <a href='https://www.sitepoint.com/javascript-truthy-falsy/' target="_blank">

                    <div class="souspageArticle js7">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wild
                            </p>

                            <p class="btnFilter"> RTFM
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Comprendre les valeurs Truthy et Falsy</h3>
                        <p class="articleText">Les valeurs Truthy et Falsy sont une des bases de la création de script JS. Apprenez les avec leurs différents comparateurs.
                        </p>
                        <p class="date">05/10/22
                        </p>
                    </div>
                </a>

            </article>


            <!-- Article 8 -->

            <article class="card wilder article"> <a href='https://developer.mozilla.org/fr/docs/Web/JavaScript/Guide/Working_with_Objects'
                    target="_blank">

                    <div class="souspageArticle js8">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wilder
                            </p>

                            <p class="btnFilter"> Article
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Utiliser les objets avec Mozilla</h3>
                        <p class="articleText">La ressource Mozilla pour apprendre à gérer ses objets. 
                        </p>
                        <p class="date">05/10/22
                        </p>
                    </div>
                </a>
                

            </article>


            <!-- Article 9 -->

            <article class="card wild jeux"> <a
                    href='https://www.codewars.com/join?language=javascript'

                    target="_blank">

                    <div class="souspageArticle js9">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wild
                            </p>

                            <p class="btnFilter"> Jeu
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>CodeWars JS - L'entrainement shonen commence</h3>
                        <p class="articleText">"La route sera longue et il n'y a pas de raccourci !" Naruto
                        </p>
                        <p class="date">05/10/22
                        </p>
                    </div>
                </a>
                

            </article>


                        <!-- Article 10 -->

                        <article class="card wilder video"> <a
                    href='https://www.youtube.com/watch?v=jZZDfl6Jq2o&list=PLjwdMgw5TTLVjLr12-t9jIa1nX8ViUYjV&ab_channel=Grafikart.fr'

                    target="_blank">

                    <div class="souspageArticle js10">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wilder
                            </p>

                            <p class="btnFilter"> Vidéo
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Apprenez à créer un puissance 4</h3>
                        <p class="articleText">Apprenez à créer un puissance 4 avec Grafikart. Une vidéo en français pour vous apprendre à coder votre premier jeu.
                        </p>
                        <p class="date">05/10/22
                        </p>
                    </div>
                </a>

                </article>

                            <!-- Article 11 -->

            <article class="card wilder article"> <a
                    href='https://freefrontend.com/html-menu-with-javascript/'

                    target="_blank">

                    <div class="souspageArticle js11">

                        <div class="categoryFilter">
                            <p class="btnFilter"> Wilder
                            </p>

                            <p class="btnFilter"> Article
                            </p>
                        </div>
                    </div>

                    <div class="articleDescription">
                        <h3>Menus de navigation JavaScript natif gratuit</h3>
                        <p class="articleText">Retrouvez une collection de menu Javascript, gratuit. De quoi vous donner de l'inspiration pour bien commencer votre projet.
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

    <script src="script.js"></script>

    <?php include("_footer.php"); ?>

</body>


</html>