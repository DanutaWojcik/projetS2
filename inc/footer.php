<footer>
  <p id="f">
  Conception du site: 
   <?php 
  
/* variables  et affichage des donnes de bdd==================================================== */
 
    $tablename='user';
    $requete1="SELECT nom FROM user WHERE id_user=1 OR id_user=2";//selectione les donnes de bdd
   
  /*connexion avec bdd*/
    require("inc/connect_bdd.php");
    $resultat = $con->query($requete1);// Pour préparer et executer la requete 

    /* affichage */
     while($donnees = $resultat->fetch()) { // Boucle pour récupérer données de chaque enregistrement 
      $i=0;
      foreach ($donnees as $don) {         // Découper les données des champs de la ligne
        if(isset($donnees[$i])){echo $donnees[$i]." | ";
        }// Afficher chaque donnée avec séparateur 
        $i++;
      }
    }
    ?>
<!--lien vers mention legales-->
        <a class="mentions" href="mentionslegales.php" target="_blank"> Mentions légales</a>
      </p>
</footer>

 