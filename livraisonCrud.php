
<?PHP


class livraisonCrud {

	function ajouterlivraison($livraison){
		$sql="insert into livraison (adresse,ville,region,telephone,email,status,commentaire,iduser) values (:adresse,:ville,:region,:telephone,:email,:status,:commentaire,:iduser)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$iduser=$livraison->getiduser();
        $adresse=$livraison->getadresse();
        $ville=$livraison->getville();
        $region=$livraison->getregion();
        $telephone=$livraison->gettelephone();
        $email=$livraison->getemail();
        $status="En cours";
        $commentaire=$livraison->getcommentaire();
        
		
        $req->bindValue(':adresse',$adresse);
        $req->bindValue(':ville',$ville);
        $req->bindValue(':region',$region);
        $req->bindValue(':telephone',$telephone);
		$req->bindValue(':email',$email);
		$req->bindValue(':status',$status);
        $req->bindValue(':commentaire',$commentaire);
                $req->bindValue(':iduser',$iduser);

        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
    }
    function afficherlivraison()
    {
        $sql="SElECT * From livraison";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

    }

    function supprimerlivraison($id)
    {
        $sql="DELETE FROM livraison where id= :id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
            // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

  function recupererlivraison($id)

    {
        $sql="SELECT * from livraison where id=$id";
        $db = config::getConnexion();
        
        try
        {
        $liste=$db->query($sql);
        $liste->execute();
        return $liste;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function recupereriduser(){
        $sql="SELECT * from user";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

function recupererhistorique()
    {
        $sql="SELECT * from historiquelivraison";
        $db = config::getConnexion();
        
        try
        {
        $liste=$db->query($sql);
        $liste->execute();
        return $liste;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

function modifierlivraison($livraison,$id){
        $sql="UPDATE livraison SET  status=:status where id=:id";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        
        $status=$livraison->getstatus();
       
        
        $datas = array( ':status'=>$status);
        
        $req->bindValue(':id',$id);
        $req->bindValue(':status',$status);
        
        
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
       
        
    }
    function ajouterhistorique($livraison)
    {
        $sql="insert into historiquelivraison (adresse,ville,region,telephone,email,status,commentaire) values (:adresse,:ville,:region,:telephone,:email,:status,:commentaire)";
        $db = config::getConnexion();
        
        try
        {
       
       $req=$db->prepare($sql);
       
        $adresse=$livraison->getadresse();
        $ville=$livraison->getville();
        $region=$livraison->getregion();
        $telephone=$livraison->gettelephone();
        $email=$livraison->getemail();
        $status="En cours";
        $commentaire=$livraison->getcommentaire();
        
        
        $req->bindValue(':adresse',$adresse);
        $req->bindValue(':ville',$ville);
        $req->bindValue(':region',$region);
        $req->bindValue(':telephone',$telephone);
        $req->bindValue(':email',$email);
        $req->bindValue(':status',$status);
        $req->bindValue(':commentaire',$commentaire);
              
        $req->execute();
           
        }

        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }

    }
    function supprimercommande($id)
    {
        $sql="DELETE FROM livraison where id= :id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
function trier(){
        $sql="SELECT * from livraison order by date desc";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function getAlllivraisons($keywords){
        $sql="SELECT * FROM livraison WHERE CONCAT(`id`,`adresse`,`ville`,`region`,`telephone`,`email`,`status`,`date`,`commentaire`,`iduser`) LIKE '%".$keywords."%'";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

function recupererlivraison1()
    {
        $sql="SELECT * from livraison";
        $db = config::getConnexion();
        
        try
        {
        $liste=$db->query($sql);
        $liste->execute();
        return $liste;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }


}
?>