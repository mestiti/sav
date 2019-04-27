<?PHP
class reclamation{
	private $cin;
	private $mail;
	private $sujet;
	private $message;
	
	function __construct($cin,$mail,$sujet,$message){
		$this->cin=$cin;
		$this->mail=$mail;
		$this->sujet=$sujet;
		$this->message=$message;
		
	}
	
	function getCin(){
		return $this->cin;
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
	
function setCin($cin){
		$this->mail=$mail;
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