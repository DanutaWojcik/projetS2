<!Doctype html>
<?php
session_start();
  /*if((isset($_SESSION['session']))&&($_SESSION['session']==true)){
    header('Location:backoffice.php');
    }*/
$cookie_name = "bienvenue_9";
include("inc/cookie.php");
include("inc/cookie.php");
?>
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
<!--favicon--------------------------------------------------------------------------------------------------->
  <link rel="icon" type="image/png" href="images/kokosfavicon.png" />
</head>
<body>
  <header>
    <?php include("inc/header.php");?>
  </header>
  <main>
    <h1>Identifiez-vous </h1>
<!--formulaire==========================================================================================!-->
    <form id="login_form" action="login.php" target="_blank" method="GET">
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