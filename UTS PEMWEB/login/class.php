<?php
class Database {
	// properti
	private $dbHost="localhost";
	private $dbUser="root";
	private $dbPass="";
	private $dbName="laravel";
	
	// method koneksi mysql
	function connectMySQL() {
		mysql_connect($this->dbHost, $this->dbUser, $this->dbPass);
		mysql_select_db($this->dbName) or die ("Database Tidak Ditemukan di Server"); 
	}

}

class User {
// Proses Login
	function cek_login($name, $password) {
		$password = md5($password);
		$result = mysql_query("SELECT * FROM users WHERE unae='$name' AND password='$password'");
		$user_data = mysql_fetch_array($result);
		$no_rows = mysql_num_rows($result);
		if ($no_rows == 1) {
			$_SESSION['login'] = TRUE;
			$_SESSION['id'] = $user_data['id'];
			return TRUE;
		}
		else {
		  return FALSE;
		}
	}
	
	// Ambil Sesi 
	function get_sesi() {
		return $_SESSION['login'];
	}


	// Logout 
	function user_logout() {
		$_SESSION['login'] = FALSE;
		session_destroy();
	}

	// ambil nama
	function ambilNama($id)
	{
		$query = mysql_query("SELECT * FROM users WHERE id='$id'");
		$row = mysql_fetch_array($query);
		echo $row['name'];
	}

	// tampilkan data dari tabel users 
	function tampil_data(){
		$data=mysql_query("SELECT * FROM users");
		while($d=mysql_fetch_array($data)){
			$result[]=$d;
		}
		return $result;
	}

	// proses input data user
	function input_user($name,$pwd,$role){
		mysql_query("INSERT INTO users (name,password,role,email) VALUES ('$name','$pwd','$role')");
	}

	// tampilkan data dari tabel users yang akan di edit 
	function edit_user($id){
		$data=mysql_query("SELECT * FROM users WHERE id='$id'");
		while($x=mysql_fetch_array($data)){
			$hasil[]=$x;
		}
		return $hasil;
	}

	// proses update data user
	function update_user($id,$name,$pwd,$role){
		mysql_query("UPDATE users SET name ='$name',password='$pwd',role='$role' = WHERE id='$id'");
	}

	// proses delete data user
	function hapus_user($id){
		mysql_query("DELETE FROM users where id ='$id'");
	}
}



// Methode Paging

	
