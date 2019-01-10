<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>php partie7</title>
</head>
<body>
  <?php
  if(!empty($_GET['firstname'])){
    if(preg_match('/^[a-zéèàêâùïüëA-Z-\']+$/', $_GET['firstname'])){
      $firstname = htmlspecialchars($_GET['firstname']);
    }else{
      $firstname = 'Veuillez rentrer un prénom valide.';
    }
  }else{
    $firstname = 'Veuillez entrer votre prénom.';
  }
  if(!empty($_GET['lastname'])){
    if(preg_match('/^[a-zéèàêâùïüëA-Z-\']+$/', $_GET['lastname'])){
      $lastname = htmlspecialchars($_GET['lastname']);
    }else{
      $lastname = 'Veuillez rentrer un nom valide.';
    }
  }else{
    $lastname = 'Veuillez entrer votre nom.';
  } ?>
  <p>Votre prénom est : <?= $firstname ?></p>
  <p>Votre nom est : <?= $lastname ?></p>
  <p><a href="index.php">Retour au formulaire</a></p>
</body>
</html>
