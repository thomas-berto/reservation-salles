<?php
session_start();

if (isset($_SESSION['login'])):
	?>


 
     
<li><a class="lasuite" href="index.php">Acceuil</a></li>
      <li><a href="profil.php">Profil</a></li>
      <li><a href="planning.php">Planning</a></li>
      <li><a href="reservation-form.php">reservation</a></li>
   

        <form action="index.php" method="post">
            <input type="submit" name='deconnexion' class="deco" value="deconnexion">
        </form>

  

<?php if (isset($_POST['deconnexion'])) {
                session_unset();
                session_destroy();
                header('Location:index.php');
            }
            ?>


 <?php else:?>     
 <

       <li><a class="lasuite" href="index.php">Acceuil</a></li>
       <li><a href="inscription.php">Inscription</a></li>
      <li><a href="connexion.php">Connexion</a></li>

<?php endif;?>   