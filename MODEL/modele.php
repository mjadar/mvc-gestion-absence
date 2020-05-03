<?php 


function connect_bdd() {
  $bdd = new PDO('mysql:host=localhost;dbname=ensaabsence;charset=utf8', 'root', '');
    // set the PDO error mode to exception
   $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $bdd;
}

//selection de la liste des eleves de la table eleves
function get_list_eleve(){
 $bdd = connect_bdd();
  $res = $bdd ->query('select nom,prenom ,email ,cne from eleves order by nom asc ;');
  return $res ; 
}
//******************

//enregistrer les absences dans la tables absences
function enregistrer_les_absences(){
	  $bdd = connect_bdd();
		$ma_date = $_POST['date_j'];
		foreach ($_POST['check_list'] as $cne_el) {
		 	$sql_insert_abs = "insert into absences values ('$cne_el',' . $ma_date') ; " ; 
		 	$bdd->exec($sql_insert_abs);
		 }
		 echo "record successfully registered !";
}


//enregistre dans un tableau la liste des eleves invoqués au rattrapage car +3 absences
function liste_eleves_ratt (){
	 $bdd = connect_bdd();
	 $list_eleve_ratt  = array();
     $sql_select_distinct_cne = "select distinct(cne) from absences ;";
   	 $stmt_sl_d_cne =$bdd->query($sql_select_distinct_cne);
    foreach ($stmt_sl_d_cne as $elev) {
    	$sql_all_abs = "select * from absences where cne='$elev[0]' ; ";
    	$stmt_all_abs = $bdd->query($sql_all_abs);
    	$nbr_ligne = $stmt_all_abs->rowCount();
    
    	if ($nbr_ligne>3) {
    		array_push($list_eleve_ratt, $elev[0]);
    	}  	
    }

    if ($list_eleve_ratt )
       return $list_eleve_ratt ; 

    else 
      throw new Exception("Aucun éleve n'est selectionné ");
}


function liste_eleves_all(){
 $bdd = connect_bdd();
 $list_eleve  = array();
 
 $res = get_list_eleve();
    
    foreach ($res as $elev) {
      $cne_el = $elev['cne'];
      $sql_all_abs = "select count(*) from absences where cne='$cne_el' ; ";
      $stmt2 = $bdd->query($sql_all_abs);
      $res2 = $stmt2->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);

      $list_eleve[$cne_el] = $res2[0];
      
    }
    return $list_eleve ;
}

 ?>