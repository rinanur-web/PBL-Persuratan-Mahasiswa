<?php 
class database_mahasiswa{
 
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
		$data = mysqli_query($this->koneksi,"select * from tbl_mahasiswa");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
 
	function tambah_data($id_user,$nim,$kelas_mhs,$prodi_mhs,$ttd_mhs)
	{
		mysqli_query($this->koneksi,"insert into tbl_mahasiswa values (' ','$id_user', '$nim','$kelas_mhs','$prodi_mhs','$ttd_mhs')");
	}

	function get_by_id($id_mhs)
	{
		$query = mysqli_query($this->koneksi,"select * from tbl_mahasiswa where id_mhs='$id_mhs'");
		return $query->fetch_array();
	}

	function update_data($id_user,$nim,$kelas_mhs,$prodi_mhs,$ttd_mhs, $id_mhs)
	{
		$ttd_mhs = mysqli_real_escape_string($this->koneksi, $ttd_mhs);

		$query = mysqli_query($this->koneksi,"update tbl_mahasiswa set id_user='$id_user',nim='$nim',kelas_mhs='$kelas_mhs',prodi_mhs='$prodi_mhs',ttd_mhs='$ttd_mhs' where id_mhs='$id_mhs'");
	}

	function delete_data($id_mhs) 
	{
		$query = mysqli_query($this->koneksi,"delete from tbl_mahasiswa where id_mhs='$id_mhs'");
	}
}
?>