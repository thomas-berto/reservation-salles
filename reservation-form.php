<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css"/>
		<title>Inscription</title>
	</head>
	<body>
		<header class='menu'>
		<nav>
<ul>
<?php include('header.php');
?>
</ul>
 </nav>
		</header>
		
		<main>




<form action="reservation-form.php" method="post">
<fieldset>
   <legend>Evenement </legend>
   <label>Titre :</label>
		<input type="text" name="titre" >
<label>Description :</label>
        <input type="text" name="description"></fieldset>
<fieldset>  
<legend>date </legend>      
<label>Date de début :</label>
		<input type="datetime-local" name="debut">
<label>Date de fin :</label>
        <input type="datetime-local" name="fin">
</fieldset>
        <input type="submit" name="reservez" value="Reservez">

</form>

<?php
if(isset($_POST["reservez"]))
{

	
	$titre=$_POST["titre"];
	$des=$_POST["description"];
	$debut= $_POST["debut"];
	$fin=$_POST["fin"];		
    $connexion = mysqli_connect("localhost", "root", "", "reservationsalles");
    
	$requete = "INSERT INTO `reservations` (`id`, `titre`, `description`, `debut`, `fin`, `id_utilisateur`)
VALUES (NULL,'".$titre."', '".$des."', '".$debut."', '".$fin."' , '".$_SESSION["id"]."')";  
  $query = mysqli_query($connexion, $requete);

	header('Location: planning.php');
	
}
else{
	echo'creneau indisponible';
}

?>
		





        </main>
<footer>
				<section>
				Copyright © 2020 All rights reserved
		</section>
	</footer>	
</body>
</html>

