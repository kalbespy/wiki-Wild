<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php include("_header.php"); ?>
    <h1> A propos de nous </h1>

    <article class="proposDeNous">

    </article>

    <article class="nousContacter">
        <h2> Nous contacter</h2>
        <form class="formulaire" >
            <div class="champFormulaire">
              <label  for="nom">Nom:</label><br>
              <input class="inputFormulaire" type="text"  id="nom"  name="nom">
            </div>
            <div class="champFormulaire">
              <label  for="prenom">Prénom :</label><br>
                <input class="inputFormulaire" type="text"  id="prenom"  name="prenom">
            </div>
            <div class="champFormulaire">
                <label  for="mail">E-mail</label><br>
                  <input class="inputFormulaire" type="email"  id="mail"  name="mail">
              </div>
            <div class="champFormulaire">
              <label  for="message">Message :</label><br>
              <textarea class="inputFormulaire" id="message"  name="message"></textarea>
            </div>
            <div class="champFormulaire" class="buttonFormulaire">
              <button  type="submit">Envoyer votre message</button>
            </div>
          </form>
        
    </article>

    <article class="articleTeam" id="Team">
        <h2 class="h2Team">La Wiki-Wild Team</h2>
        <div class="blockTeam">
           <div class="imgTeam"></div>
           <div class="imgTeam"></div>
           <div class="imgTeam"></div>
           <div class="imgTeam"></div>
        </div>
    </article>


    <script src="script.js"></script>
</body>
</html>