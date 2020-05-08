<?php 
class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "laravel";
	var $con = "";
	function __construct(){
		$this->con = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	function tampil_data()
	{
		$data = mysqli_query($this->con,"select * from kabupatens");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function input($kabupaten)
	{
		mysqli_query($this->con,"insert into kabupatens values ('','$kabupaten')");
	}
	function hapus($id){
		mysql_query($this->con,"delete from kabupatens where id ='$id'");
	}
	function edit($id){
		$data = mysql_query($this->con,"select * from kabupatens where id ='$id'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
 
	function update($id,$kabupaten){
		mysql_query("update kabupatens set kabupaten ='$kabupaten' where id ='$id'");
	}
	
 
} 

?>