<!Doctype html>
<?php//commence session, ajoute cookies
session_start();//commence session, ajoute cookies
?><?php
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
    <?php include("inc/cookie_show.php");?>
    <br/>
<!--menu prancipale--------------------------------------------------------------------------------------------------->
    <?php include ("inc/menu.php");?>
  </header>
<!--article--------------------------------------------------------------------------------------------------->
  <main>
    <article>
     <?php include ("inc/article2b.php");?> 
    </article>
  </main>
<!--footer--------------------------------------------------------------------------------------------------->
 <?php include ("inc/footer.php");?>
<!--script pour affichage de lageur de page=========------------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="js/width.js"></script>
</body>
</html>