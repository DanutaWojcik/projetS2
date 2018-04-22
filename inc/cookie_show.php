<div id="cookie"><?php
      if(!isset($_COOKIE[$cookie_name])) {
        echo $cookie_value;
    } else {
         echo "";
    }
    ?>
</div>