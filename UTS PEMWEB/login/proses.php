<?php
session_start();
include_once 'class.php';

// instance objek db dan user
$user = new User();
$db = new Database();
// koneksi ke MySQL via method
$db->connectMySQL();



$page = $_GET['page'];
// ############################################ MODULE USER ############################################################
// ## USER-LOGIN
if($page == "login"){

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $login=$user->cek_login($_POST['name'], $_POST['password']);
  if($login) {
    // login sukses, arahkan ke file master.php
    header("location:../users");
  }
  else {
  // login gagal, beri peringatan dan kembali ke file index.php
header("location:../login_error.php"); 
  }
}
}

// ## USER-INPUT
elseif($page == "input-user"){
$password=md5($_POST['pwd']);
$user->input_user($_POST['name'],$password,$_POST['role']);
 	header("location:../users");
}

// ## USER-UPDATE
elseif($page == "update-user"){
$password=md5($_POST['pwd']);
$user->update_user($_POST['id'],$_POST['name'],$password,$_POST['role']);
 	header("location:../users");
}


// ## USER-DELETE
elseif($page == "hapus-user"){
$user->hapus_user($_GET['id']);
 	header("location:../users");
}

?>