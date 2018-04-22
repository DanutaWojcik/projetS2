<?php//define variables and set to empty values
$nameErr = "";
$name =  "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (empty($_GET["name"]/*, $_GET["name"], $_GET["email"]*/) {
    $nameErr = "Ce champ est obligatoire";
    echo $nameErr;
  } else {
  $check = test_input($_GET["name"]/*, $_GET["phone"], $_GET["message"], $_GET["email"]*/);}
    // check if name only contains letters and whitespace
    if (!preg_match("/[^{}%]$/",$name/*, $phone, $sujet, $message, $email*/))
      {
      delete("/[^{}%]$/");
      $nameErr = "Les characteres non souhaités {}%, on été supprimés de votre message.";
      echo $nameErr;      
    }
  }

?>