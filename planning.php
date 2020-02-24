<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css"/>
		<title>Inscription</title>
	</head>
	<body>
		<header>
		<nav>
<ul>
<?php include('header.php')
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
$jour = array('Lundi','Mardi','Mercredi','Jeudi','Vendredi',
'Samedi','Dimanche');
$heure=array('08h','09h','10h','11h','12h','13h',
'14h','15h','16h','17h','18h','19h',)	;

$connexion = mysqli_connect("localhost", "root", "", "reservationsalles");
$sql = "SELECT * FROM reservations ";
$resultat = mysqli_query($connexion, $sql);


?>
   <tbody>
    <tr>
<?php
    for ($j=0; $j<=$ligne; $j++) 
    { 

echo '<tr class="ligne">';
echo '<td class="heure">', $heure[$j], '</td>';
    } 
?>
	</tr>
	<tr>
<?php
while($row = $resultat->fetch_assoc()) {
	$id=$row["id"];
	echo "<a href='reservation.php?id=", $id, "'>";
	echo "<td>Titre: ".$row["titre"]."<br /><a href=\"reservation.php?id=".$id."\">Plus d'infos</a></td>";
	echo "<td>".$row["id"]."</td><td>".$row["titre"]." ".$row["description"]."</td> ";
	echo '</a>';
}
?>
</tr>
   </tbody>

</table>


</section>
</main>
<footer>
				
	</footer>	
</body>
</html>

