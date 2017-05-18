<?php
include("../vues/v_sommaire.php");
$action = $_REQUEST['action'];
switch($action){
	case 'gererMDP':{
		include("../vues/v_gererCompte.php");}
		break;

	case 'modifierINFO':
		$id=$_SESSION['idVisiteur'];
		$nom=$_POST['newNOM'];
		$prenom=$_POST['newPRENOM'];
		$adresse=$_POST['newADRESSE'];
		$cp=$_POST['newCP'];
		$ville=$_POST['newVILLE'];
		$pdo->majInfo($id,$nom,$prenom,$adresse,$cp,$ville);

		break;
	
	case 'modifierMDP':{
		$id=$_SESSION['idVisiteur'];
		$oldMDP=$_POST['oldMDP'];
		$vraiMDP=$_SESSION['motdepasse'];
		$newMDP=$_REQUEST['newMDP'];
		$newMDP2=$_REQUEST['newMDP2'];
		if ($oldMDP==$vraiMDP){
			if (complexeMDP($newMDP)){
				if ($newMDP==$newMDP2) {
					if ($oldMDP!=$newMDP) {
					$pdo->majMotdepasse($id,$newMDP);
					echo "<p>Modification réussi</p>";
					}
					else {
						ajouterErreur("le nouveau mot de passe doit être different de votre ancien mot de passe");
						include("../vues/v_erreurs.php");
					}		
				}
				else {
						ajouterErreur("Les 2 nouveaux mots de passe de corresponde pas");
						include("../vues/v_erreurs.php");
				}	
			}
			else{
				ajouterErreur("mot de passe pas assez complexe (minimum 1 chiffre et 5 caractere)");
				include("../vues/v_erreurs.php");
			}
		}
		else{
			ajouterErreur("l'ancien mot de passe est incorrect");
			include("../vues/v_erreurs.php");
		}
		break;
	}
}

?>