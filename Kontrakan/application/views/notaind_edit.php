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
            foreach ($list_NotaInd as $d) {
        ?>
		<form action="<?php echo base_url(). 'NotaInd/editNotaInd'; ?>" method="post">
		<table>
			<tr>
			</tr>
			<tr>
				<td>Penghuni</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $d->NI_ID ?>">
					<input type="text" name="penghuni" value="<?php echo $d->Penghuni_ID ?>">
				</td>
			</tr>
			<tr>
				<td>Nominal</td>
				<td><input type="number" name="nominal" value="<?php echo $d->NI_Nominal ?>"></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td><input type="date" name="tgl" value="<?php echo $d->NI_tanggal ?>"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td><input type="text" name="kategori" value="<?php echo $d->Kategori_ID ?>"></td>
			</tr>
			<tr>
				<td>Penerima</td>
				<td><input type="text" name="penerima" value="<?php echo $d->ID_Penerima ?>"></td>
			</tr>
			<tr>
				<td>Periode</td>
				<td><input type="text" name="periode" value="<?php echo $d->NI_Periode ?>"></td>
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