
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css"/>
		<title>planning</title>
	</head>
	<body>
		<header class="menu">
		<nav>
<ul>
<?php include('header.php');
		if(!isset($_SESSION['login'])){header('Location: connexion.php');}

?>
</ul>
 </nav>
		</header>

<section class='contai'>
      <?php  
         $id=$_SESSION['id'];

$connexion = mysqli_connect("localhost", "root", "", "reservationsalles");
$sql = "SELECT reservations.titre, reservations.description,reservations.debut,reservations.fin,utilisateurs.id,
 utilisateurs.login FROM reservations INNER JOIN utilisateurs ON reservations.id_utilisateur = utilisateurs.id WHERE id_utilisateur=$id ";
       $resultat = mysqli_query($connexion, $sql);
       while($data = mysqli_fetch_array($resultat))
       {
      ?>

		 <article class='login'><?php echo $data['login'];?></article>
             <article class='login'><?php echo $data['titre'];?></article>
             <artiCle class='reservation'><?php echo $data['description'];?></article>	
             <article class='reservation'><?php echo $data['debut'];?></article>
             <article  class='reservation'><?php echo $data['fin'];?></article>
    </section>
    <?php
	
}

				?>
</main>
<footer> 
				
				Copyright © 2020 All rights reserved
		
	</footer>	
</body>
</html>
