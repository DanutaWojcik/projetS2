<!Doctype html>
<?php
$cookie_name = "bienvenue_3";
$cookie_value = "Bienvenue!!!";
include("inc/cookie.php");
?>
<html lang="fr"/>
<head>
   <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117524090-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-117524090-1');
  </script>
  <meta charset ='utf-8'>
  <title>Pour Les Cheveux</title>
  <meta name="Description" content="L'huile de noix coco et ses bienfaits. 
  Facilites et des avantages d'utilisation du produit au quotidien. 
  Ce site est un site publicitaire à caractère informelle et ne contient des donnes médicales. Recettes DIY."/>
<!--The google fonts--------------------------------------------------------------------------------------------------->
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC|
  Architects+Daughter|Averia+Libre|Chelsea+Market|
  Comfortaa:700|Expletus+Sans|Montserrat|Neucha|Pacifico
  |Pangolin|Rajdhani|Reenie+Beanie|Sniglet" rel="stylesheet" target="_blank"/>
<!--favicon--------------------------------------------------------------------------------------------------->
  <link rel="icon" type="image/png" href="images/kokosfavicon.png" />
  <meta name="viewport" content="width=device-width">
  <!--[if lt IE 9]>
  <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
  <![endif]-->
<!--feuilles des styles--------------------------------------------------------------------------------------------------->
  <link rel="stylesheet" type="text/css" href="print.css" media="print">
  <link href="css/styles.css" rel="stylesheet" type="text/css"/>
  <link href="css/stylesprod.css" rel="stylesheet" type="text/css"/>
</head>

<body>
  <header>
<!--affichage de logo et cookies--------------------------------------------------------------------------------------------------->
     <?php include ("inc/logo.php");?>
     <?php include("inc/cookie_show.php")?>
<!--affichage de date mise à jour===================================================-->
    <div id="clock"></div>
<!--menu principale--------------------------------------------------------------------------------------------------->
    <?php include ("inc/menu.php");?>
  </header>
<!--article avec les images--------------------------------------------------------------------------------------------------->
  <main>
    <article>
      <h1> HDNC pour les cheveux</h1>
        <h2> Une recette, trois usages différentes...</h2>
          <p>Mèlangez 2 c. à s.  <strong>d'huile HDNC</strong> avec 2 gouttes d'huile de ricin.
            Utilisez cette préparation  en trois façons differentes, selon vos besoins.
          </p>
      <div class="v3">
        <div class="gallery1">
          <img src="images/cheveux1.jpg" alt="pointes en forme"/>
          <div class="desc1">
            <span id="recette"><strong>Un masque pour les pointes en plein forme</strong></span><br/>
              Humidifiez les cheveux avec l'eau tiède et appliquez
              le mélange <strong>d'huile HDNC</strong> avec l'huile de ricin,
              jusqu’à ce qu’ils soient complètement recouverts.<br/>
              Laissez agir pendant minimum une heure, puis lavez vos cheveux comme d'habitude.
              Utilisez une fois par semaine. <br/><br/>
          </div>
        </div>
        <div class="gallery1"> 
          <img src="images/lissage.jpg" alt="lissage"/>
          <div class="desc1">
            <span id="recette"><strong>Pour les cheveux lisses</strong></span><br/>
              Ce mélange <strong>d'huile HDNC</strong> et d'huile de ricin est un produit de lissage trés efficasse<br/>
              Prenez simplement une goutte et chauffez dans vos mains, ensuite appliquez sur tout la chevelure, sauf sur les racines.<br/>
              Brossez, séchez et profitez des cheveux douces et lisses.<br/>
              <br/>
          </div>
        </div>
        <div class="gallery1">
          <img src="images/bouclettes.jpg" alt="bouclettes"/>
          <div class="desc1">
            <span id="recette"><strong>Pour discipliner les boucles</strong></span><br/>
              Prennez une goutte de ce mélange <strong>d'huile HDNC</strong> 
              et d'huile de ricin. Chauffez dans vos mains et
              appliquez sur toute la chevelure sauf sur les racines.<br/>
              Formez vos boucles et laissez sécher à l'air libre. Vos cheveux seront bien
              nourris, les boucles bien définis et disciplinés.
              <br/><br/>
          </div>
        </div>
      </div>
    </article>
  </main>
<!--footer--------------------------------------------------------------------------------------------------->
  <?php include ("inc/footer.php");?>
<!--script pour mise à jour la  date===================================================-->
<script type="text/javascript" src="js/date.js"></script>
</body>
</html>