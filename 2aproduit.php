<!Doctype html>
<?php//commence session, ajoute cookies
session_start();
?>
<?php
$cookie_name = "bienvenue_3";
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
    <?php include("inc/header.php");?>
  </header>
<!--article avec les images--------------------------------------------------------------------------------------------------->
  <main>
    <article>
      <?php include ("inc/article2a.php");?>
    </article>
  </main>
<!--footer--------------------------------------------------------------------------------------------------->
  <?php include ("inc/footer.php");?>
<!--script pour mise à jour la  date===================================================-->
<script type="text/javascript" src="js/date.js"></script>
</body>
</html>