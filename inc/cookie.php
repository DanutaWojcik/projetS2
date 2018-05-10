<?php//fixe cookie A VOIR LE DUREE
setcookie($cookie_name, $cookie_value, time() + (86400*1), "/"); // 86400 = 1 day
?>