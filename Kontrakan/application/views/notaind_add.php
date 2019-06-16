<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<table>
		<form action="<?php echo base_url(). 'NotaInd/addNotaInd'; ?>" method="post">
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
				<td>Penghuni</td>
				<td>
					<input type="text" name="penghuni">
				</td>
			</tr>
			<tr>
				<td>Nominal</td>
				<td><input type="text" name="nominal" ></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td><input type="text" name="tgl" ></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td><input type="text" name="kategori" ></td>
			</tr>
			<tr>
				<td>Penerima</td>
				<td><input type="text" name="penerima" ></td>
			</tr>
			<tr>
				<td>Periode</td>
				<td><input type="text" name="periode" ></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
		</form>	
	</table>
</body>