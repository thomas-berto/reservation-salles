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
	
						
$ligne = 12;
$colonne = 7;
$jour = array('Lundi','Mardi','Mercredi','Jeudi','Vendredi',
'Samedi','Dimanche');
$heure=array('08h00','09h00','10h00','11h00','12h00','13h00',
'14h00','15h00','16h00','17h00','18h00','19h00','')	;
$connexion = mysqli_connect("localhost", "root", "", "reservationsalles");
$sql = "SELECT * FROM reservations ";
	$resultat = mysqli_query($connexion, $sql);
while($data = mysqli_fetch_array($resultat))

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
    if ($data['debut'] == $heure && $data['fin'] == $heure)
	echo '<td>'.$data['titre'].'</td>';
	?>
</tr>
   </tbody>

</table>


</section>
</main>
<footer>
				<section>
				Copyright © 2020 All rights reserved
		</section>
	</footer>	
</body>
</html>

