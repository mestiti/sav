<HTML>
<head>
</head>
<body>
<?PHP
include "C:/wamp64/www/omekomek2/wabb/themeim.com/demo/vaxin/demo-one/entities/reclamation.php";
include "C:/wamp64/www/omekomek2/wabb/themeim.com/demo/vaxin/demo-one/core/reclamationr.php";
if (isset($_GET['cin'])){
	$reclamationr=new reclamationr();
    $result=$reclamationr->recupererrec($_GET['cin']);
	foreach($result as $row){
		$cin=$row['cin'];
		$mail=$row['mail'];
		$sujet=$row['sujet'];
		$message=$row['message'];
		?>


		<form method="POST">
<table>
<caption>Modifier Employe</caption>
<tr>
<td>CIN</td>
<td><input type="number" name="cin" value="<?PHP echo $cin ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="mail" value="<?PHP echo $mail ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="sujet" value="<?PHP echo $sujet ?>"></td>
</tr>
<tr>
<td>nb heures</td>
<td><input type="text" name="message" value="<?PHP echo $message ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$reclamation=new reclamation($_POST['cin'],$_POST['mail'],$_POST['sujet'],$_POST['message']);
	$reclamationr->modifierrec($reclamation,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	header('Location: afficherReclamation.php');
}
?>
</body>
</HTMl>