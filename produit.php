<?PHP
class Produit{
	private $idP;
	private $age;
	private $type;
	private $sexe;
	private $pets;
	private $petsrace;
	private $prix;
	private $image;
	function __construct($idP,$age,$type,$sexe,$pets,$petsrace,$prix,$image){
		$this->idP=$idP;
		$this->age=$age;
		$this->type=$type;
		$this->sexe=$sexe;
		$this->pets=$pets;
		$this->petsrace=$petsrace;
		$this->prix=$prix;
		$this->image=$image;
	}
	
	function getidP(){
		return $this->idP;
	}
	function getAge(){
		return $this->age;
	}
	function getType(){
		return $this->type;
	}
	function getSexe(){
		return $this->sexe;
	}
	function getPets(){
		return $this->pets;
	}
	function getPetsrace(){
		return $this->petsrace;
	}
	function getPrix(){
		return $this->prix;
	}
	function getimage(){
		return $this->image;
	}

	function setidP($idP){
		$this->idP=$idP;
	}
	function setAge($age){
		$this->age=$age;
	}
	function setType($type){
		$this->type=$type;
	}
	function setSexe($sexe){
		$this->sexe=$sexe;
	}
	function setPets($pets){
		$this->pets=$pets;
	}
	function setPetsrace($petsrace){
		$this->petsrace=$petsrace;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	function setimage($image){
		$this->image=$image;
	}
	
	//function setNbHeures($nbHeures){
		//$this->nbHeures=$nbHeures;
	//}
	//function setTarifHoraire($tarifHoraire){
		//$this->tarifHoraire=$tarifHoraire;
	//}
	
}

?>