<!Doctype html>
<?php
$cookie_name = "bienvenue_7";
$cookie_value = "Bienvenue!!!";
include("inc/cookie.php");
?>
<html lang="fr">
<head>
  <title>Contact adresse HDNC</title>
  <meta name="Description" content="L'huile de noix coco et ses bienfaits. 
  Facilites et des avantages d'utilisation du produit au quotidien. 
  Ce site est un site publicitaire à caractère informelle et ne contient des donnes médicales"/>
  <meta name="viewport" content="width=device-width">
  <meta charset = 'utf-8'>
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
<!--affichage logo et cookies--------------------------------------------------------------------------------------------------->
    <?php include ("inc/logo.php");?>
    <?php include("inc/cookie_show.php")?>
<!--menu==========================================================================================-->
    <?php include("inc/menu.php");?>
  </header>
  <main>
    <h1>Contactez-nous &#9993 </h1>
<!--formulaire==========================================================================================-->
    <form id="contact"  action="message.php" method="GET" onsubmit="return valider();" onsubmit="return heure();" >
    <?php include("inc/error.php")?>
<!--champ nom---->
      <p class="form"><label for="name">Nom Prenom:</label>
        <input type="text" name="name"  id="name"  autocomplete="off" autofocus />
<!--commentaire d'erreur------------------------------------------------------------------------------------->
        <div id="erreur" name="erreur" ><?php include("inc/error.php")?></div>
      </p>
      <p class="form"><label for="phone">N° de téléphone:</label>
        <input type="tel" name="phone" id="phone"  autocomplete="off"/>
<!--commentaire d'erreur------------------------------------------------------------------------------------->
        <div id="erreur1" name="erreur"><?php include("inc/error.php")?></div>
      </p>
<!--champ choix de sujet-->
      <p class="form">
        <label>Choisez le sujet de votre message:<br/>
            <input type="radio" name="sujet" id="sujet" value="Demande de contact" checked>Demande de contact</input> 
            <input type="radio" name="sujet" id="sujet" value="Demande d'information">Demande d'information</input> 
            <input type="radio" name="sujet" id="sujet" value="Sujestion d'amelioration"> Sujestion d'amelioration</input><br/>
            <input type="radio" name="sujet" id="sujet" value="Autre">Autre</input>
      </p>        
<!--champ message-->
      <p class="form"><label for="message">Votre message:</label>
        <textarea name="message" id="message" maxrows="10" maxcols="10"></textarea>
<!--commentaire d'erreur------------------------------------------------------------------------------------->
        <div id="erreur2" name="erreur"><?php include("inc/error.php")?></div>
      </p>
<!--champ e-mail-->
      <p class="form"><label for="email">Votre e-mail:</label>
        <input type="text" name="email" id="email" autocomplete="off" onblur="return captcha();" />
<!--commentaire d'erreur------------------------------------------------------------------------------------->
        <div id="erreur3" name="erreur"><?php include("inc/error.php")?></div>
      </p>
<!--captcha------------------------------------------------------------------------------------->
      <p class="form"><strong>Pour verifiér si vous n'etez pas un robot, addictionez ces deux chiffres et verifiez le résultat:</strong><br/>
        <span id="chiffre1"></span>
        <span id="chiffre2"></span>
        <input type="text" id="reponse" name="reponse"/>
      </p>
<!--commentaire de resultat de captcha---------------------------------------------------->
      <div id="info" name="erreur"><?php include("inc/error.php")?></div>
<!--boutton envoi de formulaire!------------------------------------------------------------------------------>
      <p>
        <input type="reset" name="clear" id="clear" value="Effacer le formulaire"/><!--boutton efface folmulaire-->
      </p>
      <p>
        <input type="submit" name="send" id="send" value="Envoyez"/>
      </p>
      
    </form>
<!--footer affiche google maps et l'adresse =====================-->
    <aside id="adresse"><h1>Adresse</h1>
      <div id="carte"  onsubmit="return myCarte();"></div>
      <p id="adress"> 
       HDNC</br>
       Coco-Saveur<br/>
       97-300 Coco-Eau<br/>
      </p>
    </aside>
  </main>
<!--footer bas de page -->
  <?php include ("inc/footer.php");?>
<!--affichage de google maps==========================================================================================-->
<script type="text/javascript" src="js/carte.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTkjJ2Uil_trYhqhF9IK3VERVUjyHTiPc&callback=myCarte"></script>
<!--controle de formulaire de contact et du captcha==========================================================================================!-->
  <script type="text/javascript" src="js/contact.js"></script>
<!--affichage captcha==========================================================================================-->
  <script type="text/javascript" src="js/captcha.js"></script>
</body>
</html>