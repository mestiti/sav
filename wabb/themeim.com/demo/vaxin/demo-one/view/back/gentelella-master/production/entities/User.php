<?php 
include "C:/wamp64/www/omekomek2/wabb/themeim.com/demo/vaxin/demo-one/config.php";
class User{
	private $login;
    private $pwd;
	private $role;
   	

	public function __construct($login,$pwd)
	{
		$this->login=$login;
		$this->pwd=$pwd;
		
		
	}
	function getLog()
	{
		return $this->login;
	}
    function getPWD()
	{
		return $this->pwd;
		
	}
	 function getRole()
	{
		return $this->role;
		
	}

	public function Logedin($login,$pwd)
	{
		$db=config::getConnexion();
		$req="select * from users where user_name='$login' && user_pass='$pwd'";
		$rep=$db->query($req);
		return $rep->fetchAll();
	}

	}
	
	

	?>