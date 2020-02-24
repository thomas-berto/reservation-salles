<section>
      <?php  
     
$connexion = mysqli_connect("localhost", "root", "", "reservationsalles");
$sql = "SELECT reservations.titre, reservations.description,reservations.debut,reservations.fin,utilisateurs.id,
 utilisateurs.login FROM reservations INNER JOIN utilisateurs
ON reservations.id_utilisateur = utilisateurs.id ";
       $resultat = mysqli_query($connexion, $sql);
       while($data = mysqli_fetch_array($resultat))
       {
      ?>

<div class='containe'>
		 				 <p><?php echo $data['login'];?></p>
             <p><?php echo $data['titre'];?></p>
             <p><?php echo $data['description'];?></p>	
             <p><?php echo $data['debut'];?></p>
             <p><?php echo $data['fin'];?></p>
                          </div>
    </section>
    <?php
		  }
			
		


			
					?>
</main>