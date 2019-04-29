<?PHP
include "C:/wamp64/www/omekomek2/wabb/themeim.com/demo/vaxin/demo-one/view/font/core/reclamationr.php";
$reclamationr=new reclamationr();

	$reclamationr->supprimerrec($_POST["idrec"]);
	header('Location: espacerec.php');

?>