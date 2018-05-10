<!--les formulaires pour modifier ou ajouter article-->
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
  <h2>
  <?php echo "Bienvenue ".$_SESSION['login']."!"." Modifiez ou ajoutez les articles:";?>
  </h2>
  <p>
<?php 
/*connexion avec bdd*/
    require("inc/connect_bdd.php");  
/* Je récupère les donnée de l'article séléctioné*/ 
$req = ('SELECT id_article, date_article, title_article, description_article, auteur_modif FROM content WHERE id_article = ?'); 
$resultat1=$con->prepare($req);
$resultat1->execute(array($_GET['number']));
while ($infos = $resultat1->fetch()){?>
<!--Formulaire avec les champs préremplis--> 
<p>
<form action="apresmodif.php" method="post" id="modif_article">
  <label for="id_article">No Article</label><br/> 
  <input type="text" name="id_article" value="<?php echo $infos['id_article'];?>" tabindex="20"/><br/> 
  <label for="date_article">Date du post</label><br/> 
  <input type="date" name="date_article" value="<?php echo $infos['date_article'];?>" tabindex="20"/><br/>
  <label for="title_article">Titre d'article</label><br/> 
  <input type="text" name="title_article" value="<?php echo $infos['title_article'];?>" tabindex="20"/><br/>
  <label for="description_article">Contenu de l'Article</label><br/>
  <textarea type="text" name="description_article" rows="10" cols="140" tabindex="20" title="<?php echo $infos['description_article'];?>"></textarea><br/> 
  <label for="auteur_modif">Auteur de modification</label><br/> 
  <input type="text" name="auteur_modif" value="<?php echo $_SESSION['login'];?>" tabindex="20"/><br/>
<?php } ?>
  <input type="submit" id="download" value="evoyez">
 </form> </p>
 <!--Formulaire pourajouter article--> 
<p>
<form action="apresmodif.php" method="post" id="modif_article">
  <label for="id_article">No Article</label><br/> 
  <input type="text" name="id_article" ><br/> 
  <label for="date_article">Date du post</label><br/> 
  <input type="date" name="date_article" ><br/>
  <label for="title_article">Titre d'article</label><br/> 
  <input type="text" name="title_article" /><br/>
  <label for="description_article">Contenu de l'Article</label><br/>
  <textarea type="text" name="description_article" rows="10" cols="140" tabindex="20" ></textarea><br/> 
  <label for="auteur_modif">Auteur de modification</label><br/> 
  <input type="text" name="auteur_modif" /><br/>
  <input type="submit" id="download" value="evoyez">
 </form> </p>

 
<!--lien pour acceder au message.php--->
    <p><a href="message.php">Voir la liste des messages</a></p>
<!--boutton de telechargement fichier csv-->  
    <p><a href="messages.csv" download><input type="button" id="download" clas="download" name="download" value="Télécharger fichier csv" /></a></p>
  </p>
</form>
  </main>
</body>
</html>
