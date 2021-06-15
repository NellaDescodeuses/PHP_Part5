<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">  <title>PHP Exo_1 Part_6</title>
  <title>PHP Exo_5 Part_5</title>
</head>
<body>
  <div class="container">
    <h1 class="text-danger text-center">## Exercice 5  Partie 5</h1>
    <h2>
        Créez un lien avec les paramètres "langage", "serveur" dirigeant sur une autre page. Vérifiez si les paramètres existent, si oui affichez les sinon affichez une un message d'erreur. Vous devez empêchez l'inclusion de balises html dans les paramètres.
    </h2>
    <!-- 
        & = permet d'ajouter un parmètre a l'url
        &amp; = en HTML & se code &amp; dans le code source
    -->
    <p class="mt-5 ml text-center"><a href="lien_exo5.php?langage=PHP&amp;serveur=Pepito">Clique sur ce Lien</a></p>
  </div>
</html>