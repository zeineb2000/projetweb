<?PHP
class Registre{
	private $cin;
	private $nom;
	private $reclamation;
	private $subject;
	function __construct($cin,$nom,$reclamation,$subject){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->reclamation=$reclamation;
		$this->subject=$subject;
		
	}
	function getCin(){
		return $this->cin;
	}
	
	function getNom(){
		return $this->nom;
	}
	function getReclamation(){
		return $this->reclamation;
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
	function setReclamation($reclamation){
		$this->reclamation=$reclamation;
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