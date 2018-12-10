<?php

class UserManager{

public function __construct(){

}

public function connectUser($post){

    // Prise des elements du formulaire
    $Login = $post['PseudoLog'];
    $Mdp = $post['MdpLog'];
    
    // Connection à la base de donnée 
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=game_tournement', 'root', 'root');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    
    // Vérifie si le Pseudo & le mot de passe sont dans la base de donnée 
    $requete = $bdd->prepare("SELECT * FROM Identifiants WHERE IF_login =  ?");
    $requete->execute([$Login]);
    
    echo '<pre>';
    $resultat = $requete->fetchAll();
    echo '</pre>';
    
    //Si y'a un retour de la base de donnée, Si y'a le mot de passe entrée et identique à celui de la base de donnée, Si Login & Mdp sont pas vides
    if (sizeof($resultat) > 0 AND $Mdp == $resultat[0]['IF_mdp'] AND $Login != null AND $Mdp != null) {
        if ($resultat[0]['IF_role'] == 'administrator') {
                // Si l'utilisateur est administrateur = MOI 
            header('Location: ../../VIEWS/ADMIN/AdminPage.php');
        } else {
                // Si l'utilisateur est un "User"
            session_start();
            $_SESSION['Login'] = $Login;
            header('Location: ../VIEWS/USER/UserPage.php');
        }
    } else {
            // Element incorrect dans le formulaire
            header('Location: ../VIEWS/?error=error');
            // header('Location: ../VIEWS/Homepage.html');
    }
    
}

public function deconnectUser(){
    session_destroy();
    header('Location: ../VIEWS/index.php');   
}

public function createUser($post){

// Prise des elements du formulaire
$Pseudo = $post['NameUser'];
$Mdp = $post['MdpUser'];
$MdpDup = $post['MdpUserDup'];
$Email = $post['EmailUser'];

if($Pseudo != null AND $Mdp != null AND $MdpDup != null AND $Email != null){

// Connection à la base de donnée 
try {
    $bdd = new PDO('mysql:host=localhost;dbname=game_tournement', 'root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$randomID = rand(3,5000);

// Condition 1 La base de donnée a retourner des éléments. 2 Le mot de passe et similaire au mot de passe répété. 3 Le Pseudo existe pas déja dans la base de donnée
    if ($Mdp == $MdpDup){
	$parse = "INSERT INTO Identifiants VALUES (NULL, '$randomID' ,'$Pseudo', '$Mdp', 'utilisateur', '$Email')";
	$enregistrement = $bdd->query($parse);
	
    // L'utilisateur est redirigé sur une page afin de récolter ces informations.
    session_start();
    $_SESSION['Pseudo'] = $Pseudo;
    $_SESSION['Id'] = $randomID;
	header('Location: ../VIEWS/USER/InformationPage.php');
}else{
	echo('Problème soit dans sur la Réception/Envoi à la base, Soit les mot de passe sont pas identiques ');
}

}else{
    header('Location: ../VIEWS/?errorins=errorins');
}

}

public function infosUser($post){

session_start();

if(isset($_SESSION['Pseudo'])){
    $Pseudo = $_SESSION['Pseudo'];
}else{
    $Pseudo = $post['Pseudo'];
}

$ID = $_SESSION['Id'];

$Civilite = $post['Civilite']; 
$Prenom = $post['Prenom'];
$Nom = $post['Nom'];
$Adresse = $post['Adresse'];
$Ville = $post['Ville'];
$Pays = $post['Pays'];
$Numero = $post['Numero'];
$Console = $post['Console'];
$GamerTag = $post['GamerTag'];

// Connection à la base de donnée 
try {
    $bdd = new PDO('mysql:host=localhost;dbname=game_tournement', 'root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// Consulte la base de donnée permettant d'obtenir le dernier ID inscrit de la game de donnée 
$requete = $bdd->query("SELECT UT_id FROM Identifiants ORDER BY UT_id DESC LIMIT 1");
$resultat = $requete->fetchAll();

// ID de la table Utilisateur
    $ID = $resultat[0]['UT_id'];

if($Civilite == 1){
	$Civilite = "Monsieur";
}elseif($Civilite == 2){
	$Civilite = "Madame";
}

	// Requete de l'enregistrement des informations de l'utilisateur 
    $parse = " INSERT INTO Utilisateurs VALUES ($ID,'$Civilite','$Nom','$Pseudo','$Prenom','$Adresse','$Numero','$Ville','$Pays','$Console','$GamerTag',NULL, NULL, NULL, NULL)";
	$bdd->query($parse);
    
// La fonction header fonctionne parce la page ne fait pas d'appel Ajax 
        header('Location: ../VIEWS/USER/UserPage.php');

}


}
?>