<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<table>
		<?php
            foreach ($list_penghuni as $d) {
        ?>
		<form action="<?php echo base_url(). 'Penghuni/editpenghuni'; ?>" method="post">
		<table>
			<tr>
			</tr>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $d->Penghuni_ID ?>">
					<input type="text" name="nama" value="<?php echo $d->Penghuni_Nama ?>">
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="text" name="tgllahir" value="<?php echo $d->Penghuni_Tgllahir ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jk" value="<?php echo $d->Penghuni_JK ?>"></td>
			</tr>
			<tr>
				<td>Kamar</td>
				<td><input type="text" name="kamar" value="<?php echo $d->Penghuni_Kamar ?>"></td>
			</tr>
			<tr>
				<td>NRP</td>
				<td><input type="text" name="nrp" value="<?php echo $d->Penghuni_NRP ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $d->Penghuni_Alamat ?>"></td>
			</tr>
			<tr>
				<td>Nomor Telepon</td>
				<td><input type="text" name="nomortelepon" value="<?php echo $d->Penghuni_NoTelp ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
		</form>	
        <?php } ?>
	</table>
</body>