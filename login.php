<!--verifie les donnes de connexion au backoffice, sie les donnes ne correspondent pas avec bdd affiche message d'erreur-->
<?php
session_start();
/*connexion avec bdd*/
include("inc/connect_bdd.php");
/*variables*/
$login=$_GET['login']; 
$password=$_GET['password'];
    $tablename='user';
    $requete="SELECT * FROM user WHERE login='$login' AND password='$password'";  // selection de base des donnes
    if($resultat = $con->query($requete)){//si existe utilisateur et mot passe
      $users=$resultat->rowCount();//count nombre des utilisateurs avec ce login et motpasse 
        if($users>0){//si existe utilisateur avec ce mot passe
          $_SESSION['session']=true;//variable a valeur true
          $row=$resultat->fetch();
          $_SESSION['id']=$row['id_user'];          
          $_SESSION['login']=$row['login'];
          unset($_SESSION['error']);//
          header("Location:backoffice.php");//redirection au backoffice
        }
        else{//afficher message d'erreur sur la page de connection, en cas ou les donnes entres ne corresopndent pas avec les donnes de bdd
          $_SESSION['error']="Login ou mot de passe erroné";
          header("Location:connexion.php");
        }
    }
    else{
      echo "Login ou mot de passe erroné";
    }
    ?>
