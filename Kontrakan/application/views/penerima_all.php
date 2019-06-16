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
			<th>Status</th>
			<th>Jenis Kelamin</th>
		<tr>
		<?php
            $i=1;
            foreach ($list_Penerima as $d) {
        ?>
		<tr>
            <td><?=$d->Penerima_ID;?></td>
			<td><?=$d->Penerima_Nama;?></td>
            <td><?=$d->Penerima_Status;?></td>
            <td><?=$d->Penerima_JK;?></td>
			<td><a href="<?php echo base_url(). 'Penerima/viewPenerima/'. $d->Penerima_ID; ?>">Lihat</a></td>
			<td><a href="<?php echo base_url(). 'Penerima/formeditPenerima/'. $d->Penerima_ID; ?>">Ubah</a></td>
			<td><a href="<?php echo base_url(). 'Penerima/deletePenerima/'. $d->Penerima_ID; ?>">Hapus</a></td>
        </tr>
        <?php } ?>
	</table>
</body>