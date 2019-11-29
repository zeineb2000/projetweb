<?PHP
include "../core/registreC.php";
$registreC=new RegistreC();
if (isset($_POST["cin"])){
	$registreC->supprimerreclamation($_POST["cin"]);
	header('Location: afficherreclamation.php');
}

?>