<?php 
class database_surat{
 
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
		$data = mysqli_query($this->koneksi,"select * from tbl_surat");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
 
	function tambah_data($id_mhs, $id_pelapor,$id_bag_perpustakaan,$id_bag_keuangan,$id_dosen, $id_kajur, $nama_surat, $tgl_surat, $no_surat)
	{
		mysqli_query($this->koneksi,"insert into tbl_surat values (' ','$id_mhs', '$id_pelapor','$id_bag_perpustakaan','$id_bag_keuangan','$id_dosen', '$id_kajur', '$nama_surat', '$tgl_surat', '$no_surat')");
	}

	function get_by_id($id_surat)
	{
		$query = mysqli_query($this->koneksi,"select * from tbl_surat where id_surat='$id_surat'");
		return $query->fetch_array();
	}

	function update_data(
		$id_mhs, 
		$id_pelapor,
		$id_bag_perpustakaan,
		$id_bag_keuangan,
		$id_dosen, 
		$id_kajur, 
		$nama_surat, 
		$tgl_surat, 
		$no_surat,
		$id_surat)
	{
		$query = mysqli_query(
			$this->koneksi,
			"update tbl_surat set 
			id_mhs='$id_mhs', 
			id_pelapor='$id_pelapor',
			id_bag_perpustakaan='$id_bag_perpustakaan',
			id_bag_keuangan='$id_bag_keuangan',
			id_dosen = '$id_dosen',
			id_kajur = '$id_kajur', 
			nama_surat = '$nama_surat', 
			tgl_surat = '$tgl_surat', 
			no_surat = '$no_surat' 
			where id_surat='$id_surat'");
	}

	function delete_data($id_surat)
	{
		$query = mysqli_query($this->koneksi,"delete from tbl_surat where id_surat='$id_surat'");
	}
}
?>