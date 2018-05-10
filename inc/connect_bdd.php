<!--connexion avec bdd-->
<?php
/* variables ==================================================== */
$bddname='cnam_projet';
//$bddname='id5248243_cnamprojet';
/*variables de connexion ============= */
$serveur = 'localhost';$loginserveur = 'root';   $mdpserveur = ''; // variables connexion serveur    
//$serveur = 'localhost';$loginserveur = 'id5248243_root'; $mdpserveur = 'klopsik1';// variables connexion serveur  
/* connexion */
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;      // option pour capturer messages d'erreur
    $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES utf8'; // option pour charset UTF-8
    $con = new PDO('mysql:host='.$serveur.';dbname='.$bddname, $loginserveur, $mdpserveur, $pdo_options); 
    ?>