<?php 
include('koneksi.php');
$koneksi = new database_mahasiswa();
 
$id = $_GET['action'];
if($id == "add")
{
	$ttd_mhs = $_FILES['ttd_mhs']['tmp_name'];
	$ttd_mhs_blob = addslashes(file_get_contents($ttd_mhs));

	$koneksi->tambah_data($_POST['id_user'], $_POST['nim'],$_POST['kelas_mhs'],$_POST['prodi_mhs'], $ttd_mhs_blob);
	header('location:tampil.php');
}
elseif($id=="update")
{
	if ($_FILES['ttd_mhs']['tmp_name']){
		$ttd_mhs = $_FILES['ttd_mhs']['tmp_name'];
		$ttd_mhs_blob = file_get_contents($ttd_mhs);
	}else{
		$ttd_mhs = $koneksi->get_by_id($_POST['id_mhs']);
		$ttd_mhs_blob = $ttd_mhs['ttd_mhs'];
	}

	$koneksi->update_data($_POST['id_user'], $_POST['nim'],$_POST['kelas_mhs'],$_POST['prodi_mhs'], $ttd_mhs_blob, $_POST['id_mhs']);
	header('location:tampil.php');
}
elseif($id=="delete")
{
	$id_mhs = $_GET['id'];
	$koneksi->delete_data($id_mhs);
	header('location:tampil.php');
}
?>