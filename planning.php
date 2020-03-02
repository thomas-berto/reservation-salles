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
		
		<main>
<section>
<table border="1">
	<thead>
		<tr>
			<td></td>
			<td>Lundi</td>
			<td>Mardi</td>
			<td>Mercredi</td>
			<td>Jeudi</td>
			<td>Vendredi</td>
			<td>Samedi</td>
			<td>Dimanche</td>
        </tr>

<?php
	
						
$ligne = 11;
$colonne = 7;
$heure=array('08h00','09h00','10h00','11h00','12h00','13h00',
'14h00','15h00','16h00','17h00','18h00','19h00')	;
$connexion = mysqli_connect("localhost", "root", "", "reservationsalles");
$sql = "SELECT * FROM reservations ";
$query = mysqli_query($connexion, $sql);
$resultat=mysqli_fetch_all($query);


?>
   <tbody>
    <tr>

<?php


for($ligne =8; $ligne <= 19; $ligne++ )
{

		echo '<tr>';
		echo "<td>".$ligne."</td>";

  	for($colonne = 1; $colonne <= 7; $colonne++)
  	{
    
				echo "<td>";
				foreach($resultat as $value){

					$id=$_SESSION['id'];
					$jour=date("w", strtotime($value[3]));
					$heure=date("H", strtotime($value[3]));
				
					if($heure==$ligne && $jour== $colonne)
						{
						
						echo"<a href=\"reservation.php?id=".$id."\">$value[1]</a>";
						
						
					
						}
					
						
						 
		
						
		}
		echo '</td>';
	}
		echo '</tr>';			
}
?>



   </tbody>

</table>


</section>

</main>
<footer>
				
				Copyright © 2020 All rights reserved
		
	</footer>	
</body>
</html>

