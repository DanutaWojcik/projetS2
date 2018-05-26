<!--le formulaire pour modifier  article-->
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
  <title>Backoffice-modification d'article</title>
  <meta name="Description" content="modifier article"/>
  <meta name="viewport" content="width=device-width">
  <meta charset = 'utf-8'>
  <!--[if lt IE 9]>
  <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
  <![endif]-->
  <link href="css/stylescat.css" rel="stylesheet" type="text/css"/>
  <link href="css/styles.css" rel="stylesheet" type="text/css"/>
  <link href="css/stylesprod.css" rel="stylesheet" type="text/css"/>
<!-- the google fonts----------------------------------------------------------------------------------------------------------------->
  <?php include ("inc/fonts.php");?>
<!--favicon-------------------------------------------------------------------------------------------------------------------------------->
  <link rel="icon" type="image/png" href="images/kokosfavicon.png" />
</head>
<body>
  <header>
<!--affichage logo et nom de site--------------------------------------------------------------------------------------------------->
    <?php include ("inc/logo.php");?>
      <div class="name">www.hdnc.online</div>
    <br/>
<!--menu principale--------------------------------------------------------------------------------------------------->
    <?php include ("inc/menu.php");?>
  </header>
  <main>
  <?php 
/*connexion avec bdd*/
  include("inc/connect_bdd.php");
  $id=$_GET['number']; 
/* Je récupère les donnée de l'article séléctioné*/ 
  $requete_1 ="SELECT*FROM content WHERE id_article='".$id."'";
  $resultat_1=$con->query($requete_1);
  ?>
<!--affiche bievenue+login d'utilisateur-------------->
  <h2>
  <?php echo "Bienvenue ".$_SESSION['login']."!"." Modifiez l'article n°".$id.":";?>
  </h2>
  <?php while($infos=$resultat_1->fetch()){?>
    <form action="articlemodif.php" method="GET" id="modif_article">
<!--Formulaire avec les champs préremplis-->
      <p> 
        <label for="id_article">No Article</label><br/> 
        <textarea name="id_article" tabindex="20" readonly><?php echo $infos['id_article'];?></textarea><br/> 
      </p>
      <p>
        <label for="date_article">Date du post</label><br/> 
        <textarea name="date_article" tabindex="20" readonly><?php echo date("j/m/Y");?></textarea><br/>
      </p>
      <p>
        <label for="title_article">Titre d'article</label><br/> 
        <textarea name="title_article" tabindex="20"><?php echo $infos['title_article'];?></textarea><br/>
      </p>
      <p>
        <label for="description_article">Contenu de l'Article</label><br/>
        <textarea type="text" name="description_article" rows="10" cols="140" tabindex="20"><?php echo $infos['description_article'];?></textarea><br/> 
      </p>
      <p>
        <label for="auteur_modif">Auteur de modification</label><br/> 
        <textarea type="text" name="auteur_modif" tabindex="20" readonly ><?php echo $_SESSION['login'];}?></textarea><br/>
      </p>
      <p>
        <input type="submit" id="download" name="modif" value="Modifier"/>
      </p>
    </form>
  <?php
    if(isset($_GET['modif'])){
      $chars="#'#";
      if ((preg_match($chars, $_GET['title_article']))||(preg_match($chars, $_GET['description_article']))){//si champ contient les characeres definis dans variable $chars
        $_GET['title_article']=preg_replace($chars, "\'", $_GET['title_article']);// remplace des characters de champs de formulaire
        $_GET['description_article']=preg_replace($chars, "\'", $_GET['description_article']);// remplace des characters de champs de formulaire
      }
      $requete_2 = "UPDATE `content` SET `date_article` = '".$_GET['date_article']."', `title_article` = '".$_GET['title_article']."', `description_article` = '".$_GET['description_article']."', `auteur_modif` = '".$_GET['auteur_modif']."' WHERE `content`.`id_article` = '".$_GET['id_article']."'"; 
      $resultat_2 = $con->query($requete_2);
      $_SESSION['confirm_modif']="Merci. Article '".$_GET['title_article']."' a bien était modifié dans la base des donnes. Les modifications seront publiées aprés validation par administrateur";//initialise une variable pour afficher confirmation de modification
      header("location:backoffice.php");//reenvoie sur la page backoffice
    }?>
<!--les bouttons avec liens pour naviguer dans backoffice-->
  </main>  
  <nav>
    <a href="articleajout.php" target="_blank"><input type="button" id="download" class="download" name="download" value="Ajoutez article" ></a>
    <a href="backoffice.php"><input type="button" id="download" class="download" name="download" value="Retour liste des articles" ></a>
    <a href="message.php" target="_blank"><input type="button" id="download" class="download" name="download" value="Voir les messages reçus" ></a>
<!--boutton de telechargement fichier csv-->
    <a href="messages.csv" download><input type="button" id="download" class="download" name="download" value="Télécharger fichier csv" ></a>
  </nav>
<!--footer-->
  <?php include("inc/footer.php");?>
</body>
</html>