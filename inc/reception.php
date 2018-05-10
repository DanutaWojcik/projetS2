<?php //DATE NE FONCTIONNE PAS
/* fichier pour recuperer les donnes entrées dans le formulaire de contact */
  
/* variables  */
    $tablename='message';
    $requete="INSERT INTO `message` (`id_message`, `name`, `phone`, `name_message`, `content_message`, `email`) VALUES (NULL, '".$_GET['name']."', '".$_GET['phone']."', '".$_GET['sujet']."', '".$_GET['message']."', '".$_GET['email']."' )";//wysylam do bazy danych
    $requete1="SELECT id_message FROM message";
    $requete2="SELECT name FROM message";
    $requete3="SELECT phone FROM message";
    $requete4="SELECT name_message FROM message";
    $requete5="SELECT content_message FROM message"; 
    $requete6="SELECT email FROM message";    
   
/*connexion avec bdd*/
    require("inc/connect_bdd.php");
/*variables pour préparer et executer la requete*/
    $resultat = $con->query($requete);
    $resultat1 = $con->query($requete1);
    $resultat2 = $con->query($requete2); 
    $resultat3 = $con->query($requete3); 
    $resultat4 = $con->query($requete4); 
    $resultat5 = $con->query($requete5); 
    $resultat6 = $con->query($requete6); 
/*si utilisateur est connecté au backoffice, function afiche tous les messages de bdd dans tableu html  et envoie au fichier csv*/               
function afficher($resultat0){
  if(isset($_SESSION['session'])){
      while(($donnees = $resultat0->fetch())){// Boucle pour récupérer données de chaque enregistrement,  
       $i=0;// numero du champ dans la requete 
          foreach($donnees as $don) {// Découper les données des champs de la ligne,
          if(isset($donnees[$i])){
             echo $donnees[$i];
             $file=fopen("messages.csv","a");
             fputcsv($file, explode('|',$donnees[$i]));
             $i++;// Afficher chaque donnée
             fclose($file);
          }
        }
        ?><br/><?php  //saute de ligne a chaque energistrement
      }}
      }?>
      <table cellpadding="10px" cellspacing="1px" border="5px" border-color="black" border-style="solid" font-family="Expletus Sans">
        <tr><th>No message</th><th>Nom Prenom</th> <th>Téléphone</th><th>Sujet de message</th><th>Message</th><th>email</th><th>Heure de reception message</th></tr>
        <tr>
          <td><?php afficher($resultat1);?></td>
          <td><?php afficher($resultat2);?></td>
          <td><?php afficher($resultat3);?></td>
          <td><?php afficher($resultat4);?></td>
          <td><?php afficher($resultat5);?></td>
          <td><?php afficher($resultat6);?></td>
          <td><?php date("h:i:sa");?></td>
        </tr>
      </table>;

  <?php
  //boutton de telechargement fichier csv-->  
    if(isset($_SESSION['session'])){
      echo '<p><a href="messages.csv" download><input type="button" id="download" clas="download" name="download" value="Télécharger fichier csv" /></a></p>';
    }?>