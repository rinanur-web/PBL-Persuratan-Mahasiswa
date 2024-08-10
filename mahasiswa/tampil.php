<?php 	
include('koneksi.php');
$db = new database_mahasiswa();
$mahasiswa = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <a href="../index.html">halaman utama</a> <br>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
        <table border="1">
                <tr>
                    <th>No</th>
                    <th>Id Mahaasiswa</th>
                    <th>Id User</th>
                    <th>NIM</th>
                    <th>Kelas Mahasiswa</th>
                    <th>Prodi Mahasiswa</th>
                    <th>TTD Mahasiswa</th>
                    <th>Aksi</th>
                </tr>
                <?php 
                $no = 1;
                foreach($mahasiswa as $row){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['id_mhs']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['nim']; ?></td>
                        <td><?php echo $row['kelas_mhs']; ?></td>
                        <td><?php echo $row['prodi_mhs']; ?></td>
                        <td><img src="data:image/png;base64,<?php echo base64_encode($row['ttd_mhs']); ?>" width="100px"></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id_mhs']; ?>">Update</a>
                            <a href="simpan.php?action=delete&id=<?php echo $row['id_mhs']; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php 
                }
                ?>
        </table>
</body>
</html>