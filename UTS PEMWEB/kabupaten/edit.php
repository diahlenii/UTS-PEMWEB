<?php 
include 'database.php';
$db = new database();
?>
 

<h3>Edit Data Kabupaten</h3>
 
<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){
?>
<table>
	<tr>
		<td>Nama Kabupaten</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="kabupaten" value="<?php echo $d['kabupaten'] ?>">
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>