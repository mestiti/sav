<?PHP
include "C:/wamp64/www/omekomek2/wabb/themeim.com/demo/vaxin/demo-one/config.php";
class rdvr {
function afficherrdv ($rdv){
	echo "etat: ".$rdv->getid()."<br>";
		
		
		echo "mail: ".$rdv->getmail()."<br>";
		echo "date: ".$rdv->getdatee()."<br>";
		echo "heure: ".$rdv->getheure()."<br>";
		echo "etat: ".$rdv->getetat()."<br>";
		
	}
	
	function ajouterrdv($rdv){
		$sql="insert into rendezvous (idrdv,mailclient,datee,heure,etat) values (:idrdv,:mailclient, :datee,:heure,:etat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
         $idrdv=$rdv->getid();
		 
        $mailclient=$rdv->getmail();
        $datee=$rdv->getdatee();
        $heure=$rdv->getheure();
        $etat=$rdv->getetat();
        

		$req->bindValue(':idrdv',$idrdv);
		
		$req->bindValue(':mailclient',$mailclient);
		$req->bindValue(':datee',$datee);
		$req->bindValue(':heure',$heure);
		$req->bindValue(':etat',$etat);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherrendezvous(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From rendezvous";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);

		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerrdv($idrdv){
		$sql="DELETE FROM  rendezvous where idrdv= :idrdv";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		 
		$req->bindValue(':idrdv',$idrdv);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierrdv($rdv,$idrdv2){
		$sql="UPDATE rendezvous SET idrdv=:idrdv, mailclient=:mailclient,datee=:datee,heure=:heure,etat=:etat WHERE idrdv=:idrdv2";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
       
       

       $req=$db->prepare($sql);
         $idrdv=$rdv->getid();
		 
        $mailclient=$rdv->getmail();
        $datee=$rdv->getdatee();
        $heure=$rdv->getheure();
        $etat=$rdv->getetat();

		
		$req->bindValue(':idrdv',$idrdv);
		$req->bindValue(':idrdv2',$idrdv2);
		$req->bindValue(':mailclient',$mailclient);
		$req->bindValue(':datee',$datee);
		$req->bindValue(':heure',$heure);
			$req->bindValue(':etat',$etat);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;

        }
		
	}
	function recupererrdv($idrdv){
		$sql="SELECT * from rendezvous where idrdv=:idrdv";
		$db = config::getConnexion();		
		$req=$db->prepare($sql);		
		$req->bindValue(':idrdv',$idrdv);


		try{
       
		$req->execute();
		$R= $req->fetchAll();
		return $R;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	
	function trierid()
	{
		$sql="SElECT * from rendezvous ORDER BY idrdv ";
		$db = config::getConnexion();
		try{
		$list=$db->query($sql);
		return $list;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}
	function affichermail(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT mail From reclamation where sujet='produit'";
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