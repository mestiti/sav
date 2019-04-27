
<?PHP
include "C:/wamp64/www/omekomek2/wabb/themeim.com/demo/vaxin/demo-one/view/font/entities/reclamation.php";
include "C:/wamp64/www/omekomek2/wabb/themeim.com/demo/vaxin/demo-one/view/font/core/reclamationr.php";

if (isset($_POST['modifier'])){
	$reclamation=new reclamation($_POST['cin'],$_POST['mail'],$_POST['sujet'],$_POST['message']);
	$reclamationr=new reclamationr();
	$reclamationr->modifierrec($reclamation,$_POST['cin_ini']);
	echo "<script>alert('la modification est effectutée avec succes')</script>";
	header('Location: espacerec.php');
	}
?>
</body>
</HTMl>