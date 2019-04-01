<?PHP

include "C:/wamp64/www/omekomek2/wabb/themeim.com/demo/vaxin/demo-one/view/back/gentelella-master/production/core/rdvr.php";
$rdv1r=new rdvr();
$listerdv=$rdv1r->afficherrendezvous();


?>
<table border="1">
<tr>
	<td>id</td>
	
<td>mail</td>
<td>date</td>
<td>heure</td>
<td>etat</td>

<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listerdv as $row){
	?>
	<tr>
		<td><?PHP echo $row['idreclamation']; ?></td>
		
	<td><?PHP echo $row['mailclient']; ?></td>
	<td><?PHP echo $row['datee']; ?></td>
	<td><?PHP echo $row['heure']; ?></td>
	<td><?PHP echo $row['etat']; ?></td>
	
	<td><form method="POST" action="supprimerrendezvous.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idreclamation']; ?>" name="idreclamation">
	</form>
	</td>
	<td><a href="modifierrendezvous.php?idreclamation=<?PHP echo $row['idreclamation']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>



