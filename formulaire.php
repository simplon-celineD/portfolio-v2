<!DOCTYPE html>
<html>
<head lang="fr_FR">
  <meta charset="utf-8">
    <title> Formulaire </title>
    <link rel="stylesheet" href="portfolio.css"/>
  </head>
  <body>
    <article id="formulaire">
      <form action="result.php" method="POST">
          <input type="text" name="name" id="name" placeholder="Votre Nom ..."/>
          <br/>
          <input type="text" name="forname" id="forname" placeholder="Votre Prenom ..."/>
          <br/>
          <input type="email" name="email" id="email" placeholder="Votre adresse mail ..."/>
          <br/>
          <textarea type="text" name="textarea" id="textarea"> Votre Message ... </textarea>
          <br/>
          <input type="submit" id="bouton"> ENVOYER </input>
      </form>
    </article>


  </body>
</html>
