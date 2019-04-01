<?PHP
include "../core/reclamationr.php";
$reclamationr=new reclamationr();
if (isset($_POST["cin"])){
	$reclamationr->supprimerrec($_POST["cin"]);
	header('Location: afficherReclamation.php');
}

?>