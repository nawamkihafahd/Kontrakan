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
            foreach ($list_KategoriInd as $d) {
        ?>
		<form action="<?php echo base_url(). 'KategoriInd/editKategoriInd'; ?>" method="post">
		<table>
			<tr>
			</tr>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $d->Kategori_ID ?>">
					<input type="text" name="nama" value="<?php echo $d->Kategori_Nama ?>">
				</td>
			</tr>
			<tr>
				<td>Nominal</td>
				<td><input type="number" name="nmnl" value="<?php echo $d->Kategori_Nominal ?>"></td>
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