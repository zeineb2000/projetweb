<?PHP
include "../config.php";
class RegistreC {
function afficherRegistre ($registre){
		echo "cin: ".$registre->getCin()."<br>";
		echo "nom: ".$registre->getNom()."<br>";
		echo "message: ".$registre->getmessage()."<br>";
		echo "mail: ".$registre->getMail()."<br>";
		echo "subject: ".$registre->getSubject()."<br>";
		

	}
	//function calculerSalaire($client){
	//	echo $client->getNbHeures() * $client->getTarifHoraire();
	
	function ajouterRegistre($registre){
		$sql="insert into registre (cin,nom,message,mail,subject) values (:cin,:nom,:message,:mail,:subject)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $cin=$registre->getCin();
        $nom=$registre->getNom();
        $message=$registre->getmessage();
        $mail=$registre->getMail();
        $subject=$registre->getSubject();
        
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':message',$message);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':subject',$subject);
		
			$req->execute();
         /* if(move_uploaded_file($_FILES['tmp_name']['name'], $target)) {
          	$msg="aaaa" ;
          }
          else{
          	$msg="laaa" ; 
          }*/
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherregistres(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.idC= a.idC";
		$sql="SElECT * From registre";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerregistre($cin){
		$sql="DELETE FROM registre where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierregistre($registre,$cin){
		$sql="UPDATE registre SET cin=:cin, nom=:nom,message=:message,mail=:mail,subject=:subject  WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cin=$registre->getCin();
        $nom=$registre->getNom();
        $message=$registre->getmessage();
        $mail=$registre->getMail();
        $subject=$registre->getSubject();

$datas = array( ':cin'=>$cin, ':nom'=>$nom,':message'=>$message,':mail'=>$mail,':subject'=>$subject);
	
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':message',$message);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':subject',$subject);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererregistre($cin){
		$sql="SELECT * from registre where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeregistres($cin){
		$sql="SELECT * from registre where cin=$cin";
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