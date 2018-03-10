<!Doctype html>
<html lang="fr">
<head>
  <meta charset ='utf-8'/>
  <title>Les Cosmétiques à l'Huile de Coco à Faire Chez Soi</title>
  <meta name="Description" content="L'huile de noix coco et ses bienfaits. 
  Facilites et des avantages d'utilisation du produit au quotidien. 
  Ce site est un site publicitaire ?aract? informelle et ne contient des donnes médicales"/>
  <meta name="viewport" content="width=device-width">
  
  <!--[if lt IE 9]>
  <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
  <![endif]-->
<!--feuilles des styles--------------------------------------------------------------------------------------------------->
  <link href="css/stylescat.css" rel="stylesheet" type="text/css"/>
  <link href="css/styles.css" rel="stylesheet" type="text/css"/>
<!--the google fonts--------------------------------------------------------------------------------------------------->
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC|
  Architects+Daughter|Averia+Libre|Chelsea+Market|
  Comfortaa:700|Expletus+Sans|Montserrat|Neucha|Pacifico
  |Pangolin|Rajdhani|Reenie+Beanie|Sniglet" rel="stylesheet" target="_blank"/>
<!--favicon--------------------------------------------------------------------------------------------------->
  <link rel="icon" type="image/png" href="images/kokosfavicon.png" />
</head>
<body>
  <header>
<!--affichage de logo et denom de site--------------------------------------------------------------------------------------------------->
    <div class="v">
      <a href="index.php"><img id="logo" src ='images/kokos1.jpg'  alt = 'huile' tiltle  'hdnc' width="200px" height="200px"/></a>
      <div class="name">www.hdnc.fr</div>
    </div>
<!--menu principale--------------------------------------------------------------------------------------------------->
    <br/>
    <nav id="topmenu">
      <ol>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="acategorie.php">Les Cosmétiques à Faire Chez Soi</a></li>
        <li><a href="bcategorie.php">L'Huile de Noix Coco en Cuisine </a></li>
        <li><a href="contact.php">Contactez-nous &#9993</a></li>
       </ol>
    </nav>
  </header>
  <main>
    <header><h1> Les Cosmétiques l'Huile de Coco à Faire Chez Soi</h1></header>
<!--article--------------------------------------------------------------------------------------------------->
    <article id="a1">
      <h2> Avec maximum trois ingrédients, nourrissez vos cheveux et votre peau!</h2>
        <p>L'huile de coco <strong>HDNC</strong> mélangée avec quelques ingrendients qui se trouvent dans notre cuisine, devient
          un cosmétique incroyable et surtout naturel. <br/>
          Ici nous vous présentons quelques exemples de mélanges. Mais n'hésitez pas à préparer vos propres recettes et ajouter vos 
          ingrédients favorits.<br/>
          <strong>L'huile HDNC</strong> est parfaite pour les <strong>cheveux</strong> secs, crepus ou 
          cassés Mais aussi il aide à lisser les cheveux ou à discipliner les boucles rebelles.<br/>
          Ses acides gras saturées nourrissent les cheveux en profondeur.<br/>
          <strong>L'huile de coco HDNC</strong> convient aussi à la <strong>peau</strong>. 
          Elle est parfaite surtout pour les peaux séches et celles souffrant d'éczéma. 
          Très vite absorbée par la peau, elle la nourrit, l'hydrate en profondeur, 
          l'apaise, la protége contre le vieillesement
          et estompe les cicatrisses. 
          Vu ses propriétes antiséptiques, nous pouvons l'utiliser aussi bien en dentifrice, en créme de rasage et en gommage.
          Il vous reste qu'à l'essayer.
        </p>
      <h2> Pas besoin de materiels sophistiqués</h2>
        <p>En tant que matériel pour nos préparations, vous n'avez besoin que les cuillères, de bocaux vides et de bols.
        Faire des cosmétiques maison à la base de <strong>l'huile de noix coco HDNC</strong> est si simple, rapide et économique.
        Lancez-vous!!!
        </p>
     </article>
<!--visuel d'article--------------------------------------------------------------------------------------------------->
    <section class="v1">
      <div><p><img src ='images/DIY.jpg' alt ='huile' tiltle='hdnc'></p></div>
    </section>
    <section>
<!--visuelles avec navigation vers sous categories--------------------------------------------------------------------------------------------------->
      <nav>
        <div class="v2">
          <div class="gallery">
            <a href="1aproduit.php" target="_blank">
              <img src="images/baume.jpg" alt="Baume maison" width="400" height="auto"></img>
            </a>
            <span onclick="hideMe();" ><!--Appel fonction pour affiche/cacher description-->
              Pour le corps...
            </span>
            <div class="desc" id="hide">
              Besoin de baume pour le corps, créme pour rasage, de gommage ou encore 
              de dentifrice blanchisante? 
              Faitez-les chez vous!<br/>
            </div>
          </div>
          <div class="gallery">
            <a href="2aproduit.php" target="_blank">
              <img src="images/cheveux1.jpg" alt="cheveux" width="400px" height="200px"></img>
            </a>
            <span onclick="hideMe1();" ><!--Appel fonction pour affiche/cacher description--->
              Pour les cheveux...
            </span>
            <div class="desc" id="hide1">
              Redonnez la force et la vitalité vos cheveux, sans perdre de temps et d'argent.
              Tout naturellement... suivez nos recettes...
            </div>
          </div>
        </div>
      </nav>
    </section>
  </main>
<!--footer--------------------------------------------------------------------------------------------------->
  <footer>
    <p id="f">
      Conception du site - Danuta Wojcik 
      <a class="mentions" href="mentionslegales.php" target="_blank"> Mentions légales</a>
    </p>
  </footer>
<!--script pour afficher/masquer les descriptions des sous-cathegories--------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="js/masquer.js"></script>
</body>
</html>