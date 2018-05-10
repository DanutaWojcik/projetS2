<?php
  if (isset($_SESSION['login'])){
    echo $_SESSION['login'];
  }
  else{
    echo " ";
  }
 ?>