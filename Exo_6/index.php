<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>PHP Exo_6 Part_5</title>
</head>
<body>
  <div class="container">
    <h1 class="text-danger text-center">## Exercice 6  Partie 5</h1>
    <h2>
      Créez un lien avec les paramètres "langage", "serveur" dirigeant sur une autre page. 
      Vérifiez si les paramètres existent, si oui affichez les sinon affichez une un message d'erreur. 
      Vous devez empêchez l'inclusion de balises html dans les paramètres.
    </h2>
    <!-- 
        & = permet d'ajouter un parmètre a l'url
        &amp; = en HTML & se code &amp; dans le code source
    -->
    <!--Ajout de balises html dans mes paramètres pour voir si celles-ci sont interprétées.-->
    <p class="mt-5 ml text-center"><a href="lien_exo6.php?langage=<i>PHP</i>&amp;serveur=<strong>Pepito</strong>">Clique sur ce Lien</a></p>
  </div>
</html>