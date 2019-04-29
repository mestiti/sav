<?PHP
class reclamation{
	private $nom;
	private $mail;
	private $sujet;
	private $message;
	
	function __construct($nom,$mail,$sujet,$message){
		$this->nom=$nom;
		$this->mail=$mail;
		$this->sujet=$sujet;
		$this->message=$message;
		
	}
	
	function getnom(){
		return $this->nom;
	}
	function getmail(){
		return $this->mail;
	}
	function getsujet(){
		return $this->sujet;
	}
	function getmessage(){
		return $this->message;
	}
	
function setnom($nom){
		$this->nom=$nom;
	}
	function setmail($mail){
		$this->mail=$mail;
	}
	function setsujet($sujet){
		$this->sujet;
	}
	function setmessage($message){
		$this->message=$message;
	}
	
	
}

?>