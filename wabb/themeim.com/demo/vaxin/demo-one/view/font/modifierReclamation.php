
<?PHP
include "C:/wamp64/www/omekomek2/wabb/themeim.com/demo/vaxin/demo-one/view/font/entities/reclamation.php";
include "C:/wamp64/www/omekomek2/wabb/themeim.com/demo/vaxin/demo-one/view/font/core/reclamationr.php";

if (isset($_POST['modifier'])){
	$reclamation=new reclamation($_POST['nom'],$_POST['mail'],$_POST['sujet'],$_POST['message']);
	$reclamationr=new reclamationr();
	$reclamationr->modifierrec($reclamation,$_POST['id_ini']);
	//var_dump($reclamationr);
	echo "<script>alert('la modification est effectutée avec succes')</script>";
	header('Location: espacerec.php');
	}
?>
</body>
</HTMl>