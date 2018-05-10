<!Doctype html>
<?php
session_start();
?>
<?php
$cookie_name = "bienvenue";
$cookie_value = "Bienvenue!!!"; 
include("inc/cookie.php");
?>
<html lang='fr'>
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
  <title>L'Huile de Coco comme superfood, recettes cuisine, recettes cosmetiques, DIY, patisserie, gommage, SPA maison </title>
  <meta name="Description" content="L'huile de noix coco et ses bienfaits. 
  Facilites et des avantages d'utilisation du produit au quotidien. 
  Ce site est un site publicitaire à caractère informelle et ne contient des donnes médicales."/>
  <meta name="viewport" content="width=device-width">
  <!--[if lt IE 9]>
  <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
  <![endif]--> 
<!--feuilles des styles--------------------------------------------------------------------------------------------------->
  <link href="css/styles.css"  rel="stylesheet" type="text/css"/>
<!--the google fonts--------------------------------------------------------------------------------------------------->
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC|
  Architects+Daughter|Averia+Libre|Chelsea+Market|
  Comfortaa:700|Expletus+Sans|Montserrat|Neucha|Pacifico
  |Pangolin|Rajdhani|Reenie+Beanie|Sniglet" rel="stylesheet" target="_blank">
  <link rel="icon" type="image/png" href="images/kokosfavicon.png" />
</head>
<body>
  <header>
<!--logo, bannerie, cookies==========================================================================================!-->
     <?php include ("inc/logo.php");?>
      <div id="animation">
        <figure>
          <img src="images/banneriedw.jpg" alt>
          <img src="images/bannerie2dw.jpg" alt>
        </figure>
      <?php include("inc/cookie_show.php");?>
    </div>
    </div>
<!--menu==========================================================================================!-->
    <?php include ("inc/menu.php");?>
    </header>
    <main>
<!--article--------------------------------------------------------------------------------------------------->
      <header><h1>L'Huile de Noix Coco HDNC-Un Cadeau de La Nature</h1></header>
        <article id="a1">
          <h2> Comment on l'obtient?</h2>
            <p>
              Les noix de coco pour l'huile HDNC viennent de petites plantations des Iles,
              et sont cueillies à l'aide de cordes et de bâtons en bambou. 
              La chair de noix de coco est pressée mécaniquement à froid. 
              C'est pour ça l'huile de noix coco HDNC <strong>extra vierge et BIO </strong> est
              d'une qualité exceptionnelle.
              Le fait que l’huile soit vierge signifie qu’elle n’a pas été fabriquée industriellement, sans ajouts 
              chimiques. 
              L'huile HDNCest une huile <strong>non désodorisée</strong>, donc elle ne perd pas ses 
              bienfaits nutritifs.
            </p>
          <h2>Comment l'utiliser?</h2>
            <p><strong>En cuisine</strong> 
              l'huile de coco est appréciée pour son odeur autant que pour sa saveur, 
              elle a aussi divers vertues sur notre santé. 
              À consommer de préférence bio et équitable comme l'huile de noix coco HDNC extra vierge.
              <br/>
              <strong>En cosmetique</strong>
              l’huile de coco HDNC est parfaite pour les <strong>cheveux</strong> secs, crépus ou 
              cassés. Privilégiez son utilisation en 
              <a href="1aproduit.php" target="_blank">masque avant-shampoing</a>
              L’huile de coco HDNC convient aussi à la peau. 
              Elle est parfaite surtout pour les peaux sèches et à celles souffrant d’eczéma. 
              Très vite absorbée par la <strong>peau</strong>, elle la nourrit et l’hydrate en profondeur sans laisser la couche grasse.
            </p>
          <h2> Quelques recettes simples et bénéfiques</h2>
            <p>
              Nous vous invitons à decouvrir comment facilement
              integrer <strong>l'huile de noix coco HDNC</strong> dans votre quotidien...
            </p>
        </article>
<!--vissuel de page--------------------------------------------------------------------------------------------------->
        <section class="v1">
          <div><p><img src = 'images/huile3.jpg' alt ='huile' tiltle='hdnc'></p></img></div>
        </section>
<!--visuels avec navigation==========================================================================================!-->
        <section>
          <nav>
            <div class="v2">
              <div class="gallery">
                <a href="acategorie.php">
                  <img src="images/DIY.jpg" alt="Baume maison" >
                    <span><a href="acategorie.php"> Les Cosmétiques à l'Huile de Coco à Faire Chez Soi</a></span>
                <div class="desc">Preparez les cosmetiques chez vous! C'est facile!<br/>
                <br/>
                </div>
                </div>
              <div class="gallery">
                <a  href="bcategorie.php">
                  <img src="images/encuisine.jpg" alt="Cuisiner avec HDNC" width="400" height="auto">
                    <span><a href="bcategorie.php"> L'Huile de Noix Coco en Cuisine </a></span>
                <div class="desc">Quelques recettes faciles et rapides. Laissez-vous surprendre, c'est bon...<br/><br/>
                </div>
              </div>
            </div>
          </nav>
        </section>
    </main>
<!--footer==========================================================================================!-->
    <?php include ("inc/footer.php");?>
</body>
</html>