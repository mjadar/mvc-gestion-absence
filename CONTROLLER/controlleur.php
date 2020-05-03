<?php
require 'Model/modele.php'; 


//afficher l'accueil , liste d'eleves à cocher 
function Accueil(){
  $list_eleve = get_list_eleve();
  require 'VUES/vueForm.php'; 
}

//afficher la liste d'absents de la seance
function Liste_Absence (){
	$bdd = connect_bdd();
 enregistrer_les_absences() ;
 //affichage
 require 'VUES/vueAbsence.php';
}

//afficher la liste d'eleves convoqués au rattrapage
function Liste_Ratt (){
	$bdd = connect_bdd();
	$list_ratt = liste_eleves_ratt ();	
 
  // affichage
  require 'VUES/vueRatt.php';
}

//affiche la liste d'absences pour tous les élèves
function Liste_all_absence(){
	$bdd = connect_bdd();
	$list_cne_abs = liste_eleves_all();
	//affiche 
	require 'VUES/vueAbsenceTout.php';

}