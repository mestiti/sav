<?PHP
include "C:/wamp64/www/omekomek2/wabb/themeim.com/demo/vaxin/demo-one/view/back/gentelella-master/production/core/rdvr.php";
include "C:/wamp64/www/omekomek2/wabb/themeim.com/demo/vaxin/demo-one/view/back/gentelella-master/production/entities/rdv.php";

$today=date("y-m-d");

if (isset($_POST['idrdv'])  and isset($_POST['mailclient']) and isset($_POST['datee']) and isset($_POST['heure']) and isset($_POST['etat']) )
{
	
	/*
		if(   $_POST['datee'] > $today)
		{echo"nnnnnn";}*/

$rdv1=new rdv($_POST['idrdv'],$_POST['mailclient'],$_POST['datee'],$_POST['heure'],$_POST['etat']);
$rdv1r=new rdvr();
$rdv1r->ajouterrdv($rdv1);
header('Location: form_valid.php');
echo"okk";

}
else{
	echo "vérifier les champs";
}
//*/

?>