<?php 	
include('koneksi.php');
$db = new database_mahasiswa();
$id_mhs = $_GET['id'];
    if(! is_null($id_mhs)){
        $mahasiswa = $db->get_by_id($id_mhs);
    }else{
        header('location:tampil.php');
    }
include('../user/koneksi.php');
$user = new database_user;
$data_users = $user->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Data Mahasiswa</title>
</head>
<body>
	<h3>Update Data Mahasiswa</h3>
		<hr/>
			<form method="post" action="simpan.php?action=update" enctype="multipart/form-data">
				<input type="hidden" name="id_mhs" value="<?php echo $mahasiswa['id_mhs']; ?>"/>
					<table>
						<tr>
							<td>Id User</td>
							<td>:</td>
							<td><select name="id_user">
								<?php
								foreach ($data_users as $data_user){
									echo '<option value="' . $data_user['id_user'] . '"' . ($data_user['id_user'] == $mahasiswa['id_user'] ? ' selected' : '') . '>' . $data_user['username'] . '</option>';							}
								?>
							</td>
						</tr>
						<tr>
							<td>NIM</td>
							<td>:</td>
							<td><input type="number" name="nim" value="<?php echo $mahasiswa['nim']; ?>"/></td>
						</tr>
						<tr>
							<td>Kelas Mahasiswa</td>
							<td>:</td>
							<td><input type="text" name="kelas_mhs" value="<?php echo $mahasiswa['kelas_mhs']; ?>"/></td>
						</tr>
						<tr>
							<td>Prodi Mahasiswa</td>
							<td>:</td>
							<td><input type="text" name="prodi_mhs" value="<?php echo $mahasiswa['prodi_mhs']; ?>"/></td>
						</tr>
						<tr>
							<td>TTD Mahasiswa</td>
							<td>:</td>
							<td><input type="file" name="ttd_mhs"/></td>
							<td><img src="data:image/png;base64,<?php echo base64_encode($mahasiswa['ttd_mhs']); ?>" width="100px"></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><input type="submit" name="tombol" value="Update"/></td>
						</tr>
					</table>
			</form>
</body>
</html>