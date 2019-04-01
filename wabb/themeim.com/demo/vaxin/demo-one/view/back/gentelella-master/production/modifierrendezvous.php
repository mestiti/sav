

<HTML>
<head>
</head>
<body>
<?PHP
include "C:/wamp64/www/rdv/entities/rdv.php";
include "C:/wamp64/www/rdv/core/rdvr.php";
if (isset($_GET['idreclamation'])){
	$rdvr=new rdvr();
    $result=$rdvr->recupererrdv($_GET['idreclamation']);
	foreach($result as $row){
		$idreclamation=$row['idreclamation'];
		
		
		$mailclient=$row['mailclient'];
		$datee=$row['datee'];
		$heure=$row['heure'];
		$etat=$row['etat'];
		?>


		<form method="POST">
<table>
<caption>Modifier Employe</caption>
<tr>
<td>id</td>
<td><input type="number" name="idreclamation" value="<?PHP echo $idreclamation ?>"></td>
</tr>

<tr>
<td>mail</td>
<td><input type="text" name="mailclient" value="<?PHP echo $mailclient ?>"></td>
</tr>
<tr>
<td>date</td>
<td><input type="text" name="datee" value="<?PHP echo $datee ?>"></td>
</tr>
<tr>
<td> heures</td>
<td><input type="text" name="heure" value="<?PHP echo $heure ?>"></td>
</tr>
<tr>
<td> etzt</td>
<td><input type="text" name="etat" value="<?PHP echo $etat ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['idreclamation'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$rdv=new rdv($_POST['idreclamation'],$_POST['mailclient'],$_POST['datee'],$_POST['heure'],$_POST['etat']);
	$rdvr->modifierrdv($rdv,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: afficherrendezvous.php');
}
?>
</body>
</HTMl>