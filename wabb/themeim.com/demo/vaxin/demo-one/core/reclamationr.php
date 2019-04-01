<?PHP
include "C:/wamp64/www/omekomek2/wabb/themeim.com/demo/vaxin/demo-one/config.php";
class reclamationr {
function afficherrec ($reclamation){
		echo "Cin: ".$reclamation->getCin()."<br>";
		echo "mail: ".$reclamation-> getmail()."<br>";
		echo "sujet: ".$reclamation->getsujet()."<br>";
		echo "msg: ".$reclamation->getmessage()."<br>";
		
	}
	
	function ajouterrec($reclamation){
		$sql="insert into reclamation (cin,mail,sujet,message) values (:cin, :mail,:sujet,:message)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $cin=$reclamation->getCin();
        $mail=$reclamation->getmail();
        $sujet=$reclamation->getsujet();
        $message=$reclamation->getmessage();
        
		$req->bindValue(':cin',$cin);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':sujet',$sujet);
		$req->bindValue(':message',$message);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherreclamation(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerrec($cin){
		$sql="DELETE FROM reclamation where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierrec($reclamation,$cin){
		$sql="UPDATE reclamation SET cin=:cinn, mail=:mail,sujet=:sujet,message=:message WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cinn=$reclamation->getCin();
        $mail=$reclamation->getmail();
        $sujet=$reclamation->getsujet();
        $message=$reclamation->getmessage();
       
		$datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':mail'=>$mail,':sujet'=>$sujet,':message'=>$message);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':sujet',$sujet);
		$req->bindValue(':message',$message);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	
	function recupererrec($cin){
		$sql="SELECT * from reclamation where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListerec($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}






}

?>