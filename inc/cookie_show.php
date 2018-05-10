<div class="cookie"><?php
      if(!isset($_COOKIE[$cookie_name])){//si cookie est instalé son valeur nes'afiche pas
        echo $cookie_value; 
      } 
      else {
         echo " ";
    }
    ?>
</div>