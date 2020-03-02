<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css"/>
		<title>index</title>
	</head>

<body class="connexion">

<header class="menu">
 <nav>
<ul>
<?php include('header.php');
?>

</ul>
 </nav>
</header>


<section>
	<article class="fermeture">

	<?php 

if(isset($_SESSION['login']) || isset($_SESSION['pass']))
{
	echo "<h1> <a href='reservation-form.php'> Reservez votre creneau </h1></a>";
	}
	else{
	echo "<h1> <a href='connexion.php'> Reservez votre creneau </h1></a>";
	}

?>

</article>
</section>

<footer>
				
				Copyright © 2020 All rights reserved	
				
	</footer>	
</body>
</html>