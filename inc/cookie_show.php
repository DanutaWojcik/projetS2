<div class="cookie"><?php
      if(isset($cookie_name)){//si cookie est instalé son valeur nes'afiche pas
        echo " "; 
      } 
      else {
         echo $cookie_value;
    }
    ?>
</div>