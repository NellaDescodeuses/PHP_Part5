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
    <!-- isset() prend en compte le paramètre meme si sa valeur est vide-->
    <p class="text-center"><?= 'Si le paramètre language existe : ' . isset($_GET['langage']) ?></p>
    <p class="text-center"><?= 'Si le paramètre serveur existe : ' . isset($_GET['serveur']) ?></p>

    <?php
        $serveur = $_GET['serveur'];
        $langage = $_GET['langage'];

        if($serveur && $langage){
            ?>
            <!-- sans le isset() la condition est fausse qu'il manque le paramètre ou seulement sa valeur.-->
            <p class="text-center"><?='Langague : ' .$_GET['langage'] . '</br>' . 'Serveur : ' . $_GET['serveur'] ?></p>
            <p class="text-center"><?='Langague : ' . isset($langage) . '</br>' . 'Serveur : ' . isset($serveur) ?></p>

            <?php 
        }else{
            ?>
            <p class="text-center"> Il manque le SERVEUR ou le LANGUAGE en paramètre 😡 !!!</p>
            <?php
        }
    ?>
  </div>
</html>