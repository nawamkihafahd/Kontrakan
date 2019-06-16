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
			<th>ID</th>
			<th>Nama</th>
			<th>Jumlah</th>
			<th>Penanggung Jawab</th>
		<tr>
		<?php
            $i=1;
            foreach ($list_Barang as $d) {
        ?>
		<tr>
            <td><?=$d->B_ID;?></td>
			<td><?=$d->B_Nama;?></td>
            <td><?=$d->B_Jumlah;?></td>
            <td><?=$d->Penanggungjawab_ID;?></td>
			<td><a href="<?php echo base_url(). 'Barang/viewBarang/'. $d->B_ID; ?>">Lihat</a></td>
			<td><a href="<?php echo base_url(). 'Barang/formeditBarang/'. $d->B_ID; ?>">Ubah</a></td>
			<td><a href="<?php echo base_url(). 'Barang/deleteBarang/'. $d->B_ID; ?>">Hapus</a></td>
        </tr>
        <?php } ?>
	</table>
</body>