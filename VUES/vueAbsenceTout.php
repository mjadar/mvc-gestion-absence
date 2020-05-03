<?php $titre = "Toutes Les Absences " ; ?>
<?php ob_start(); ?>
	<!-- affichage liste eleves absents -->
	<center>
	<h3>Liste d'absence tous les élèves : </h3>
	<table border="1" CELLSPACING=0 CELLPADDING=15 class="table_absence" style="background: #cce6ff; font-size: 20px;">
		<tr>
			<th>CNE</th>
			<th>NOM</th>
			<th>PRENOM</th>
			<th>NOMBRE ABSENCES</th>
		</tr>
		<?php foreach ($list_cne_abs as $key => $value): ?>
		<tr>
			<?php 
					$sql = "select nom,prenom from eleves where cne = '$key' ;";
				    $stmt1 = $bdd->query($sql);
				    $res = $stmt1->fetch();
					
				 ?>
			<td><?= $key; ?></td>
			<td><?= $res['nom'] ; ?></td>	
			<td><?= $res['prenom'] ?></td>	
			<td><?= $value; ?></td>	
		</tr>
		<?php endforeach; ?>
	</table>
	</center>

<?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php'; ?>