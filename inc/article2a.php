<?php
/* variables */
    $tablename='content';
    $requete1="SELECT description_article FROM content WHERE id_article=3";
  /*connexion avec bdd*/
    require("inc/connect_bdd.php");
    $resultat = $con->query($requete1);    // Pour préparer et executer la requete uzywam zmiennej polaczenia do odzyskania zmiennej requete

    /* affichage */
     while($donnees = $resultat->fetch()) { //récupére données de chaque enregistrement
      $i=0;
      foreach ($donnees as $don) {
        if(isset($donnees[$i])){echo $donnees[$i];

        }
        $i++;
      }
    }
    ?>
