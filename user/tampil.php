<?php 	
include('koneksi.php');
$db = new database_user();
$user = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
        <table border="1">
                <tr>
                    <th>No</th>
                    <th>Id User</th>
                    <th>Kode Role</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
                <?php 
                $no = 1;
                foreach($user as $row){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['id_user']; ?></td>
                        <td><?php echo $row['kode_role']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id_user']; ?>">Update</a>
                            <a href="simpan.php?action=delete&id=<?php echo $row['id_user']; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php 
                }
                ?>
        </table>
</body>
</html>