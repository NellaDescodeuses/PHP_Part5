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
    <p class="mt-5 ml text-center"><a href="index.php">Lien</a></p>
    <p class="mt-5 text-center">Paramètres qui apparaissent si le paramètre "serveur" existe dans l'URL :"</p>
    <!--
        $_GET = Variable Superglobale, ces variables retournent un tableaux.
        Les superglobales $_GET et $_POST vont être utilisées pour manipuler les informations envoyées via un formulaire HTML.
    -->
    <!-- htmlspecialchard() empêche l'interprétation d'une balise html dans nos paramètres mais celles -ci apparaissent tout de même.-->
    <!-- <p class="text-center"><?= 'Si le paramètre language existe et non protégé: ' . ($_GET['langage']) ?></p>
    <p class="text-center"><?= 'Si le paramètre serveur existe : ' . htmlspecialchars($_GET['serveur']) ?></p> -->

    <?php
        $serveur = $_GET['serveur'];
        $langage = $_GET['langage'];

        if($serveur && $langage){
            ?>
            <!-- sans le htmlspecialchard() les balises html ajoutées seront interprêtées-->
            <p class="text-center">SANS htmlspecialchars() :</p>
            <p class="text-center"><?='Langague : ' .$_GET['langage'] . '</br>' . 'Serveur : ' . $_GET['serveur'] ?></p>
            <p class="text-center">AVEC htmlspecialchars() :</p>
            <p class="text-center"><?='Langague : ' . htmlspecialchars($_GET['langage']) . '</br>' . 'Serveur : ' . htmlspecialchars($_GET['serveur']) ?></p>
           
            <!-- stip_tags supprime les balises html, elles ne sont pas interprêtées et elles n'apparaissent pas -->
            <p class="text-center">SANS strip_tags() :</p>
            <p class="text-center"><?='Langague : ' .$_GET['langage'] . '</br>' . 'Serveur : ' . $_GET['serveur'] ?></p>
            <p class="text-center">AVEC strip_tags() :</p>
            <p class="text-center"><?='Langague : ' . strip_tags($_GET['langage']) . '</br>' . 'Serveur : ' . strip_tags($_GET['serveur']) ?></p>

            <?php 
        }else{
            ?>
            <p class="text-center"> Il manque le SERVEUR ou le LANGUAGE en paramètre 😡 !!!</p>
            <?php
        }
    ?>
  </div>
</html>