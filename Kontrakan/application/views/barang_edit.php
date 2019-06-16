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
            foreach ($list_Barang as $d) {
        ?>
		<form action="<?php echo base_url(). 'Barang/editBarang'; ?>" method="post">
		<table>
			<tr>
			</tr>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $d->B_ID ?>">
					<input type="text" name="nama" value="<?php echo $d->B_Nama ?>">
				</td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="number" name="jml" value="<?php echo $d->B_Jumlah ?>"></td>
			</tr>
			<tr>
				<td>Penanggungjawab</td>
				<td><input type="text" name="idj" value="<?php echo $d->Penanggungjawab_ID ?>"></td>
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