<?php $titre = " Formulaire " ; ?>

<?php ob_start(); ?>
	
		<div class="box1">
			<form action="index.php/?submit=form" method="POST">
			<div class="date">
				<h3>Date du jour : </h3>
				<input type="date" name="date_j">
			</div>
				<table border="1" CELLSPACING=0 CELLPADDING=15>
					<thead>
						<tr>
							<th>Nom</th>
							<th>Prenom</th>
							<th>email</th>
							<th>Absence</th>
						</tr>
					</thead>
					<?php foreach ($list_eleve as $eleve):  ?>
						<tr>
							<td><?php echo $eleve['nom'] ?></td>
							<td><?php echo $eleve['prenom'] ?></td>
							<td><?php echo $eleve['email'] ?></td>

							<td><input type="checkbox" name="check_list[]" value="<?php echo $eleve['cne'] ?>"></td>
						</tr>
					<?php endforeach ;  ?>
					<tr align="MIDDLE"><td colspan=4><input type="submit" class="btn" name="submitF" value="Submit"></td></tr>
				</table>
			</form>
		</div>
	
		<div class="box2">
			<form action="index.php?submit=ratt" method="POST">
				<h2>Appuyer ici pour afficher la liste des rattrapages</h2>
				<input type="submit" class="btn2" name="submitR" value="Submit">
			</form>
		</div>

		<div class="box3">
			<form action="index.php?submit=absence_Tout" method="POST">
				<h2>Appuyer ici pour afficher la liste des absences de tous les élèves</h2>
				<input type="submit" class="btn2" name="submitA" value="Submit">
			</form>
		</div>



	
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php'; ?>
