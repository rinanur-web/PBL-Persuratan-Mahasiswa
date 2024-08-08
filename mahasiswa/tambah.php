<?php
include('../user/koneksi.php');
$user = new database_user;
$data_users = $user->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Tambah Data Mahasiswa</h3>
		<hr/>
			<form method="post" action="simpan.php?action=add" enctype="multipart/form-data">
				<table>
					<tr>
						<td>Id User</td>
						<td>:</td>
						<td><select name="id_user">
							<option value="">Pilih User</option>
							<?php
							foreach ($data_users as $data_user){
								echo '<option value="' . $data_user['id_user'] . '">' . $data_user['username'] . '</option>';
							}
							?>
						</td>
					</tr>
					<tr>
						<td>NIM</td>
						<td>:</td>
						<td><input type="number" name="nim"/></td>
					</tr>
					<tr>
						<td>Kelas Mahasiswa</td>
						<td>:</td>
						<td><input type="text" name="kelas_mhs"/></td>
					</tr>
					<tr>
						<td>Prodi Mahasiswa</td>
						<td>:</td>
						<td><input type="text" name="prodi_mhs"/></td>
					</tr>
					<tr>
						<td>TTD Mahasiswa</td>
						<td>:</td>
						<td><input type="file" name="ttd_mhs"/></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><input type="submit" name="tombol" value="Simpan"/></td>
					</tr>
				</table>
			</form>
</body>
</html>