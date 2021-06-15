<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">  <title>PHP Exo_1 Part_6</title>
  <title>PHP Exo_4 Part_5</title>
</head>
<body>
  <div class="container">
    <h1 class="text-danger text-center">## Exercice 4  Partie 5</h1>
    <h2>
      Créez un lien avec les paramètres "langage", "serveur" dirigeant sur une autre page. Vérifiez si le paramètre serveur existe, si oui affichez le, sinon affichez un message d'erreur.
    </h2>
    <!-- 
        & = permet d'ajouter un parmètre a l'url
        &amp; = en HTML & se code &amp; dans le code source
    -->
    <p class="mt-5 ml text-center"><a href="index.php">Lien</a></p>
    <p class="mt-5 text-center"><?='Paramètres qui apparaissent si le paramètre "serveur" existe dans l\'URL :'?></p>
    <!--
        $_GET = Variable Superglobale, ces variables retournent un tableaux.
        Les superglobales $_GET et $_POST vont être utilisées pour manipuler les informations envoyées via un formulaire HTML.
    -->

     
      <!-- La fonction isset() vérifie si une variable est définie, ce qui signifie qu'elle doit être déclarée et n'est pas NULL. 
      retourne 1 si True. -->
      <p class="text-center"><?= 'Si le paramètre serveur existe : ' . isset($_GET['serveur']) ?></p>
    
    <?php
        $serveur = isset($_GET['serveur']);

        if($serveur){
            ?>
            <p class="text-center"><?='Langague : '.$_GET['langage'] . '</br>' . 'Serveur : ' . $serveur ?></p>
            <?php 
        }else{
            ?>
            <p class="text-center"> Il manque le SERVEUR en paramètre 😡!!!</p>
            <?php
        }
    ?>
  </div>
</html>