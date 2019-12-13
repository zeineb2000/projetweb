<?PHP
class livraison{
	private $id;
	private $adresse;
	private $ville;
	private $region;
	private $telephone;
	private $email;
	private $status;
	private $date;
	private $commentaire;
	private $iduser;

    function construct($adresse,$ville,$region,$telephone,$email,$commentaire,$iduser){
		$this->adresse=$adresse;
		$this->ville=$ville;
		$this->region=$region;
		$this->telephone=$telephone;
		$this->email=$email;
        $this->commentaire=$commentaire;
        $this->iduser=$iduser;
    }
  function getiduser(){
		return $this->iduser;
    }
    function getid(){
		return $this->id;
    }
    function getadresse(){
		return $this->adresse;
	}
	function getville(){
		return $this->ville;
	}
	function getregion(){
		return $this->region;
	}
	function gettelephone(){
		return $this->telephone;
	}
	function getemail(){
		return $this->email;
	}
	function getstatus(){
		return $this->status;
	}
	function getdate(){
		return $this->date;
    }
    function getcommentaire(){
        return $this->commentaire;
    }

    function setadresse($adresse){
		$this->adresse=$adresse;
	}
	function setville($ville){
		$this->ville=$ville;
	}
	function setregion($region){
		$this->region=$region;
	}
	function settelephone($telephone){
		$this->telephone=$telephone;
	}
	function setemail($email){
		$this->email=$email;
	}
	function setstatus($status){
		$this->status=$status;
	}
    function setdate($date){
		$this->date;
	}
	  function setiduser($iduser){
		$this->iduser=$iduser;
	}
	function setcommentaire($commentaire){
		$this->commentaire=$commentaire;
	}
    
}
?>