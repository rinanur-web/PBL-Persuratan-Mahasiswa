<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Tambah Data Mahasiswa</h3>
		<hr/>
			<form method="post" action="simpan.php?action=add">
				<table>
					<tr>
						<td>Id User</td>
						<td>:</td>
						<td><input type="number" name="id_user"/></td>
					</tr>
					<tr>
						<td>Kode Role</td>
						<td>:</td>
						<td><input type="number" name="kode_role"/></td>
					</tr>
					<tr>
						<td>Username</td>
						<td>:</td>
						<td><input type="text" name="username"/></td>
					</tr>
					<tr>
						<td>email</td>
						<td>:</td>
						<td><input type="email" name="email"/></td>
					</tr>
					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input type="number" name="password"/></td>
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