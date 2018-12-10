<?php
// Controller permettant d'obtenir les informations des jeux vidéos E-sports dans la base de donnée


// Je recupere le data-Info correspondant à JX_abreviation dans la base donnée 
$Abreviation = $_POST['Abreviaiton'];
$texte = "SELECT * FROM `Jeux` WHERE `JX_abreviation` = '".$Abreviation."'";

// Connection a la base de donnée
try{
	$bdd = new PDO('mysql:host=localhost;dbname=game_tournement', 'root', 'root',
				   [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]
				  );
// Requete permettant d'avoir les informations des Jeux dans la base de donnée 
	$requete = $bdd->query($texte);
	//var_dump($requete);
	
	$resultat = $requete->fetchAll();
	
	echo json_encode($resultat);
	
	$bdd = null;
} catch(PDOException $e){
	print " Erreur ! " .$e->getMessage() ."<br/>";
	die();
	
}

?>