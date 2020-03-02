


<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css"/>
		<title>Inscription</title>
	</head>
	<body class='inscription'>
		<header>
		<nav>
<ul>
<?php include('header.php');
if(isset($_SESSION['login']) || isset($_SESSION['pass']))
{
	header('Location: index.php');
} ?>
</ul>
 </nav>
		</header>
		
		<main>
		<article class="box">
				<form action="inscription.php" method="post">
				<div class="titre">
				<legend>inscription</legend>
				</div>
					<div class="input-container">
					<input type="text" name="login"  placeholder="login"/>
					<input type="password" name="passe"  placeholder="password"/>
					<input type="password" name="passe2"  placeholder="confirmation"/>
				<div class="btn">				
					<input type="submit" value="inscription" name="inscription"/>
				</div></div>
				</form>


<?php
	if (isset($_POST['inscription']))
	{
		$login = $_POST['login'];
		$passe = $_POST['passe'];
		$passe = sha1($passe);
		$passe2 = $_POST['passe2'];
		$connexion = mysqli_connect("localhost", "root", "", "reservationsalles");
				$requete = "SELECT login FROM utilisateurs WHERE login = '$login'";
		$query = mysqli_query($connexion, $requete);	
		$resultat = mysqli_num_rows($query); 

		
		

                    if ($resultat==1) 
                    {	


                    ?>
                    <h2 class='titre'><p>Ce Login est déjà prit</p></h2>
					<?php 
                      }
  elseif ($_POST["passe"] != $_POST["passe2"]) 
              {
  ?>
	 <h2 class='titre'> <p>Attention ! Mot de passe différents</p></h2>
  <?php
              }
  else 
  {
	  $requete2 = "INSERT INTO utilisateurs(login, password) VALUES ('$login', '$passe')";
	  $query2 = mysqli_query($connexion, $requete2);
	  header('Location:connexion.php');
  }
}

?>	



			
			</article>
		</section>
</main>





<footer>
				<section>
				Copyright © 2020 All rights reserved	
				</section>
	</footer>	
</body>
</html>