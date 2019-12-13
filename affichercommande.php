<?PHP
include "../core/commandesC.php";
$commande1C=new commandeC();
$listecommandes=$commande1C->affichercommandes();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>idC</td>
<td>idP</td>
<td>Type</td>
<td>Sexe</td>
<td>Prix</td>
<td>qte</td>
</tr>

<?PHP
foreach($listecommandes as $row){
	?>
	<tr>
	<td><?PHP echo $row['idC']; ?></td>
	<td><?PHP echo $row['idP']; ?></td>
	<td><?PHP echo $row['type']; ?></td>
    <td><?PHP echo $row['sexe']; ?></td>
    <td><?PHP echo $row['prix']; ?></td>
    <td><?PHP echo $row['qte']; ?></td>
	<td><form method="POST" action="supprimercommande.php">
	</form>
	</td>
	</tr>
	<?PHP
}
?>
</table>