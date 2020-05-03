<?php 
	require 'CONTROLLER/controlleur.php';

try {
  if (isset($_GET['submit'])) {
		if($_GET['submit']=="form"){
			Liste_Absence();
		}elseif ($_GET['submit']=="ratt") {
			Liste_Ratt();
		}elseif ($_GET['submit']=="absence_Tout") {
			Liste_all_absence();
		}else 
			throw new Exception("Error Processing Request", 1);
  }else 
	 Accueil(); //action par defaut
	
}		
 catch(Exception $e){
 	echo  $e->getMessage();
 }
 
