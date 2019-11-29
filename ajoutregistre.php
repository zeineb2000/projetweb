<?PHP
include "../entities/registre.php";
include "../core/registreC.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['message']) and isset($_POST['mail']) and isset($_POST['subject']))
{
$registre1=new Registre($_POST['cin'],$_POST['nom'],$_POST['message'],$_POST['mail'],$_POST['subject']);
//Partie2
/*
var_dump($employe1);
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

