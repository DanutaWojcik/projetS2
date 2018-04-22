<!Doctype html>
<?php include("inc/cookie.php")?>
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
    <?php
      if(!isset($_COOKIE[$cookie_name])) {
        echo $cookie_value;
    } else {
         echo "";
    }
    ?>
<!--menu==========================================================================================!-->
    <?php include("inc/menu.php");?>
  </header>
  <main>
    <h1>Identifiez-vous </h1>
<!--formulaire==========================================================================================!-->
    <form id="login"  action="backoffice.php" method="GET">
<!--champ nom---->
      <p class="form"><label for="name_ser">Login:</label>
        <input type="text" name="name_user"  id="name_user"  autocomplete="off" autofocus />
<!--commentaire d'erreur------------------------------------------------------------------------------------->
        <div id="erreur"></div>
      </p>
      <p class="form"><label for="password">Mot de passe:</label>
        <input type="text" name="password" id="password"  autocomplete="off"/>
<!--commentaire d'erreur------------------------------------------------------------------------------------->
        <div id="erreur1"></div>
      <p>
        <input type="reset" name="clear" id="clear" value="Annuler"/><!--boutton efface folmulaire-->
      </p>
      <p>
        <input type="submit" name="send" id="send" class="send" value="Connexion"/>
      </p>
    </form>
    <br/><br/><br/><br/><br/><br/>
   </main>
<!--footer bas de page==========================================================================================!-->
  <?php include ("inc/footer.php");?>
  

<!--controle de formulaire de contact en js==========================================================================================!-->
  <script type="text/javascript" src="js/contact.js"></script>
</body>
</html>