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
  <meta http-equiv="Refresh" content="50; url=index.html"/>
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
    <div class="v">
        <a href="index.html"><img id="logo" src ='images/kokos1.jpg'  alt = 'huile' tiltle ='hdnc' width="200px" height="200px"/></a>
    </div>
<!--menu==========================================================================================!-->
    <nav id="topmenu">
      <ol>
        <li><a href="index.html">Accueil</a></li>
        <li><a href="acategorie.html">Les Cosmétiques à Faire Chez Soi</a></li>
        <li><a href="bcategorie.html">L'Huile de Noix Coco en Cuisine </a></li>
        <li><a href="contact.html">Contactez-nous &#9993</a></li>
      </ol>
    </nav>
    </header>
  <header>
    <h1> &#9993 Message envoyé </h1>
  </header>
  <main>
    <h2>Votre message</h2>
<!--declaration et affichage des variables==========================================================================================!-->
    <div id="confirm" >
      <?php 
        $nom=$_GET['name'];
        $email=$_GET['email'];
        $phone=$_GET['phone'];
        $sujet=$_GET['sujet'];
        $message=$_GET['message'];
        $email=$_GET['email'];
        $send=$_GET['send'];
	    ?>
      <p><?php
        echo 'Nom: ',$nom;
      ?></p>
      <p><?php
        echo "Téléphone: " .$phone;
      ?></p>
      <p><?php
        echo "Sujet: " ,$sujet;
      ?></p>
      <p><?php
        echo "Votre message: ", $message;
      ?></p>
      <!--heure envoi de formulaire!------------------------------------------------------------------------------>
      <h2>Merci de votre message, nous allons vous repondre dans les prochains delais.</h2>
      <p name="hour" id="hour"> </p> 
      </br>
    </div>
    <div id="back">
    <a id="retour" href="index.html">Retour accueil</a>
    </div>
    </br>
  </main>
  </br>
  </br>
  </br>
  <footer>
    <p id="f">
      Conception du site - Danuta Wojcik 
      <a class="mentions" href="mentionslegales.html" target="_blank"> Mentions légales</a>
    </p>
  </footer>
<!--champ et script pour recuperation de l'heure de soumission de formulaire------------------------------------------------->
<script type="text/javascript" src="js/heure.js"></script>
</body>
</html>