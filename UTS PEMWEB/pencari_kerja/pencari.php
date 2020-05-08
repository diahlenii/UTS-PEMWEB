<?php 
include 'koneksi.php';
$db = new database();
?>
<h1>CRUD OOP PHP</h1>
<h3>Data Pencari Kerja</h3>
 
<a href="input.php">Input Data</a>
<table border="1">
	<tr>
        <th>No</th>
		<th>Nama Depan</th>
        <th>Nama Belakang</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Agama</th>
		<th>Opsi</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['fname']; ?></td>
        <td><?php echo $x['lname']; ?></td>
        <td><?php echo $x['jenis_kelamin']; ?></td>
        <td><?php echo $x['tempat_lahir']; ?></td>
        <td><?php echo $x['tanggal_lahir']; ?></td>
        <td><?php echo $x['agama']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
			<a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
</table>