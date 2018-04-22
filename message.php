<!Doctype html>
<html lang="fr">
<head>
  <title>Confirmation envoi message</title>
  <meta name="Description" content="L'huile de noix coco et ses bienfaits. 
  Facilites et des avantages d'utilisation du produit au quotidien. 
  Ce site est un site publicitaire à caractère informelle et ne contient des donnes médicales"/>
  <meta name="viewport" content="width=device-width">
  <meta charset = 'utf-8'>
<!--retour acceuil apres 50s---------------------------------------------------------------------------------------------------------->
  <meta http-equiv="Refresh" content="50; url=index.php"/>
  <!--[if lt IE 9]>
  <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
  <![endif]-->
  <link href="css/stylescat.css" rel="stylesheet" type="text/css"/>
  <link href="css/styles.css" rel="stylesheet" type="text/css"/>
<!-- the google fonts----------------------------------------------------------------------------------------------------------------->
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC|
  Architects+Daughter|Averia+Libre|Chelsea+Market|
  Comfortaa:700|Expletus+Sans|Montserrat|Neucha|Pacifico
  |Pangolin|Rajdhani|Reenie+Beanie|Sniglet" rel="stylesheet" target="_blanc"/>
<!--favicon-------------------------------------------------------------------------------------------------------------------------------->
  <link rel="icon" type="image/png" href="images/kokosfavicon.png" />
</head>
<body>
  <header>
<!--logo et bannerie==========================================================================================!-->
<?php include("inc/logo.php")?>
<!--menu==========================================================================================!-->
    <?php include ("inc/menu.php");?>
    </header>
  <header>
    <h1> &#9993 Message envoyé </h1>
  </header>
  <main>
    <h2>Votre message</h2>
<!--affichage de bdd==========================================================================================!-->
    <div id="confirm" >
      <?php include ("inc/reception.php");?>
<!--bouttn de telechargement fichier csv==========================================================================================!-->
      <p>
        <a href="messages.csv" download><input type="button" id="download" clas="download" name="download" value="Télécharger fichier csv" /></a>
      </p>  
<!--heure envoi de formulaire!------------------------------------------------------------------------------>
      <h2>Merci de votre message, nous allons vous repondre dans les prochains delais.</h2>
      <p name="hour" id="hour"> </p> 
      </br>
    </div>
    <div id="back">
    <a id="retour" href="index.php">Retour accueil</a>
    </div>
    </br>
  </main>
  </br>
  </br>
  </br>
<!--footer==========================================================================================!-->
  <?php include ("inc/footer.php");?>
<!--champ et script pour recuperation de l'heure de soumission de formulaire------------------------------------------------->
<script type="text/javascript" src="js/heure.js"></script>
</body>
</html>