<?PHP
include "../core/registreC.php";
$registre1C=new RegistreC();
$listeregistres=$registre1C->afficherregistres();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>cin</td>
<td>nom</td>
<td>message</td>
<td>mail</td>
<td>subject</td>


</tr>

<?PHP
foreach($listeregistres as $row){
	?>
	<tr>
	<td><?PHP echo $row['cin']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['message']; ?></td>
	<td><?PHP echo $row['mail']; ?></td>
	<td><?PHP echo $row['subject']; ?></td>

	
	<td><form method="POST" action="supprimerclient.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
	</form>
	</td>
	<td><a href="modifierregistre.php?cin=<?PHP echo $row['cin']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>

