


<?PHP
include "C:/wamp64/www/omekomek2/wabb/themeim.com/demo/vaxin/demo-one/view/back/gentelella-master/production/entities/rdv.php";
include "C:/wamp64/www/omekomek2/wabb/themeim.com/demo/vaxin/demo-one/view/back/gentelella-master/production/core/rdvr.php";
 

    
    
if (isset($_POST['etat']) and isset($_POST['idrdv']) and isset($_POST['datee']) and isset($_POST['heure']) and isset($_POST['mailclient']))
{
   

  $rdv=new rdv($_POST['idrdv'],$_POST['mailclient'],$_POST['datee'],$_POST['heure'],$_POST['etat']);
  $rdvr=new rdvr();
  $rdvr->modifierrdv($rdv,$_POST['id_ini']);
  echo "<script>alert('la modification est effectutée avec succes')</script>";
  header('Location: form_valid.php');
  
}
	
?>
