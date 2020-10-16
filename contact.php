<?php
if(isset($_POST['valider']))

if($_POST){
		$verif_caractere = preg_match("#^[a-zA-Z]+$#" , $_POST['nom']);
		
		if(!$verif_caractere && isset($_POST['nom'])){
				$msg .= "<div class='erreur'>Caractère accepté :a-z ou A-Z</div>";
			}
			
			foreach($_POST as $indice => $valeur){

							$_POST[$indice] = htmlentities($valeur);
						}
			execute_requete("INSERT INTO fr_contact (nom, prenom, email, message) 
							VALUES ('$_POST[nom]','$_POST[prenom]', '$_POST[email]', '$_POST[message]')");
			
			}	


if( isset($_POST ['nom'])&& 
	isset($_POST ['prenom']) && 
	isset($_POST ['email']) && 
	isset($_POST ['message'])){

extract ($_POST);


	if(	!empty($nom)  &&  
		!empty($prenom) &&  
		!empty($email) && 
		!empty($message)){
	
			$message=str_replace(" \ ' "," ' ",$message);	
			$destinataire="julienbasquin.jb@gmail.com";
			$sujet="formulaire de contact";
			$msg="vous avez un nouveau message  \n
			nom : $nom \n
			prenom : $prenom \n
			email : $email \n
			message: $message \n";
			$entete="From :  $prenom $nom \n Reply-to: $email";


			mail($destinataire, $sujet, $msg, $entete);
		
			echo " <script>alert('votre message a bien ete envoyé');
					history.back();</script>";
}
	else{
		echo " <script>alert('vous n\'avez pas remplie tous les champs);
					history.back();</script>";
		}

}
?>							
					

