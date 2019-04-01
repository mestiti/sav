<?PHP
class rdv{
	private $idreclamation;
	
	private $mailclient;
	private $datee;
	private $heure;
	private $etat;
	
	function __construct($idreclamation,$mailclient,$datee,$heure,$etat){
		$this->idreclamation=$idreclamation;
		
		$this->mailclient=$mailclient;
		$this->datee=$datee;
		$this->heure=$heure;
		$this->etat=$etat;
		
	}
	
	function getid(){
		return $this->idreclamation;
	}
	
	function getmail(){
		return $this->mailclient;
	}
	function getdatee(){
		return $this->datee;
	}
	function getheure(){
		return $this->heure;
	}
	function getetat(){
		return $this->etat;
	}
	function setmail($mail){
		$this->mailclient=$mailclient;
	}

	function setdate($datee){
		$this->datee=$datee;
	}
	function setheure($heure){
		$this->heure;
	}
	
	function setetat($etat){
		$this->etat=$etat;
	}
	
}

?>