<!--deconnexion de backoffice-->
<?php
session_start();
session_unset();
header ('Location: connexion.php');
?>