<!--verifie les donnes de connexion au backoffice, sie les donnes ne correspondent pas avec bdd affiche message d'erreur-->
<?php
/*variables*/
session_start();
$login=$_POST['login']; 
$password=$_POST['password'];

    $tablename='user';
    $requete="SELECT *FROM user WHERE login='$login' AND password='$password'";  // wybieram dane z bazy o nazwie recette
/*connexion avec bdd*/
    require("inc/connect_bdd.php");
    if($resultat = $con->query($requete)){
      $users=$resultat->rowCount();
        if($users>0){
          $_SESSION['session']=true;
          $_SESSION['id']=row['id'];
          $row=$resultat->fetch();
          $_SESSION['login']=$row['login'];
          unset($_SESSION['error']);
          header('Location: backoffice.php');
        }
        else{
          $_SESSION['error']="Login ou mot de passe erroné";
          header('Location: connexion.php');
    }}
    else{
      echo "Login ou mot de passe erroné";
    }
    