<!--fichier pour recuperer les donnes entrées dans le formulaire de contact utiliser htmlentities()-->
<?php
session_start();
$date=date("j/m/Y H:i:s");//recupere la date de serveur
$chars="#{|}|%#";//REGEX pour selectioner des charaters
if(isset($_GET['send'])){//si formulaire envoye
  if ((preg_match($chars, $_GET['name']))||(preg_match($chars, $_GET['message']))||(preg_match($chars, $_GET['phone']))){//si champ contient les characeres definis dans variable $chars
    $_SESSION['erreur_contact']="Les characteres non souhaités {}%, ont été supprimés de votre message.";//initialise variable pour stocker message d'erreur
    $_GET['name']=preg_replace($chars, "", $_GET['name']);//supprime des characters de champs de formulaire
    $_GET['message']=preg_replace($chars, "", $_GET['message']);
    $_GET['phone']=preg_replace($chars, "", $_GET['phone']);}//supprime des characters de champs de formulaire
    $_SESSION['session_contact']=true;//initialise variable
//variables de connexion avec BDD
    $tablename='message';
    $requete_1="INSERT INTO message (`id_message`, `name`, `phone`, `name_message`, `content_message`, `email`, date) VALUES (NULL, '".$_GET['name']."', '".$_GET['phone']."', '".$_GET['sujet']."', '".$_GET['message']."', '".$_GET['email']."','".$date."')";//envoie des donnes de formulaire vers bdd
    $requete="SELECT*FROM message WHERE id_message=(SELECT MAX(id_message)FROM message)";//selectionne des donnes de bdd avec derniere id
/*connexion avec bdd*/
    include("inc/connect_bdd.php");
/*variables pour préparer et executer la requete*/
    $resultat_1 = $con->query($requete_1);
    $resultat = $con->query($requete);
// Boucle pour récupérer données de chaque enregistrement,
  while($donnees=$resultat->fetch()){// Boucle pour récupérer données de chaque enregistrement,  
    $i=0;// numero du champ dans la requete 
    //foreach($donnees as $don){// Découper les données des champs de la ligne,
      while(isset($donnees[$i])){              
        $file=fopen("messages.csv","a+");//ouvre fichier csv 
        fputcsv($file, explode('|',$donnees[$i]));//insert les donnes au fichier csv
        $i++;// Afficher chaque donnée
        fclose($file);//ferme le fichier
      }
    //}
  }
header("Location:message.php");}//ammenner utilisateur vers page//}
//ferme session de formulaire de contact//
  unset($_SESSION['session_contact']);
?>