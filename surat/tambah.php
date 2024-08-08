<?php
include('../mahasiswa/koneksi.php');
$mahasiswa = new database_mahasiswa;
$data_mhs = $mahasiswa->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Tambah Data Surat</h3>
		<hr/>
			<form method="post" action="simpan.php?action=add">
				<table>
					<tr>
					<td>Id Mahasiswa</td>
						<td>:</td>
						<td><select name="id_mhs">
							<option value="">Pilih Id Mahasiswa</option>
							<?php
							foreach ($data_mhs as $data_mahasiswa){
								echo '<option value="' . $data_mahasiswa['id_mhs'] . '">' . $data_mahasiswa['nim'] . '</option>';
							}
							?>
						</td>
					</tr>
					<tr>
						<td>Id Pelapor</td>
						<td>:</td>
						<td><input type="number" name="id_pelapor"/></td>
					</tr>
					<tr>
						<td>Id Bag Perpustakaan</td>
						<td>:</td>
						<td><input type="number" name="id_bag_perpustakaan"/></td>
					</tr>
					<tr>
						<td>Id Bag Keuangan</td>
						<td>:</td>
						<td><input type="number" name="id_bag_keuangan"/></td>
					</tr>
					<tr>
						<td>Id Dosen</td>
						<td>:</td>
						<td><input type="number" name="id_dosen"/></td>
					</tr>
					<tr>
						<td>Id Kajur</td>
						<td>:</td>
						<td><input type="number" name="id_kajur"/></td>
					</tr>
					<tr>
						<td>Nama Surat</td>
						<td>:</td>
						<td><input type="text" name="nama_surat"/></td>
					</tr>
					<tr>
						<td>Tanggal Surat</td>
						<td>:</td>
						<td><input type="date" name="tgl_surat"/></td>
					</tr>
					<tr>
						<td>No Surat</td>
						<td>:</td>
						<td><input type="number" name="no_surat"/></td>
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