<?php 	
include('koneksi.php');
$db = new database_surat();
$surat = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <a href="../index.html">halaman utama</a> <br>
    <a href="tambah.php">Tambah Data Surat</a>
        <table border="1">
                <tr>
                    <th>No</th>
                    <th>Id Mahasiswa</th>
                    <th>Id Pelapor</th>
                    <th>Id Bag Perpustakaan</th>
                    <th>Id Bag Keuangan</th>
                    <th>Id Dosen</th>
                    <th>Id Kajur</th>
                    <th>Nama Surat</th>
                    <th>Tanggal Surat</th>
                    <th>No Surat</th>
                    <th>Aksi</th>
                </tr>
                <?php 
                $no = 1;
                foreach($surat as $row){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['nim']; ?></td>
                        <td><?php echo $row['id_pelapor']; ?></td>
                        <td><?php echo $row['id_bag_perpustakaan']; ?></td>
                        <td><?php echo $row['id_bag_keuangan']; ?></td>
                        <td><?php echo $row['id_dosen']; ?></td>
                        <td><?php echo $row['id_kajur']; ?></td>
                        <td><?php echo $row['nama_surat']; ?></td>
                        <td><?php echo $row['tgl_surat']; ?></td>
                        <td><?php echo $row['no_surat']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id_surat']; ?>">Update</a>
                            <a href="simpan.php?action=delete&id=<?php echo $row['id_surat']; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php 
                }
                ?>
        </table>
</body>
</html>