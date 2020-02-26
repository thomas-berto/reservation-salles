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
if(isset($_SESSION['deconnexion'])){header('Location: connexion.php');}?>

</ul>
 </nav>
</header>


<section>
	<article class="fermeture">
		
<h1> <a href='connexion.php'> Reservez votre creneau </h1></a>


</article>
</section>

<footer>
				
				Copyright © 2020 All rights reserved	
				
	</footer>	
</body>
</html>