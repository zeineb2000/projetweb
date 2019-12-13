<?PHP
include "../config.php";
class ProduitC {
function afficherProduit ($produit){
		echo "idP: ".$produit->getidP()."<br>";
		echo "age: ".$produit->getAge()."<br>";
		echo "type: ".$produit->getType()."<br>";
		echo "sexe: ".$produit->getSexe()."<br>";
		echo "pets: ".$produit->getPets()."<br>";
		echo "petsrace: ".$produit->getPetsrace()."<br>";
		//echo "imageC: ".$client->getimageC()."<br>";
		echo "prix: ".$produit->getPrix()."<br>";
		echo "image: ".$produit->getimage()."<br>";

	}
	//function calculerSalaire($client){
	//	echo $client->getNbHeures() * $client->getTarifHoraire();
	
	function ajouterProduit($produit){
		$sql="insert into produit (idP,age,type,sexe,pets,petsrace,prix,image) values (:idP,:age,:type,:sexe,:pets,:petsrace,:prix,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idP=$produit->getidP();
        $age=$produit->getAge();
        $type=$produit->getType();
        $sexe=$produit->getSexe();
        $pets=$produit->getPets();
        $petsrace=$produit->getPetsrace();
        $prix=$produit->getPrix();
        $image=$produit->getimage();
		$req->bindValue(':idP',$idP);
		$req->bindValue(':age',$age);
		$req->bindValue(':type',$type);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':pets',$pets);
		$req->bindValue(':petsrace',$petsrace);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':image',$image);
			$req->execute();
          if(move_uploaded_file($_FILES['tmp_name']['name'], $target)) {
          	$msg="aaaa" ;
          }
          else{
          	$msg="laaa" ; 
          }
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherproduits(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.idC= a.idC";
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function affichercat(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.idC= a.idC";
		$sql="SElECT * From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function afficherproduitparcat($id){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.idC= a.idC";
		$sql="SElECT * From produit WHERE idc = ".$id." ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerproduit($idP){
		$sql="DELETE FROM produit where idP= :idP";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idP',$idP);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierproduit($produit,$idP){
		$sql="UPDATE produit SET idP=:idP, age=:age,type=:type,sexe=:sexe,pets=:pets, petsrace=:petsrace,prix=:prix,image=:image  WHERE idP=:idP";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idP=$produit->getidP();
        $age=$produit->getAge();
        $type=$produit->getType();
        $sexe=$produit->getSexe();
        $pets=$produit->getPets();
        $petsrace=$produit->getPetsrace();
        $prix=$produit->getPrix();
        $image=$produit->getimage();
$datas = array( ':idP'=>$idP, ':age'=>$age,':type'=>$type,':sexe'=>$sexe,':pets'=>$pets,':petsrace'=>$petsrace,':prix'=>$prix,':image'=>$image);
	
		$req->bindValue(':idP',$idP);
		$req->bindValue(':age',$age);
		$req->bindValue(':type',$type);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':pets',$pets);
		$req->bindValue(':petsrace',$petsrace);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':image',$image);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererproduit($idP){
		$sql="SELECT * from produit where idP=$idP";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function afficherproduitssingle($idP){
		$sql="SELECT * from produit where idP=$idP";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherListeproduits($idP){
		$sql="SELECT * from produit where idP=$idP";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function afficherpaniers(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.idC= a.idC";
		$sql="SELECT * FROM produit where panier=1 ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerpaniers($idP){
		$sql="UPDATE produit SET panier=1 where idP=:idP";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idP',$idP);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimerpanier($idP){
		$sql="UPDATE produit SET panier=0 where idP=:idP";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idP',$idP);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}
?>