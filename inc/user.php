<?php
if(!isset($_GET["name_user"])){
  echo "";
}
else{
  echo "Bienvenue ".$_GET["name_user"];
}
 ?>