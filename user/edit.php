<?php 	
include('koneksi.php');
$db = new database_user();
$id_user = $_GET['id'];
    if(! is_null($id_user)){
        $user = $db->get_by_id($id_user);
    }else{
        header('location:tampil.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Data User</title>
</head>
<body>
	<h3>Update Data User</h3>
		<hr/>
			<form method="post" action="simpan.php?action=update">
				<input type="hidden" name="id_user" value="<?php echo $user['id_user']; ?>"/>
					<table>
						<tr>
							<td>Id User</td>
							<td>:</td>
							<td><input type="number" name="id_user" value="<?php echo $user['id_user']; ?>"/></td>
						</tr>
						<tr>
							<td>Kode Role</td>
							<td>:</td>
							<td><input type="number" name="kode_role" value="<?php echo $user['kode_role']; ?>"/></td>
						</tr>
						<tr>
							<td>Username</td>
							<td>:</td>
							<td><input type="text" name="username" value="<?php echo $user['username']; ?>"/></td>
						</tr>
						<tr>
							<td>Email</td>
							<td>:</td>
							<td><input type="email" name="email" value="<?php echo $user['email']; ?>"/></td>
						</tr>
						<tr>
							<td>Password</td>
							<td>:</td>
							<td><input type="text" name="password" value="<?php echo $user['password']; ?>"/></td>
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