<?PHP
include "../config.php";
class CommandeC {
function afficherCommande ($commande){
		echo "num: ".$commande->getNum()."<br>";
		echo "categorie: ".$commande->getCategorie()."<br>";
		echo ":type ".$commande->getType()."<br>";
		echo "sexe: ".$commande->getSexe()."<br>";
		
	}
	//function calculerSalaire($commande){
	//	echo $commande->getNbHeures() * $commande->getTarifHoraire();
	
	function ajouterCommande($commande){
		$sql="insert into commande (num,categorie,type,sexe) values (:num,:categorie,:type,:sexe)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $num=$commande->getNum();
        $categorie=$commande->getCategorie();
        $type=$commande->getType();
        $sexe=$commande->getSexe();
		$req->bindValue(':num',$num);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':type',$type);
		$req->bindValue(':sexe',$sexe);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function ajouterCommandes($commande){
		$sql="insert into commande (idP,type,sexe,prix,qte) values (:idP,:type,:sexe,:prix,:qte)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idP=$commande->getIdP();
        $type=$commande->gettype();
        $sexe=$commande->getsexe();
        $prix=$commande->getprix();
        $qte=$commande->getqte();
		$req->bindValue(':idP',$idP);
		$req->bindValue(':type',$type);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':qte',$qte);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercommandes(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.num= a.num";
		$sql="SElECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercommande($num){
		$sql="DELETE FROM commande where num= :num";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':num',$num);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercommande($commande,$num){
		$sql="UPDATE commande SET num=:num, categorie=:categorie,type=:type,sexe=:sexe where num=:num";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$num=$commande->getNum();
        $categorie=$commande->getCategorie();
        $type=$commande->getType();
        $sexe=$commande->getSexe();
$datas = array( ':num'=>$num, ':categorie'=>$categorie,':type'=>$type,':sexe'=>$sexe);
	
		$req->bindValue(':num',$num);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':type',$type);
		$req->bindValue(':sexe',$sexe);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercommande($idP){
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
	
	function rechercherListecommandes($num){
		$sql="SELECT * from commande where num=$num";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

}
?>