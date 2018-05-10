<?php
/* variables ==================================================== */
    $tablename='content';
    $requete1="SELECT description_article FROM content WHERE id_article=2";
  /*connexion avec bdd*/
    require("inc/connect_bdd.php");
    $resultat = $con->query($requete1);

    /* affichage */
     while($donnees = $resultat->fetch()){
      $i=0;
      foreach ($donnees as $don) {
        if(isset($donnees[$i])){echo $donnees[$i];

        }
        $i++;
      }
    }
    ?>