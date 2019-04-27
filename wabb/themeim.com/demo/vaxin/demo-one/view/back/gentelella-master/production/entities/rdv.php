<?PHP
class rdv{
	private $idrdv;
	
	private $mailclient;
	private $datee;
	private $heure;
	private $etat;
	
	function __construct($idrdv,$mailclient,$datee,$heure,$etat){
		$this->idrdv=$idrdv;
		
		$this->mailclient=$mailclient;
		$this->datee=$datee;
		$this->heure=$heure;
		$this->etat=$etat;
		
	}
	
	function getid(){
		return $this->idrdv;
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