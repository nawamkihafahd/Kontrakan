<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<table>
		<form action="<?php echo base_url(). 'Notakomunal/addnk'; ?>" method="post">
		<table>
			<tr>
			</tr>
			<tr>
				<td>ID Nota</td>
				<td>
					<input type="text" name="idnota">
				</td>
			</tr>
			<tr>
				<td>ID Pembayar</td>
				<td>
					<input type="text" name="idpenghuni">
				</td>
			</tr>
			<tr>
				<td>ID Kategori</td>
				<td><input type="text" name="idkategori"></td>
			</tr>
			<tr>
				<td>ID Penerima</td>
				<td><input type="text" name="idpenerima"></td>
			</tr>
			<tr>
				<td>Nominal</td>
				<td><input type="text" name="nominal"></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td><input type="text" name="tgl"></td>
			</tr>
			<tr>
				<td>Periode</td>
				<td><input type="text" name="periode"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
		</form>	
	</table>
</body>