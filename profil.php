  


<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css"/>
		<title>Profil</title>

	</head>

	<body>
	<header class="menu">
 <nav>
<ul>
<?php include('header.php') ;

?>

</ul>
 </nav>
</header>
<main>
	<?php
			$connexion = mysqli_connect("localhost", "root", "", "reservationsalles");
$sql = "SELECT * FROM utilisateurs WHERE id='".$_SESSION['id']."'";
$req = mysqli_query($connexion, $sql);
$req2 = mysqli_fetch_assoc($req);

if(isset($_POST['modifier']))
{
	if(!empty($_POST['login']) && !empty($_POST['pass']))
	{
		$login = $_POST['login'];
		$passe = $_POST['pass'];
		$modif_login = false;
		$modif_passe = false;
	
		
		if($login != $req2['login'])
		{
			$nouveau_login = "SELECT id FROM utilisateurs WHERE login='".$login."'";
			$resultat = mysqli_query ($connexion, $nouveau_login);
			$nombre_login = mysqli_num_rows($resultat);
			if($nombre_login < 1)
			{
				$sql = "UPDATE utilisateurs SET login = '$login' WHERE login = '".$_SESSION['login']."'";
				mysqli_query($connexion, $sql);
				$_SESSION['login'] = $_POST['login'];
				$modif_login = true;
			}{
				echo "<div class='coco'><p> Login modifier avec succès</p></div>";}
		
		}
		
		if($passe != $req2['confirmpass'])
		{
			
			$sql = "UPDATE utilisateurs SET password = '$passe' WHERE login = '".$_SESSION['login']."'";
			mysqli_query($connexion, $sql);
			$_SESSION['confirmpass'] = $_POST['pass'];
			$modif_passe = true;
		}	{
			echo "<div class='coco'><p>Mot de passe modifier avec succès</p></div>";}
	}

	mysqli_close($connexion);

}
?>		<section>
	
		
	<form class="formu" method="post">
		<div class="titre">
</div>
			<fieldset><legend>Modification </legend>	<label>MODIFIER LOGIN :</label>
			      <input type="text" name="login" maxlength="10"  class="profil2"/></fieldset>
			<fieldset><label>MODIFIER MOT DE PASSE :</label>
			<input type="password" name="pass" minlength="4" class="profil2"/></fieldset>

					<fieldset><label> Modifier :</label>
					<input type="submit" value="MODIFIER" name="modifier"/></fieldset>
					


				</form>
			
		
</section>
</main>

<footer>
		
				Copyright © 2020 All rights reserved
		
	</footer>	
			</body>	
</html>