<?PHP
include "C:/wamp64/www/omekomek2/wabb/themeim.com/demo/vaxin/demo-one/view/back/gentelella-master/production/core/rdvr.php";
$rdvr=new rdvr();
if (isset($_POST["idreclamation"])){
	$rdvr->supprimerrdv($_POST["idreclamation"]);
	header('Location: form_valid.php');
}

?>