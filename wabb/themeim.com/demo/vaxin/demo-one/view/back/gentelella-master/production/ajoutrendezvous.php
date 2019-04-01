<?PHP
include "C:/wamp64/www/omekomek2/wabb/themeim.com/demo/vaxin/demo-one/view/back/gentelella-master/production/core/rdvr.php";
include "C:/wamp64/www/omekomek2/wabb/themeim.com/demo/vaxin/demo-one/view/back/gentelella-master/production/entities/rdv.php";

if (isset($_POST['idreclamation'])  and ($_POST['mailclient']) and isset($_POST['datee']) and isset($_POST['heure']) and isset($_POST['etat']) ){
$rdv1=new rdv($_POST['idreclamation'],$_POST['mailclient'],$_POST['datee'],$_POST['heure'],$_POST['etat']);

$rdv1r=new rdvr();
$rdv1r->ajouterrdv($rdv1);
header('Location: form_valid.php');
}else{
	echo "vérifier les champs";
}
//*/

?>