<!--A FINIR affiche et envoie au bdd article modifie  ou ajouté-->
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
<?php 
/*Si le champ "numero_article" est rempli*/  
/*Ensuite si le champ "date_article" est rempli*/ 
  if (isset($_POST['date_article']) AND $_POST['date_article'] !== "") { 
  /*Puis si le champ "text_article" est rempli*/ 
    if (isset($_POST['description_article']) AND $_POST['description_article'] !== "") {
      /* Enfin si le champ "auteur article"est rempli*/
      if (isset($_POST['auteur_modif']) AND $_POST['auteur_modif'] !== "") { 
      /*Au final on a comme ordre de modifier l'article seulement si les champs numero_article, date_article, text_article et auteur article ne sont pas vide*/ 
      try { 
       include("inc/connect_bdd.php"); 
       /* modifier les données */
       //$req ='UPDATE content SET date_article, title_article, description_article, auteur_modif WHERE id_article = :id_article ' 
       /*$resultat=$con->prepare($req)*/$req = $con->prepare('UPDATE id_article content SET date_article, title_article, description_article, auteur_modif WHERE id_article = :id_article ');
       $req->execute(array('id_article' => $_POST['id_article'],'date_article' => $_POST['date_article'], 'description_article' => $_POST['description_article'], 'auteur_modif' => $_POST['auteur_modif'] )); 
       }
        catch(Exception $e) { 
        die('Erreur:'.$e->getMessage()); } 
        $req->closeCursor(); 
        } 
        } 
        echo'<h2> votre article a bien été modifié</h2>'; 
        } 
        else { 
        echo '<p>Vous n\'avez pas remplis touts les champs demandés</p>'; 
} ?>