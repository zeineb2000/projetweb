<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/registre.php";
include "../core/registreC.php";
if (isset($_GET['cin'])){
	$registreC=new registreC();
    $result=$registreC->recupererregistre($_GET['cin']);
	foreach($result as $row){
		$cin=$row['cin'];
		$nom=$row['nom'];
		$message=$row['message'];
		$mail=$row['mail'];
		$subject=$row['subject'];
		
?>
<form method="POST">
<table>
<caption>Modifier registre</caption>
<tr>
<td>cin</td>
<td><input type="number" name="cin" value="<?PHP echo $cin ?>"></td>
</tr>
<tr>
<td>nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>prenom</td>
<td><input type="text" name="message" value="<?PHP echo $message ?>"></td>
</tr>
<tr>
<td>mail</td>
<td><input type="text" name="mail" value="<?PHP echo $mail ?>"></td>
</tr>
<tr>
<td>pass</td>
<td><input type="text" name="subject" value="<?PHP echo $subject ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$registre=new registre($_POST['cin'],$_POST['nom'],$_POST['message'],$_POST['mail'],$_POST['subject']);
	$registreC->modifierregistre($registre,$_POST['cin_ini']);
	echo $_POST['cin'];
	header('Location: afficherregistre.php');
}
?>
</body>
</HTMl>

