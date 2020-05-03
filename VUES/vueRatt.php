<?php $titre = "Rattrapage " ; ?>
<?php ob_start(); ?>

	<!-- liste eleves convoqués au ratt  -->
	<center>
	<h2>Liste eleves convoqués au rattrapage (+3 abs) : </h2>
	<table border="1" border="1" CELLSPACING=0 CELLPADDING=15>
		<tr>
			<th>NOM</th>
			<th>PRENOM</th>
			<th>NOMBRE ABSENCES</th>
		</tr>
		<?php  foreach ($list_ratt as $val) : ?>
		<tr>
				<?php 
					$sql = "select nom,prenom from eleves where cne = '$val' ;";
				    $stmt1 = $bdd->query($sql);
				    $res = $stmt1->fetch();
					$sql2 = "select count(*) from absences where cne = '$val' ;";
				    $stmt2 = $bdd->query($sql2);
				    $res2 = $stmt2->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);

				 ?>
			<td><?php echo $res['nom']; ?></td>
			<td><?php echo $res['prenom']; ?></td>
			<td><?php echo $res2[0]; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</center>

<?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php'; ?>
