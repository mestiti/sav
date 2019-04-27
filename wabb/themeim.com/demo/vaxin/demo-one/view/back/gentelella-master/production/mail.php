
  
    	
    	<?PHP
include "C:/wamp64/www/omekomek2/wabb/themeim.com/demo/vaxin/demo-one/config.php";

$to = $_POST['mailto'];

$subject = 'hi';
$message = $_POST['msg'];
$headers = 'from: wdev9108@gmail.com';
if(mail($to, $subject, $message, $headers))
    {echo("ey");
	$sql="UPDATE rendezvous SET etat=1 WHERE mailclient='$to'";
	$db=config::getConnexion();

$req=$db->prepare($sql);
$req->execute();
	}
     else
     { echo("failure");}
   
?>

     







   

