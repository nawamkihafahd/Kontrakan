<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<table>
		<tr>
			<th>ID Nota</th>
			<th>Nama Pembayar</th>
			<th>Kategori</th>
			<th>Nama Penerima</th>
			<th>Nominal</th>
			<th>Tanggal</th>
			<th>Periode</th>
		<tr>
		<?php
            $i=1;
            foreach ($list_nota as $d) {
        ?>
		<tr>
            <td><?=$d->NK_ID;?></td>
			<td><?=$d->Penghuni_Nama;?></td>
            <td><?=$d->KKomunal_Nama;?></td>
            <td><?=$d->Penerima_Nama;?></td>
			<td><?=$d->NK_Nominal;?></td>
			<td><?=$d->NK_Tgl;?></td>
			<td><?=$d->NK_Periode;?></td>
			<td><a href="<?php echo base_url(). 'Notakomunal/viewnk/'. $d->NK_ID; ?>">Lihat</a></td>
        </tr>
        <?php } ?>
	</table>
</body>