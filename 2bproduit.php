<!Doctype html>
<?php
$cookie_name = "bienvenue_4";
$cookie_value = "Bienvenue!!!";
include("inc/cookie.php");
?>
<html lang="fr">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117524090-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-117524090-1');
  </script>
  <meta charset = 'utf-8'>
  <title>La Patisserie gateau de chocolat, gateau citron, flocons d'avoine</title>
  <meta name="Description" content="L'huile de noix coco et ses bienfaits. 
  Facilites et des avantages d'utilisation du produit au quotidien. 
  Ce site est un site publicitaire à caractère informelle et ne contient des donnes médicales. Recettes DIY."/>
<!--the google fonts--------------------------------------------------------------------------------------------------->
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC|
  Architects+Daughter|Averia+Libre|Chelsea+Market|
  Comfortaa:700|Expletus+Sans|Montserrat|Neucha|Pacifico
  |Pangolin|Rajdhani|Reenie+Beanie|Sniglet" rel="stylesheet" target="_blank"/>
  <meta name="viewport" content="width=device-width">
  <!--[if lt IE 9]>
  <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
  <![endif]-->
<!--feuilles des styles--------------------------------------------------------------------------------------------------->
  <link rel="stylesheet" type="text/css" href="css/print.css" media="print">
  <link href="css/styles.css" rel="stylesheet" type="text/css"/>
  <link href="css/stylesprod.css" rel="stylesheet" type="text/css"/>
<!--favicon--------------------------------------------------------------------------------------------------->
  <link rel="icon" type="image/png" href="images/kokosfavicon.png" />
</head>
<body>
  <header>
<!--logo et largeur de page et cookies--------------------------------------------------------------------------------------------------->
    <?php include ("inc/logo.php");?>
    <?php include("inc/cookie_show.php")?>
    <br/>
<!--menu prancipale--------------------------------------------------------------------------------------------------->
    <?php include ("inc/menu.php");?>
  </header>
<!--article--------------------------------------------------------------------------------------------------->
  <main>
    <article>
      <h1> HDNC Dans La Patisserie</h1>
        <h2> Les grandes classiques deviennent bons pour la santé!</h2>	
          <div class="v3">
            <div class="gallery1">
              <img src="images/gateau1.jpg" alt="moelleux au chocolat"/>
                <div class="desc1">
                  <span id="recette"><strong>Moelleux au chocolat au coco</strong></span><br/>
                    Battez 4 oeufs avec 200g de sucre. Ajoutez 100g de farine de ble ou de farine de noix de coco. Mélangez<br/>
                    Faitez fondre 200g de chocolat noir dessert avec 200g <strong>d'huile de coco HDNC.</strong><br/>
                    Mélangez, mettez dans une moule à cake et enfournez à 180°C (thermostat 6), chaleur tournante pendant 40 min.<br/>
                    Laissez refroidir et mettez au refrigirateur pour environ 1h avant dégustation.<br/><br/><br/>
                </div>
              </div>
              <div class="gallery1">
                <img src="images/gateau4.jpg" alt="gateau citron"/>
                  <div class="desc1">
                    <span id="recette"><strong>Gâteau au yaourt citron</strong></span><br/>
                      Mélangez 3 pots (de yaourt) de farine, un sachet de levure chimique et 1 pot de sucre.<br/>
                      Ajoutez 4 oeufs. Bien remuez. Incorporez un demi pot <strong>d'huile de coco HDNC</strong>.
                      Ensuite, versez un pot de yaourt. Bien mélangez tout pour obtenir une pâte onctueuse.<br/>
                      Parfumez avec un zeste de citron.<br/>
                      Versez dans un moule à monqué et enfournez à 180°C (thermostat 6) pendant env. 30 min.<br/>
                      <br/><br/><br/>
                  </div>
                </div>
                <div class="gallery1">
                  <img src="images/gateau2.jpg" alt="petits gateaux"/>
                  <div class="desc1">
                    <span id="recette"><strong>Les gâteaux d'avoine</strong></span><br/>
                      2 verres de flocons d'avoine mélangez avec 1 c. à s.  <strong>d'huile de coco HDNC</strong>,
                      4 c. à s. de miel et 1 c. à s. de poudre de cacao.
                      Ajoutez petit à petit de l'eau dans cette preparation en mélangeant.</br>
                      Formez les petits gâteaux et placez les sur une plaque. 
                      Enfournez à 150°C (thermostat 5) pendant 15-20 minutes.
                      </br><br/></br></br></br><br/>
                  </div>
                </div>
              </div>
    </article>
  </main>
<!--footer--------------------------------------------------------------------------------------------------->
 <?php include ("inc/footer.php");?>
<!--script pour affichage de lageur de page=========------------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="js/width.js"></script>
</body>
</html>