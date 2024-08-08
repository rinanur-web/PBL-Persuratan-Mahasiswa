<?php 	
include('koneksi.php');
$db = new database_surat();
$id_surat = $_GET['id'];
    if(! is_null($id_surat)){
        $surat = $db->get_by_id($id_surat);
    }else{
        header('location:tampil.php');
    }
include('../mahasiswa/koneksi.php');
$mahasiswa = new database_mahasiswa;
$data_mhs = $mahasiswa->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Data Surat</title>
</head>
<body>
	<h3>Update Data Surat</h3>
		<hr/>
			<form method="post" action="simpan.php?action=update">
				<input type="hidden" name="id_surat" value="<?php echo $surat['id_surat']; ?>"/>
					<table>
						<tr>
						<td>Id Mahasiswa</td>
							<td>:</td>
							<td><select name="id_mhs">
								<?php
								foreach ($data_mhs as $data_mahasiswa){
									echo '<option value="' . $data_mahasiswa['id_mhs'] . '"' . ($data_mahasiswa['id_mhs'] == $surat['id_mhs'] ? ' selected' : '') . '>' . $data_mahasiswa['nim'] . '</option>';							}
								?>
							</td>
						</tr>
						<tr>
							<td>Id Pelapor</td>
							<td>:</td>
							<td><input type="number" name="id_pelapor" value="<?php echo $surat['id_pelapor']; ?>"/></td>
						</tr>
						<tr>
							<td>Id Bag Perpustakaan</td>
							<td>:</td>
							<td><input type="number" name="id_bag_perpustakaan" value="<?php echo $surat['id_bag_perpustakaan']; ?>"/></td>
						</tr>
						<tr>
							<td>Id Bag Keuangan</td>
							<td>:</td>
							<td><input type="number" name="id_bag_keuangan" value="<?php echo $surat['id_bag_keuangan']; ?>"/></td>
						</tr>
						<tr>
							<td>Id Dosen</td>
							<td>:</td>
							<td><input type="number" name="id_dosen" value="<?php echo $surat['id_dosen']; ?>"/></td>
						</tr>
						<tr>
							<td>Id Kajur</td>
							<td>:</td>
							<td><input type="number" name="id_kajur" value="<?php echo $surat['id_kajur']; ?>"/></td>
						</tr>
						<tr>
							<td>Nama Surat</td>
							<td>:</td>
							<td><input type="text" name="nama_surat" value="<?php echo $surat['nama_surat']; ?>"/></td>
						</tr>
						<tr>
							<td>Tanggal Surat</td>
							<td>:</td>
							<td><input type="date" name="tgl_surat" value="<?php echo $surat['tgl_surat']; ?>"/></td>
						</tr>
						<tr>
							<td>No Surat</td>
							<td>:</td>
							<td><input type="number" name="no_surat" value="<?php echo $surat['no_surat']; ?>"/></td>
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