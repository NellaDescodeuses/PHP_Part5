<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">  <title>PHP Exo_1 Part_6</title>
  <title>PHP Exo_3 Part_5</title>
</head>
<body>
  <div class="container">
    <h1 class="text-danger text-center">## Exercice 3  Partie 5</h1>
    <h2>
        Créez un lien avec les paramètres "nom", "prénom" et "âge"  dirigeant sur une autre page. Si l'âge est supérieur à 18 et inférieur à 130 affichez ces paramètres. L'âge ne peut être qu'un entier. 
    </h2>
    <!-- 
        & = permet d'ajouter un parmètre a l'url
        &amp; = en HTML & se code &amp; dans le code source
    -->
    <p class="mt-5 ml text-center"><a href="index.php?nom=DeLaVega&amp;prenom=Pepito&amp;age=33">Lien</a></p>
    <p class="mt-5 text-center">Paramètres qui apparaissent au changement de l'âge dans l'URL :</p>
    <!--
        $_GET = Variable Superglobale, ces variables retournent un tableaux.
        Les superglobales $_GET et $_POST vont être utilisées pour manipuler les informations envoyées via un formulaire HTML.
    -->
    <?php
      // echo $_GET['age'] = (int) $_GET['age'] . '</br>';

    ?>

      <!-- le intval convertie en entier. une string et un nombre décimal. -->
      <p class="text-center"><?= 'Les strings et nombre décimaux sont convertis en entiers grâce a intval() : '. intval($_GET['age']) ?></p>
    <?php
        $age = $_GET['age'];

        if($age >= 18 && $age < 130){
            ?>
            <p class="text-center"><?='Nom : '.$_GET['nom'] . '</br>' . 'Prénom : ' . $_GET['prenom'] . '</br>' . 'Âge : ' .intval($_GET['age']) ?></p>
            <?php 
        }else{
            ?>
            <p class="text-center"> Veuillez entrer un âge valide !!!</p>
            <?php
        }
    ?>
  </div>
</html>