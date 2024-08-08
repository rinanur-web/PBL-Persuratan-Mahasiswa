<?php 
include('koneksi.php');
$koneksi = new database_user();
 
$id = $_GET['action'];
if($id == "add")
{
	$koneksi->tambah_data($_POST['id_user'], $_POST['kode_role'],$_POST['username'],$_POST['email'],$_POST['password']);
	header('location:tampil.php');
}
elseif($id=="update")
{
	$koneksi->update_data($_POST['id_user'], $_POST['kode_role'],$_POST['username'],$_POST['email'],$_POST['password']);
	header('location:tampil.php');
}
elseif($id=="delete")
{
	$id_user = $_GET['id'];
	$koneksi->delete_data($id_user);
	header('location:tampil.php');
}
?>