﻿<!Doctype html>
<?php
session_start();//commence session, ajoute cookies 
$cookie_name = "bienvenue_6";
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
  <title>L'Huile de Coco en Cuisine, recettes salees et patisserie</title>
  <meta name="Description" content="L'huile de noix coco et ses bienfaits. 
  Facilites et des avantages d'utilisation du produit au quotidien. 
  Ce site est un site publicitaire à caractère informelle et ne contient des donnes médicales."/>
  <meta name="viewport" content="width=device-width">
  <!--[if lt IE 9]>
  <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
  <![endif]-->
<!--feuilles des styles--------------------------------------------------------------------------------------------------->		
  <link href="css/stylescat.css" rel="stylesheet" type="text/css"/>
  <link href="css/styles.css" rel="stylesheet" type="text/css"/>
<!--the google fonts--------------------------------------------------------------------------------------------------->
  
<!--favicon--------------------------------------------------------------------------------------------------->
  <link rel="icon" type="image/png" href="images/kokosfavicon.png" />
</head>

<body>

<!--header--------------------------------------------------------------------------------------------------->
  <?php include ("inc/header.php");?>
  <main>
    <header><h1> L'Huile de Noix Coco en Cuisine</h1></header>
<!--article--------------------------------------------------------------------------------------------------->
    <article id="a1">
      <h2> Remplacez vos matieres grasses dans vos recettes...</h2>
        <p><strong>En cuisine</strong> 
          L'huile de coco est appréciée pour son odeur autant que pour sa saveur, 
          elle a aussi divers vertues sur notre santé. 
          À consommer de préférence bio et équitable comme <strong>l'huile de noix coco HDNC extra vierge.</strong> 
          L’huile de coco supporte les hautes températures et ne 
          devient pas toxique pendant la cuisson.<br/> Ideale comme alternative du beurre, pour faire cuire 
          les oeufs, les légumes, 
          ou pour booster les smoothies. Mais aussi pour vos patisseries.<br/>
          Grace à ses acides gras saturés, elle est trés nutritive et elle est considereé comme un SUPERFOOD.<br/>
          Privilégiez une huile de coco de première pression à froid, comme <strong>l'huile de noix coco 
          HDNC extra vierge et BIO </strong>.
        </p>
      <h2> De la tartine jusqu'au moelleux au chocolat...</h2>
        <p>Les recettes salées ou sucrées qui integrent l'huile de coco se multiplient sur le net. 
          Nous vous présentons quelques unes pour vous donner l'idée
          d'utilisation de <strong>L'Huile de Noix Coco HDNC</strong> en cuisine.
        </p>
    </article>
<!--visuel de page--------------------------------------------------------------------------------------------------->
    <section class="v1">
      <div><p><img src ='images/encuisine.jpg'alt ='hdnc' tiltle='encuisine'></p></div>
    </section>
<!--miniatures avec resumes des sous-articles--------------------------------------------------------------------------------------------------->
    <section>
      <nav>
        <div class="v2">
          <div class="gallery">
            <a href="1bproduit.php" target="_blank">
              <img src="images/frites.jpg" alt="plats salees" width="400" height="auto">
            </a>
            <span onclick="hideMe();">Les plats salés</span>
            <div class="desc" id="hide">
              Les frites, le curry, les tartines, tous les mélanges sont possibles avec 
              <strong>l'huile HDNC</strong>
              <br/><br/>
            </div>
          </div>
          <div class="gallery">
            <a href="2bproduit.php" target="_blank">
              <img src="images/gateau1.jpg" alt="gateau" width="400px" height="200px">
            </a>
            <span onclick="hideMe1();">La patisserie</span><!--Appel fonction pour affiche/cacher description-->
            <div class="desc" id="hide1">En fin c'est possible d'être gourmand et manger sain. 
              Découvrez nos propositions
              de gateaux avec <strong>l'huile HDNC</strong>
            <br/>
            </div>
          </div>
        </div>
      </nav>
    </section>
  </main>
<!--footer--------------------------------------------------------------------------------------------------->
<?php include ("inc/footer.php");?>
<!--script pour afficher/masques les resumes des sous-articles--------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="js/masquer.js"></script>
</body>
</html>