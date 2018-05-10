<?php
  
/* variables ==================================================== */
    $bddname='cnam_projet';
    //$bddname='id5248243_cnamprojet';
    $tablename='content';
    $requete1="SELECT description_article FROM content WHERE id_article=1";  // wybieram dane z bazy o nazwie recette
   
  /*variables de connexion ============= */
    $serveur = 'localhost';  $loginserveur = 'root';   $mdpserveur = ''; // variables connexion serveur    
    //$serveur = 'localhost';  $loginserveur = 'id5248243_root';   $mdpserveur = 'klopsik1'; // variables connexion serveur    
    
    /* connexion */
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;     // option pour capturer messages d'erreur
    $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES utf8'; // option pour charset UTF-8
    $con = new PDO('mysql:host='.$serveur.';dbname='.$bddname, $loginserveur, $mdpserveur, $pdo_options); //
    //$con = new PDO('mysql:host=localhost;dbname=cnam_projet', 'root', '');
    $db = new PDO('mysql:host=localhost;dbname=cnam_projet', 'root', '', array(PDO::ATTR_PERSISTENT => true));//connection permanente
   
    
    //$resultat = $con->query($requete);
    $resultat = $con->query($requete1);    // Pour préparer et executer la requete uzywam zmiennej polaczenia do odzyskania zmiennej requete

    /* affichage */
     while($donnees = $resultat->fetch()) { // Boucle pour récupérer données de chaque enregistrement, dopoki otrzymujesz cos do zmiennej resultat, 
      $i=0;                                // numero du champ dans la requete 
      foreach ($donnees as $don) {         // Découper les données des champs de la ligne,
        if(isset($donnees[$i])){echo $donnees[$i];

        } // Afficher chaque donnée puis séparateur i wyswietlic
        $i++;
      }
    // Retour à la ligne à chaque enregistrement
    }
    ?>
        
        

 