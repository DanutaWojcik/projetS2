<?php//ESSAIS POUR COTROLER FORMULAIRE
//define variables and set to empty values
//$name = $_GET['name'];

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if(isset($_GET["name"])){//, $_GET["phone"], $_GET["email"])) {
    $_SESSION['nameErr']="Ce champ est obligatoire";
    
  } 
    else
      {
      trim($_GET["name"],"{}%");
      $_SESSION['nameErr_1']="Les characteres non souhaités {}%, on été supprimés de votre message.";    
    }
  }

