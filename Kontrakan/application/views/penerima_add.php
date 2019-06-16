<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<table>
		<form action="<?php echo base_url(). 'Penerima/addPenerima'; ?>" method="post">
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
				<td>Status</td>
				<td><input type="text" name="status"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jk"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
		</form>	
	</table>
</body>