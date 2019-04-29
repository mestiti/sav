<?PHP
include "C:/wamp64/www/omekomek2/wabb/themeim.com/demo/vaxin/demo-one/config.php";
class reclamationr {
function afficherrec ($mail1){
	$sql="SElECT * From reclamation where mail='$mail1'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
		
	}
	
	function ajouterrec($reclamation){
		$sql="insert into reclamation (nom,mail,sujet,message) values (:nom, :mail,:sujet,:message)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$reclamation->getnom();
        $mail=$reclamation->getmail();
        $sujet=$reclamation->getsujet();
        $message=$reclamation->getmessage();
        
		$req->bindValue(':nom',$nom);
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
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.nom= a.nom";
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
	function supprimerrec($id){
		$sql="DELETE FROM reclamation where idrec= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierrec($reclamation,$id){
		$sql="UPDATE reclamation SET nom=:nom, mail=:mail,sujet=:sujet,message=:message WHERE idrec=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$nom=$reclamation->getnom();
        $mail=$reclamation->getmail();
        $sujet=$reclamation->getsujet();
        $message=$reclamation->getmessage();
       
		$datas = array(':idrec'=>$id, ':nom'=>$nom, ':mail'=>$mail,':sujet'=>$sujet,':message'=>$message);
		
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
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
	
	function recupererrec($id){
		$sql="SELECT * from reclamation where idrec=$id";
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