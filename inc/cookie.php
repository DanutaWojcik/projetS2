<?php
$cookie_value="Bienvenue!";
setcookie($cookie_name, $cookie_value, time() + (86400*180), "/"); // 86400 = 1 day
?>