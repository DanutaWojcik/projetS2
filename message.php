<!Doctype HTML>
<?php
session_start();
?>
<?php $cookie_name = "bienvenue_10";
include("inc/cookie.php");
?>
<html lang="fr">
<head>
  <title>Confirmation d'envoi message</title>
  <meta name="Description" content=""/>
  <meta name="viewport" content="width=device-width"/>
  <meta charset = 'utf-8'/>
  <!--[if lt IE 9]>
  <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
  <![endif]-->
  <link href="css/stylescat.css" rel="stylesheet" type="text/css"/>
  <link href="css/styles.css" rel="stylesheet" type="text/css"/>
<!--favicon----------------------------------------------------------------------------------------------------->
  <link rel="icon" type="image/png" href="images/kokosfavicon.png"/>
</head>
<body>
  <header>
     <?php include("inc/header.php");?>
  </header>
  <main>
    <?php
  /*connexion avec bdd*/
    include("inc/connect_bdd.php");?>
<!--affichage de bdd==========================================================================================-->
    <div id="confirm">
<!--si utilisateur n'est pas connecté confirmation d'envoie message et details de message-->
      <?php 
      if(!isset($_SESSION['session'])){//si utilisateur n'est  pas connecté//
        $requete="SELECT*FROM message WHERE id_message=(SELECT MAX(id_message)FROM message)";//selectionne des donnes de bdd avec derniere id
        $resultat = $con->query($requete);?>
        <header>
          <h1> &#9993 Message envoyé </h1>
        </header>
<!--heure envoi de formulaire------------------------------------------------------------------------------>
        <h2>Message ok</h2>
        <br/>
        <h2>Détails de message</h2>
         <table>
          <tr><th>No message</th><th>Nom Prenom</th><th>Téléphone</th><th>Sujet de message</th><th>Message</th><th>email</th><th>Heure de reception message</th></tr>
          <?php 
// Boucle pour récupérer données de chaque enregistrement de derniere message rcues dans tableau html//
          while(($donnees=$resultat->fetch())){?>
          <tr>
            <td><?php echo $donnees['id_message'];?></td>
            <td><?php echo $donnees['name'];?></td>
            <td><?php echo $donnees['phone'];?></td>
            <td><?php echo $donnees['name_message'];?></td>
            <td><?php echo $donnees['content_message'];?></td>
            <td><?php echo $donnees['email'];?></td>
            <td><?php echo $donnees['date'];}?></td>
          </tr>
        </table>
        <h2>Merci de votre message, nous allons vous repondre dans les prochains delais.</h2>
        <?php 
      }
      else{ //si utilisateur est connecté//
        $requete_1="SELECT * FROM message";//selectionne des donnes de bdd//
        $resultat_1 = $con->query($requete_1);?>
        <table>
          <tr><th>No message</th><th>Nom Prenom</th><th>Téléphone</th><th>Sujet de message</th><th>Message</th><th>email</th><th>Heure de reception message</th></tr>
          <?php 
// Boucle pour récupérer données de chaque enregistrement dans tableau html//
          while(($donnees=$resultat_1->fetch())){?>
          <tr>
            <td><?php echo $donnees['id_message'];?></td>
            <td><?php echo $donnees['name'];?></td>
            <td><?php echo $donnees['phone'];?></td>
            <td><?php echo $donnees['name_message'];?></td>
            <td><?php echo $donnees['content_message'];?></td>
            <td><?php echo $donnees['email'];?></td>
            <td><?php echo $donnees['date'];}?></td>
          </tr>
        </table>
        <nav>
<!--boutton de telechargement fichier csv-->
        <a href="messages.csv" download ><input type="button" id="download" clas="download" name="download" value="Télécharger fichier csv" ></a>
<!--retour liste des messages--->
        <a href="backoffice.php"><input type="button" id="download" class="download" name="download" value="Retour liste des articles" ></a>
        </nav>
      <?php } ?>
        <br/>
        </div>
<!--retour acceuil--->
    <div id="back">
    <a href="index.php"><input type="button" id="download" class="download" name="download" value="Retour accueil" ></a>
    </div>
<!--message d'erreur et son correcection si mauvaise sasie--->
    <div id="erreur" name="erreur" >
    <?php 
      if(isset($_SESSION['erreur_contact'])){//affiche commentaire de supression des characteres
        echo $_SESSION['erreur_contact']; 
      }?>
    </div>
    <br/>
  </main>
  <br/>
  <br/>
  <br/>
<!--footer-->
<?php include("inc/footer.php");?>
</body>
</html>