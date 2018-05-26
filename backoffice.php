<!Doctype>
<?php
session_start();
//empecher utilisateur d'entrer dans backoffice sans passer par login
if(!isset($_SESSION['session'])){
  header('Location: index.php');
  exit();
}
?>
<?php
$cookie_name = "bienvenue_10";
include("inc/cookie.php");
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
<!--styles------------------------------------------------------------>
  <link href="css/stylescat.css" rel="stylesheet" type="text/css"/>
  <link href="css/styles.css" rel="stylesheet" type="text/css"/>
  <link href="css/stylesprod.css" rel="stylesheet" type="text/css"/>
<!--favicon-------------------------------------------------------------------------------------------------------------------------------->
  <link rel="icon" type="image/png" href="images/kokosfavicon.png" />
</head>
<body>
  <header>
    <?php include("inc/header.php");?>
  </header>
  <main>
<!--affiche bievenue+login d'utilisateur-------------->
  <h2 id="welcome">
  <?php echo "Bienvenue ".$_SESSION['login'].", ";?> modifiez ou ajoutez les articles sur das la base des donnes.</h2>
  <p>
  <?php 
    if(isset($_SESSION['confirm_modif'])){//si article etait modifie, affiche confirmation//
      echo $_SESSION['confirm_modif'];
    }
    else{
      echo " ";
    }
    if(isset($_SESSION['confirm_ajout'])){//si article etait ajouté, affiche confirmation//
      echo $_SESSION['confirm_ajout'];
    }
    else{
      echo " ";
    }
  ?>
  </p>
  <p>Cliquez sur le titre d'article que vous voulez modifier<br/><br/>
  <?php 
  include("inc/connect_bdd.php");
/* On récupère les 10 derniers articles */ 
  $req = 'SELECT id_article, date_article, title_article, description_article, auteur_modif FROM content LIMIT 0, 10';
  $resultat=$con->query($req);
  while ($infos = $resultat->fetch()) {//boucle pour recuperer les donnes dans tableau html//?> 
    <table id="backoffice">
      <tr><th>No article</th><th>Date de modification</th><th>Titre</th><th>Description</th><th>Auteur de modification</th></tr>
      <tr>
        <td><?php echo $infos['id_article'];?></td> 
        <td><?php echo $infos['date_article'];?></td> 
<!--variable globale pour recuperer article en cliquant sur le titre dans tableau html----->
        <td><a href="articlemodif.php?number=<?php echo $infos['id_article'];?>"><?php echo $infos['title_article'];?></a></td> 
        <td><?php echo $infos['description_article'];?></td>
        <td><?php echo $infos['auteur_modif'];?></td>
      </tr><br/> 
    </table></br><?php }?>
  </p>
<!--boutton pour naviguerd dans backoffice--->
  <nav>
    <a href="articleajout.php" target="_blank"><input type="button" id="download" clas="download" name="download" value="Ajoutez l'article" ></a>
    <a href="message.php" target="_blank"><input type="button" id="download" clas="download" name="download" value="Voir les messages reçus" ></a>
<!--boutton de telechargement fichier csv-->
    <a href="messages.csv" download><input type="button" id="download" clas="download" name="download" value="Télécharger fichier csv" ></a>
  </nav>
  </main>
<!--footer-->
  <?php include("inc/footer.php");?>
</body>
</html>