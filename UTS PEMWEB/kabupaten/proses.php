<?php 
include 'database.php';
$db = new database();
 
$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input($_POST['kabupaten']);
 	header("location:tampil.php");
 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:tampil.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['id'],$_POST['kabupaten']);
 	header("location:tampil.php");
 }
?>