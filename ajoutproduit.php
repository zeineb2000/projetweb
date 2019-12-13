<?PHP
include "../entities/produit.php";
include "../core/produitC.php";

if (isset($_POST['idP']) and isset($_POST['age']) and isset($_POST['type']) and isset($_POST['sexe']) and isset($_POST['pets']) 
	and isset($_POST['petsrace']) and isset($_POST['prix']) and isset($_FILES['uploadedfile']))
{
$produit1=new Produit($_POST['idP'],$_POST['age'],$_POST['type'],$_POST['sexe'],$_POST['pets'],$_POST['petsrace'],$_POST['prix'],$_FILES['uploadedfile']['name'],$_POST['idc']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$target_path = "uploads/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}

$produit1C=new ProduitC();
$produit1C->ajouterProduit($produit1);
header('Location: affproduit.php');
	
}else{
	echo "vérifier les champs";
}
//*/


?>

