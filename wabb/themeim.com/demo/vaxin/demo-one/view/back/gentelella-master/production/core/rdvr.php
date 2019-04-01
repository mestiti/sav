<?PHP
include "C:/wamp64/www/rdv/config.php";
class rdvr {
function afficherrdv ($rdv){
	echo "etat: ".$rdv->getid()."<br>";
		
		
		echo "mail: ".$rdv->getmail()."<br>";
		echo "date: ".$rdv->getdatee()."<br>";
		echo "heure: ".$rdv->getheure()."<br>";
		echo "etat: ".$rdv->getetat()."<br>";
		
	}
	
	function ajouterrdv($rdv){
		$sql="insert into rendezvous (idreclamation,mailclient,datee,heure,etat) values (:idreclamation,:mailclient, :datee,:heure,:etat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
         $idreclamation=$rdv->getid();
		 
        $mailclient=$rdv->getmail();
        $datee=$rdv->getdatee();
        $heure=$rdv->getheure();
        $etat=$rdv->getetat();
        

		$req->bindValue(':idreclamation',$idreclamation);
		
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
	function supprimerrdv($idreclamation){
		$sql="DELETE FROM  rendezvous where idreclamation= :idreclamation";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		 
		$req->bindValue(':idreclamation',$idreclamation);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierrdv($rdv,$idreclamation2){
		$sql="UPDATE rendezvous SET idreclamation=:idreclamation, mailclient=:mailclient,datee=:datee,heure=:heure,etat=:etat WHERE idreclamation=:idreclamation2";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
       
       

       $req=$db->prepare($sql);
         $idreclamation=$rdv->getid();
		 
        $mailclient=$rdv->getmail();
        $datee=$rdv->getdatee();
        $heure=$rdv->getheure();
        $etat=$rdv->getetat();

		
		$req->bindValue(':idreclamation',$idreclamation);
		$req->bindValue(':idreclamation2',$idreclamation2);
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
	function recupererrdv($idreclamation){
		$sql="SELECT * from rendezvous where idreclamation=:idreclamation";
		$db = config::getConnexion();		
		$req=$db->prepare($sql);		
		$req->bindValue(':idreclamation',$idreclamation);


		try{
       
		$req->execute();
		$R= $req->fetchAll();
		return $R;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListerendezvous($tarif){
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
	function trier()
	{
$sql="SElECT * From rendezvous order by etat ";
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