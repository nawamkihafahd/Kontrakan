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
            foreach ($list_Penerima as $d) {
        ?>
		<form action="<?php echo base_url(). 'Penerima/editPenerima'; ?>" method="post">
		<table>
			<tr>
			</tr>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $d->Penerima_ID ?>">
					<input type="text" name="nama" value="<?php echo $d->Penerima_Nama ?>">
				</td>
			</tr>
			<tr>
				<td>Status</td>
				<td><input type="text" name="status" value="<?php echo $d->Penerima_Status ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jk" value="<?php echo $d->Penerima_JK ?>"></td>
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