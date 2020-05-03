<?php $titre = "Absences " ; ?>
<?php ob_start(); ?>
	<!-- affichage liste eleves absents -->
	<h2>Date </h2><?= $_POST['date_j'] ; ?>
	<h3>Liste eleves absents : </h3>
	<table border="1" CELLSPACING=0 CELLPADDING=15 class="table_absence" style="background: #cce6ff; font-size: 20px;">
		<tr>
			<th>CNE</th>
			<th>NOM</th>
			<th>PRENOM</th>
		</tr>
		<?php  foreach ($_POST['check_list'] as $cne_el) : ?>
		<tr>
			<?php 
					$sql = "select nom,prenom from eleves where cne = '$cne_el' ;";
				    $stmt1 = $bdd->query($sql);
				    $res = $stmt1->fetch();
					$sql2 = "select count(*) from absences where cne = '$cne_el' ;";
				    $stmt2 = $bdd->query($sql2);
				    $res2 = $stmt2->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);

				 ?>
			<td><?= $cne_el ; ?></td>
			<td><?= $res['nom'] ; ?></td>	
			<td><?= $res['prenom'] ?></td>	
			<td><?= $res2[0]; ?></td>	
		</tr>
		<?php endforeach; ?>
	</table>


<?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php'; ?>