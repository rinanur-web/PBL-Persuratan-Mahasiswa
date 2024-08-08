<?php 
class database_user{
 
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "pbl";
	var $koneksi = "";

	function __construct()
	{
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
 
	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from tbl_user");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
 
	function tambah_data($id_user,
	$kode_role ,$username,$email,$password)
	{
		mysqli_query($this->koneksi,"insert into tbl_user values (' ', '$kode_role ','$username','$email','$password')");
	}

	function get_by_id($id_user)
	{
		$query = mysqli_query($this->koneksi,"select * from tbl_user where id_user='$id_user'");
		return $query->fetch_array();
	}

	function update_data($kode_role ,$username,$email,$password)
	{
		$query = mysqli_query($this->koneksi,"update tbl_user set kode_role ='$kode_role ',username='$username',email='$email',password='$password' where id_user='$id_user'");
	}

	function delete_data($id_user)
	{
		$query = mysqli_query($this->koneksi,"delete from tbl_user where id_user='$id_user'");
	}
}
?>