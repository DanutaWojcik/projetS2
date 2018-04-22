<?php /* fichier cnam/nfa017/inc/connexion.php - 20170503-PBO */
  
/* variables ==================================================== */
    $bddname='cnam_projet';
    //$bddname='id5248243_cnamprojet';
    $tablename='message';
    $requete="INSERT INTO `message` (`id_message`, `name`, `phone`, `name_message`, `content_message`, `email`) VALUES (NULL, '".$_GET['name']."', '".$_GET['phone']."', '".$_GET['sujet']."', '".$_GET['message']."', '".$_GET['email']."' )";//wysylam do bazy danych
    $requete1="SELECT id_message, name, phone, name_message, content_message, email FROM message";  // wybieram dane z bazy o nazwie recette
   
  /*variables de connexion ============= */
    $serveur = 'localhost';$loginserveur = 'root';   $mdpserveur = ''; // variables connexion serveur    
   //$serveur = 'localhost';$loginserveur = 'id5248243_root'; $mdpserveur = 'klopsik1';// variables connexion serveur    
    
    /* connexion */
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;      // option pour capturer messages d'erreur
    $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES utf8'; // option pour charset UTF-8
    $con = new PDO('mysql:host='.$serveur.';dbname='.$bddname, $loginserveur, $mdpserveur, $pdo_options); 
    $resultat = $con->query($requete);
    $resultat = $con->query($requete1);    // Pour préparer et executer la requete uzywam zmiennej polaczenia do odzyskania zmiennej requete

    /* affichage */
    
     while($donnees = $resultat->fetch()){ // Boucle pour récupérer données de chaque enregistrement, dopoki otrzymujesz cos do zmiennej resultat, 
       $i=0;// numero du champ dans la requete 
      foreach ($donnees as $don) {// Découper les données des champs de la ligne,
        if(isset($donnees[$i])){
         echo $donnees[$i].' | ';
        $file=fopen("messages.csv","a");
        fputcsv($file, explode('|',$donnees[$i]));
        $i++;
        //print_r(fgetcsv($file));
        fclose($file);
        } // Afficher chaque donnée puis séparateur i wyswietlic
        
      }
      ?><br/><?php                      // Retour à la ligne à chaque enregistrement
    }