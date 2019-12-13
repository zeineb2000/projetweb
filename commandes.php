<?PHP
class Commande{
	private $idP;
	private $type;
	private $sexe;
	private $prix;
	private $qte;
	function __construct($Idp,$type,$sexe,$prix,$qte){
		$this->Idp=$Idp;
		$this->type=$type;
		$this->sexe=$sexe;
		$this->prix=$prix;
		$this->qte=$qte;
	}
	
	function getIdp(){
		return $this->Idp;
	}
	function gettype(){
		return $this->type;
	}
	function getsexe(){
		return $this->sexe;
	}
	function getprix(){
		return $this->prix;
	}
	function getqte(){
		return $this->qte;
	}

	function setIdp($Idp){
		$this->Idp=$Idp;
	}

	function settype($type){
		$this->type=$type;
	}
	function setsexe($sexe){
		$this->sexe=$sexe;
	}
	function setprix($prix){
		$this->prix=$prix;
	}
	function setqte($qte){
		$this->qte=$qte;
	}
	
	//function setNbHeures($nbHeures){
		//$this->nbHeures=$nbHeures;
	//}
	//function setTarifHoraire($tarifHoraire){
		//$this->tarifHoraire=$tarifHoraire;
	//}
	
}

?>