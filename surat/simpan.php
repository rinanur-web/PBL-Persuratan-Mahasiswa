<?php 
include('koneksi.php');
$koneksi = new database_surat();
 
$id = $_GET['action'];
if($id == "add") 
{
	$koneksi->tambah_data($_POST['id_mhs'], $_POST['id_pelapor'],$_POST['id_bag_perpustakaan'],$_POST['id_bag_keuangan'],$_POST['id_dosen'],$_POST['id_kajur'],$_POST['nama_surat'],$_POST['tgl_surat'],$_POST['no_surat']);
	header('location:tampil.php');
}
elseif($id=="update") 
{
	$koneksi->update_data($_POST['id_mhs'], $_POST['id_pelapor'],$_POST['id_bag_perpustakaan'],$_POST['id_bag_keuangan'],$_POST['id_dosen'],$_POST['id_kajur'],$_POST['nama_surat'],$_POST['tgl_surat'],$_POST['no_surat'],$_POST['id_surat']);
	header('location:tampil.php');
}
elseif($id=="delete") 
{
	$id_surat = $_GET['id'];
	$koneksi->delete_data($id_surat);
	header('location:tampil.php');
}
?>