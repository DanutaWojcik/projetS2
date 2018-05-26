<!--formulaire pour ajouter article dans bdd-->
<!Doctype>
<?php
session_start();
//empeche utilisateur d'entrer dans backoffice sans login
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
    <header>
      <h2>Ajoutez l'article</h2>
    </header>
    <p>
<!--formulaire de ajout de formulaire--------------->
    <form action="articleajout.php" method="GET" id="modif_article">
      <p>
      <label for="id_article_1">No Article</label><br/>
      <input type="text" name="id_article_1" readonly ><br/>
      </p>
      <p>  
      <label for="date_article_1">Date du post</label><br/> 
      <input type="text" name="date_article_1" value="<?php echo date("j/m/Y");?>" tabindex="20" readonly /><br/>
      </p>
      <p>  
      <label for="title_article_1">Titre d'article</label><br/> 
      <input type="text" name="title_article_1"/><br/>
      </p>
      <p>  
      <label for="description_article_1">Contenu d'article</label><br/>
      <textarea type="text" name="description_article_1" rows="10" cols="140" tabindex="20" ></textarea><br/>
      </p>
      <p>   
      <label for="auteur_modif_1">Auteur d'article</label><br/> 
      <input type="text" name="auteur_modif_1" value="<?php echo $_SESSION['login'];?>" readonly /><br/>
      </p>
      <p>  
      <input type="submit" id="download" name="ajouter" value="Ajouter">
    </form> 
    </p>
    <?php 
      if(isset($_GET['ajouter'])){
        $chars="#'#";
        if((preg_match($chars, $_GET['title_article']))||(preg_match($chars, $_GET['description_article']))){//si champ contient les characeres definis dans variable $chars
          $_GET['title_article']=preg_replace($chars, "\'", $_GET['title_article']);//supprime et remplace des characters de champs de formulaire
          $_GET['description_article']=preg_replace($chars, "\'", $_GET['description_article']);//supprime et remplace des characters de champs de formulaire
        }
        include("inc/connect_bdd.php");
        $requete="INSERT INTO `content` (`id_article`, `date_article`, `title_article`, `description_article`, `auteur_modif`) VALUES (NULL, '".$_GET['date_article_1']."', '".$_GET['title_article_1']."', '".$_GET['description_article_1']."', '".$_GET['auteur_modif_1']."')";//ajoute article dans bdd
        $resultat=$con->query($requete);//prepare la requete//
        $_SESSION['confirm_ajout']="Merci. Votre article '".$_GET['title_article_1']."' a bien était ajouté dans la base des donnes. Il séra publié apres validation par administrateur de site.";//initialise une variable pour afficher confirmation de modification
        header("location:backoffice.php");
      }
    ?>
<!--les bouttons avec liens pour naviguer dans backoffice-->
    <nav>
    <a href="backoffice.php"><input type="button" id="download" class="download" name="download" value="Retour liste des articles" ></a>
    <a href="message.php" target="_blank"><input type="button" id="download" class="download" name="download" value="Voir les messages reçus" ></a>
<!--boutton de telechargement fichier csv-->
    <a href="messages.csv" download><input type="button" id="download" class="download" name="download" value="Télécharger fichier csv" ></a>
    </nav>
  </main>
<!--footer--->
  <?php include ("inc/footer.php");?>
</body>
</html>

