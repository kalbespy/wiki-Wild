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

    <h1 class="titleHomepage">A propos de wikiWild </h1>

    <section id="aboutSection">
      <div class="aboutSection">
        <h2 class="h2AboutUs">Le projet</h2>
        <p> En tant qu'étudiants à la Wild Code School de Lyon, nous avons réalisé ce site en tant que premier projet en équipe.
          Le projet wikiWild a été pensé dans un but de centralisation des ressources fournies par la Wild et ses Wilders, et ainsi les rendre accessibles de manière rapide et facile.
        Grâce à son développement nous avons pu développer et consolider nos compétences en HTML, CSS et Javascript. Nous espèrons que vous prendrez autant de plaisir à le parcourir, que nous en avons eu à le développer (LOL).</p>
      </div>

      <div class="aboutSection">
        <h2 class="h2AboutUs">La wikiWild Team</h2>
        <div class="blockTeam">
          <img class="imgTeam" src="assets/wikiWildFaceSquare.jpg" alt="Photo de la wiki Wild Team">
          <img class="imgTeam" src="assets/wikiWildFaceSquare.jpg" alt="Photo de la wiki Wild Team">
          <img class="imgTeam" src="assets/wikiWildFaceSquare.jpg" alt="Photo de la wiki Wild Team">
          <img class="imgTeam" src="assets/wikiWildFaceSquare.jpg" alt="Photo de la wiki Wild Team">
        </div>
      </div>

      <div class="aboutSection">
        <h2 class="h2AboutUs">Nous contacter</h2>

        <form class="formulaire" action="thanks.php" method="POST">
          <div class="allChamps">
            <div class="champs">
              <label class="label" for="nom">Nom</label>
              <input class="inputFormulaire" type="text" id="nom" name="nom" required>
            </div>
            <div class="champs">
              <label class="label" for="prenom">Prénom</label>
              <input class="inputFormulaire" type="text" id="prenom" name="prenom" required>
            </div>
            <div class="champs">
              <label class="label" for="mail">E-mail</label>
              <input class="inputFormulaire" type="email" id="mail" name="mail" required>
            </div>
            <div class="champs">
              <label class="label" for="message">Message</label>
              <textarea class="inputFormulaire" id="message" name="message" required></textarea>
            </div>
            <div class="buttonForm">
              <button id="formInput" type="submit" class="buttonFormulaire"><span class="submitText">Envoyer votre message</span></button>
            </div>
          </div>
        </form>
      </div>

</section>

  </main>

  <script src="script.js"></script>

  <?php include("_footer.php"); ?>

</body>


</html>