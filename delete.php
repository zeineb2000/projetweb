<?PHP
include "../core/livraisonCrud.php";

$livraison1C=new  livraisonCrud();
if (isset($_POST["id"])){
	$livraison1C->supprimerlivraison($_POST["id"]);
	header('Location:afficherLivraison.php');
}

?>