<!Doctype html>
<?php //A FAIRE CONTROLE DE FORMULAIRE
  session_start();
  if((isset($_SESSION['session_contact']))&&($_SESSION['session_contact']==true)){
    header('Location:message.php');
    }
?>
<?php
$cookie_name = "bienvenue_10";
$cookie_value = "Bienvenue!!!";
include("inc/cookie.php");
?>
<html lang="fr">
<head>
  <title>Contact adresse HDNC</title>
  <meta name="Formulaire de contact" content=""/>
  <meta name="viewport" content="width=device-width">
  <meta charset = 'utf-8'>
<!--feuilles des styles--------------------------------------------------------------------------------------------------->
  <link href="css/stylescat.css" rel="stylesheet" type="text/css"/>
  <link href="css/styles.css" rel="stylesheet" type="text/css"/>
<!--the google fonts--------------------------------------------------------------------------------------------------->
  <?php include ("inc/fonts.php");?>
<!--favicon--------------------------------------------------------------------------------------------------->
  <link rel="icon" type="image/png" href="images/kokosfavicon.png" />
</head>

<body>
  <header>
    <?php include("inc/header.php");?>
  </header>
  <main>
    <h1>Contactez-nous &#9993 </h1>
<!--formulaire==========================================================================================-->
    <form id="contact"  action="reception.php" method="GET" onsubmit="return valider();" >
<!--champ nom---->
      <p class="form"><label for="name">Nom Prenom:</label>
        <input type="text" name="name" id="name" autocomplete="off" autofocus /> 
      </p>
      <p class="form"><label for="phone">N° de téléphone:</label>
        <input type="tel" name="phone" id="phone"  autocomplete="off">
<!--commentaire d'erreur------------------------------------------------------------------------------------->
        <div id="erreur1" name="erreur"></div>
      </p>
<!--champ choix de sujet-->
      <p class="form">
        <label>Choisez le sujet de votre message:</label><br/>
            <input type="radio" name="sujet" id="sujet" value="Demande de contact" checked>Demande de contact 
            <input type="radio" name="sujet" id="sujet" value="Demande d'information">Demande d'information
            <input type="radio" name="sujet" id="sujet" value="Sujestion d'amelioration"> Sujestion d'amelioration<br/>
            <input type="radio" name="sujet" id="sujet" value="Autre">Autre
      </p> 
<!--commentaire d'erreur------------------------------------------------------------------------------------->
        <div id="erreur" name="erreur"></div>       
<!--champ message-->
      <p class="form"><label for="message">Votre message:</label>
        <textarea name="message" id="message" maxrows="10" maxcols="10"></textarea>
<!--commentaire d'erreur------------------------------------------------------------------------------------->
        <div id="erreur2" name="erreur"></div>
      </p>
<!--champ e-mail-->
      <p class="form"><label for="email">Votre e-mail:</label>
        <input type="text" name="email" id="email" autocomplete="off" onblur="return captcha();" />
<!--commentaire d'erreur------------------------------------------------------------------------------------->
        <div id="erreur3" name="erreur"></div>
      </p>
<!--captcha------------------------------------------------------------------------------------->
      <p class="form"><strong>Pour verifiér si vous n'etez pas un robot, addictionez ces deux chiffres et verifiez le résultat:</strong><br/>
        <span id="chiffre1"></span>
        <span id="chiffre2"></span>
        <input type="text" id="reponse" name="reponse"/>
      </p>
<!--commentaire de resultat de captcha---------------------------------------------------->
      <div id="info" name="erreur"></div>
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