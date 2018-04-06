<!Doctype html>
<html lang="fr">
<head>
  <title>Contact adresse HDNC</title>
  <meta name="Description" content="L'huile de noix coco et ses bienfaits. 
  Facilites et des avantages d'utilisation du produit au quotidien. 
  Ce site est un site publicitaire à caractère informelle et ne contient des donnes médicales"/>
  <meta name="viewport" content="width=device-width">
  <meta charset = 'utf-8'>
  
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
<!--affichage logo et nom du site--------------------------------------------------------------------------------------------------->
    <?php include ("inc/logo.php");?>
<!--menu==========================================================================================!-->
    <?php include("inc/menu.php");?>
  </header>
  <main>
    <h1>Identifiez-vous </h1>
<!--formulaire==========================================================================================!-->
    <form id="login"  action="message.php" method="backoffice.php">
<!--champ nom---->
      <p class="form"><label for="name">Login:</label>
        <input type="text" name="name"  id="name"  autocomplete="off" autofocus />
<!--commentaire d'erreur------------------------------------------------------------------------------------->
        <div id="erreur"></div>
      </p>
      <p class="form"><label for="password">Mot de passe:</label>
        <input type="text" name="password" id="password"  autocomplete="off"/>
<!--commentaire d'erreur------------------------------------------------------------------------------------->
        <div id="erreur1"></div>
      <p>
        <input type="reset" name="clear" id="clear" value="Effacer le formulaire"/><!--boutton efface folmulaire-->
      </p>
      <p>
        <input type="submit" name="send" id="send" value="Envoyez"/>
      </p>
    </form>
<!--footer affiche google maps et l'adresse ================================================================
    <footer id="adresse"><h1>Adresse</h1>
      <div id="carte"  onsubmit="return myCarte();"></div>
      <p id="adress"> 
      <h1>HDNC SA</h1>
       Saint-Sauveur<br/>
       97130 Capesterre Belle-Eau<br/>
       RCS Nanterre 50530130900017<br/>
       Capital de 1000 €<br/>
       </p>
    </footer>
  </main>!-->
<!--footer bas de page==========================================================================================!-->
  <?php include ("inc/footer.php");?>
<!--affichage de google maps==========================================================================================!-->
<!--<script src="js/carte.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTkjJ2Uil_trYhqhF9IK3VERVUjyHTiPc&callback=myCarte" ></script>--!>
<!--controle de formulaire de contact et du captcha==========================================================================================!-->
  <script type="text/javascript" src="js/contact.js"></script>
<!--affichage captcha==========================================================================================!-->
  <script src="js/captcha.js"></script>
</body>
</html>