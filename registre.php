<?PHP
class Registre{
	private $cin;
	private $nom;
	private $message;
	private $mail;
	private $subject;
	function __construct($cin,$nom,$message,$mail,$subject){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->message=$message;
		$this->mail=$mail;
		$this->subject=$subject;
		
	}
	function getCin(){
		return $this->cin;
	}
	
	function getNom(){
		return $this->nom;
	}
	function getmessage(){
		return $this->message;
	}
	
	function getMail(){
		return $this->mail;
	}
	function getSubject(){
		return $this->subject;
	}
	
	function setCin($cin){
		$this->cin=$cin;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setmessage($message){
		$this->message=$message;
	}
	
	function setMail($mail){
		$this->mail=$mail;
	}
	function setSubject($subject){
		$this->subject=$subject;
	}
	
	
	//function setNbHeures($nbHeures){
		//$this->nbHeures=$nbHeures;
	//}
	//function setTarifHoraire($tarifHoraire){
		//$this->tarifHoraire=$tarifHoraire;
	//}
	
}

?>