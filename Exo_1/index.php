<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">  <title>PHP Exo_1 Part_6</title>
  <title>PHP Exo_1 Part_5</title>
</head>
<body>
  <div class="container">
    <h1 class="text-danger text-center">## Exercice 1  Partie 5</h1>
    <h2>
        Créez un lien avec les paramètres "nom" et "prénom" qui apparaitront dans L'url  dirigeant sur la page courante et affichez ces paramètres dans mon html, en utilisant des Variable Superglobale. 
    </h2>
    <!-- 
        & = permet d'ajouter un parmètre a l'url
        &amp; = en HTML & se code &amp; dans le code source
    -->
    <p class="mt-5 ml text-center"><a href="index.php?nom=DeLaVega&amp;prenom=Pepito">Lien</a></p>
    <p class="mt-5 text-center"><?='Paramètres qui apparaissent dans l\'URL au clic du lien :'?></p>
    <!--
        $_GET = Variable Superglobale, ces variables retournent un tableaux.
        Les superglobales $_GET et $_POST vont être utilisées pour manipuler les informations envoyées via un formulaire HTML.
    -->
    <p class="text-center"><?='Nom : '.$_GET['nom'] . '</br>' . 'Prénom : ' . $_GET['prenom'] ?></p> 
  </div>
</html>