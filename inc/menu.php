<!--menu horizontale-->
<nav id="topmenu">
      <ol>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="acategorie.php">Les Cosmétiques à Faire Chez Soi</a></li>
        <li><a href="bcategorie.php">L'Huile de Noix Coco en Cuisine </a></li>
        <li><a href="contact.php">Contactez-nous &#9993</a></li>
        <li>
        <?php
        if(!isset($_SESSION['login'])){//change valeur de button connexion  apres connection reussie
          echo '<a href="connexion.php"><input type="button" id="connect" name="connect" value="Connexion"/></a><?php';
        }
        else{
          echo '<a href="logout.php"><input type="button" id="connect" name="connect" value="Deconnexion"/></a>';
        }?>
         </li> 
        <li class="user" name="user">
        <?php
          if (isset($_SESSION['login'])){//afiche login d'utilisateur  apres la connection>
            echo $_SESSION['login'];
          }
          else{
            echo " ";
          }
          ?></li>
      </ol>
 </nav>