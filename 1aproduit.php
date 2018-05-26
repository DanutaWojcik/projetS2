<!Doctype html>
<?php//commence session, ajoute cookies
session_start();
?>
<?php
$cookie_name = "bienvenue_1";//
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
  <meta charset ='utf-8'/>
  <title>L'Huile De Noix Coco Pour le corps- DIY recettes pour les cosmétiques</title>
  <meta name="Description" content="Cosmetiques de l'huile de noix coco à faire chez soi DIY. 
  Recettes DIY, baume pour le  corps, gommage au cafe, dentifrice coco charbon."/>
<!--favicon--------------------------------------------------------------------------------------------------->
  <link rel="icon" type="image/png" href="images/kokosfavicon.png" />
  <meta name="viewport" content="width=device-width">
  <!--[if lt IE 9]>
  <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
  <![endif]-->
<!--feuilles des styles--------------------------------------------------------------------------------------------------->
  <link rel="stylesheet" type="text/css" href="css/printme.css" media="print">
  <link href="css/styles.css" rel="stylesheet" type="text/css" media="screen">
  <link href="css/stylesprod.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
  <header>
    <?php include("inc/header.php");?>
  </header>
    <main>
<!--Article avec les images--------------------------------------------------------------------------------------------------->
      <article>
       <?php include("inc/article1a.php");?>
<!--boutton d'impression--------------------------------------------------------------------------------------------------->
              <section>
                <input type="button" value="&#128438" onClick="window.print()" class="printme" alt="imprimez l'article"/>
              </section>
      </article>
    </main>
<!--footer--------------------------------------------------------------------------------------------------->
    <?php include ("inc/footer.php");?>
</body>
</html>