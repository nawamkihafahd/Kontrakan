<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<table>
		<form action="<?php echo base_url(). 'Penghuni/addpenghuni'; ?>" method="post">
		<table>
			<tr>
			</tr>
			<tr>
				<td>ID</td>
				<td>
					<input type="text" name="id">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="nama">
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="text" name="tgllahir"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jk"></td>
			</tr>
			<tr>
				<td>Kamar</td>
				<td><input type="text" name="kamar"></td>
			</tr>
			<tr>
				<td>NRP</td>
				<td><input type="text" name="nrp"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Nomor Telepon</td>
				<td><input type="text" name="nomortelepon"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
		</form>	
	</table>
</body>