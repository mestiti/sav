<?PHP
include "C:/wamp64/www/omekomek2/wabb/themeim.com/demo/vaxin/demo-one/view/font/core/reclamationr.php";
$reclamationr=new reclamationr();
if (isset($_POST["cin"])){
	$reclamationr->supprimerrec($_POST["cin"]);
	header('Location: espacerec.php');
}

?>