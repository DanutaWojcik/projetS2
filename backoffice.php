<!Doctype>
<?php
session_start();
//empecher utilisateur d'entrer dans backoffice sans login
if(!isset($_SESSION['session'])){
  header('Location: index.php');
  exit();
}
?>
<html lang="fr">
<head>
  <title>backoffice</title>
  <meta name="Description" content="backooffice de hdnc.online"/>
  <meta name="viewport" content="width=device-width">
  <meta charset = 'utf-8'>

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
<!--affichage logo et nom de site--------------------------------------------------------------------------------------------------->
     <?php include ("inc/logo.php");?>
      <div class="name">www.hdnc.online</div>
    </div>
    <br/>
<!--menu principale--------------------------------------------------------------------------------------------------->
    <?php include ("inc/menu.php");?>
  </header>
  <main>
<!--affiche bievenue+login d'utilisateur-------------->
  <span id="welcome">
  <?php echo "Bienvenue ".$_SESSION['login']."!";?>
  </span>

  <p>Dernier article ajouté ou modifié<br/><br/>
  <?php 
  include("inc/connect_bdd.php");
/* On récupère les 10 derniers articles */ 
  $req = ('SELECT id_article, date_article, title_article, description_article, auteur_modif FROM content LIMIT 0, 10');
  $resultat=$con->query($req);
  while ($infos = $resultat->fetch()) {?> 
    <table id="backoffice">
      <tr><th>No article</th><th>Date de modification</th><th>Titre</th><th>Description</th><th>Auteur de modification</th></tr>
      <tr>
        <td><?php echo $infos['id_article'];?></td> 
        <td><?php echo $infos['date_article'];?></td> 
        <td><?php echo $infos['title_article'];?></td> 
        <td><?php echo $infos['description_article'];?></td>
        <td><?php echo $infos['auteur_modif'];?></td>
      </tr><br/> 
      <a href="articlemodif.php?number=<?php echo $infos['id_article']; ?>">modifier l'article</a>
    </table><?php }?>
  </p>
<!--lien pour acceder au message.php--->
  <p>
    <a href="message.php" target="_blank">Voir la liste des messages</a>
  </p>
<!--boutton de telechargement fichier csv-->
  <p>
    <a href="messages.csv" download><input type="button" id="download" clas="download" name="download" value="Télécharger fichier csv" /></a>
  </p>
  </main>
</body>
</html>