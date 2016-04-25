<!DOCTYPE html>
<html>
  <head lang="fr_FR">
    <meta charset="utf-8">
    <title>  </title>

  </head>

  <body>

    <p> Bonjour <?php echo htmlspecialchars($_POST['name']) . ' ' . htmlspecialchars($_POST['forname']); ?> </p>
    <p> votre email : <?php echo htmlspecialchars($_POST['email']); ?> </p>
    <p> Votre message : <?php echo htmlspecialchars($_POST['textarea']); ?> </p>


  </body>

</html>
