<?PHP
include "C:/wamp64/www/omekomek2/wabb/themeim.com/demo/vaxin/demo-one/entities/reclamation.php";
include "C:/wamp64/www/omekomek2/wabb/themeim.com/demo/vaxin/demo-one/core/reclamationr.php";
 
 
if (isset($_POST['cin']) and isset($_POST['mail']) and isset($_POST['sujet']) and isset($_POST['message']) ){
$reclamation1=new reclamation($_POST['cin'],$_POST['mail'],$_POST['sujet'],$_POST['message']);

$reclamation1r=new reclamationr();
$reclamation1r->ajouterrec($reclamation1);

$message='votre reclamtion est prise en compte';
echo $message;
header('Location: espacerec.php');	
}

else{

	$message='inserer vos données';
}
//*/

?>