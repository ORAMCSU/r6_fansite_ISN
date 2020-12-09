<?php
$_POST["nom"]
if(isset($_POST) && isset($_POST["nom"]) && isset($_POST["email_exp"]) && isset($_POST["objet"]) && isset($_POST["message"]){
		extract($_POST);
		if(!empty($nom) && !empty($email_exp) && !empty($objet) && !empty($message)){
			$destinataire = "nadal.paul@gmail.com";
			$sujet = "Sujet: $objet";
			$msg="Nouveau message \n
			Nom: $nom \n
			Email: $email_exp \n
			Pays: $pays \n
			Fichier: $monfichier \n
			Message: $message";
			$entete= "From: $nom \n reply-To: $email_exp";
			mail($destinataire, $sujet, $msg, $entete);
		}
		else{
			echo "Vous n'avez pas rempli tous les champs!";
		}
}
?>