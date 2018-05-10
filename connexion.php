<!Doctype html>
<?php
session_start();
$cookie_name = "bienvenue_9";
$cookie_value = "Bienvenue!!!";
include("inc/cookie.php");
include("inc/cookie.php");
if((isset($_SESSION['session']))&&($_SESSION['session']==true)){
  header('Location:backoffice.php');
  exit();
  
}?>
<html lang="fr">
<head>
  <title>Connexion backoffice</title>
  <meta name="Description" content=""/>
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
<!--affichage logo et cookie--------------------------------------------------------------------------------------------------->
    <?php include("inc/logo.php");?>
    <?php include("inc/cookie_show.php");?>
<!--menu==========================================================================================!-->
    <?php include("inc/menu.php");?>
  </header>
  <main>
    <h1>Identifiez-vous </h1>
<!--formulaire==========================================================================================!-->
    <form id="login_form"  action="login.php" target="_blank" method="POST">
<!--champ nom---->
      <p class="form"><label for="login">Login:</label>
        <input type="text" name="login"  id="login"  autocomplete="off" autofocus />
      </p>
      <p class="form"><label for="password">Mot de passe:</label>
        <input type="password" name="password" id="password"  autocomplete="off"/>
      <p>
<!--boutton efface folmulaire-->
        <input type="reset" name="clear" id="clear" value="Annuler"/>
      </p>
<!--boutton d'envoi folmulaire-->
      <p>
        <input type="submit" name="send" id="send" class="send" value="Connexion"/>
      </p>
    </form>
<!--commentaire d'erreur------------------------------------------------------------------------------------->
    <div id="erreur">
      <?php 
      if(isset($_SESSION['error'])){//si sasie non correcte
        echo $_SESSION['error'];
      }
      ?>
    </div>
    <br/><br/><br/><br/><br/><br/>
   </main>
<!--footer bas de page==========================================================================================!-->
  <?php include ("inc/footer.php");?>
  

<!--controle de formulaire de contact en js==========================================================================================!-->
  <script type="text/javascript" src="js/contact.js"></script>
</body>
</html>