<?PHP
include "../entities/reclamation.php";
include "../core/reclamationC.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['reclamation']) and isset($_POST['subject']))
{
$registre1=new Registre($_POST['cin'],$_POST['nom'],$_POST['reclamation'],$_POST['subject']);
//Partie2
/*
var_dump($registre1);
}
*/
//Partie3
$registre1C=new RegistreC();
$registre1C->ajouterRegistre($registre1);
header('Location: contact.html');
	
}else{
	echo "vérifier les champs";
}
//*/

?>

