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
			<th>Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
			<th>Kamar</th>
			<th>NRP</th>
			<th>Alamat</th>
			<th>Nomor Telepon</th>
		<tr>
		<?php
            $i=1;
            foreach ($list_penghuni as $d) {
        ?>
		<tr>
            <td><?=$d->Penghuni_ID;?></td>
			<td><?=$d->Penghuni_Nama;?></td>
            <td><?=$d->Penghuni_Tgllahir;?></td>
            <td><?=$d->Penghuni_JK;?></td>
			<td><?=$d->Penghuni_Kamar;?></td>
			<td><?=$d->Penghuni_NRP;?></td>
			<td><?=$d->Penghuni_Alamat;?></td>
			<td><?=$d->Penghuni_NoTelp;?></td>
			<td><a href="<?php echo base_url(). 'Penghuni/viewpenghuni/'. $d->Penghuni_ID; ?>">Lihat</a></td>
			<td><a href="<?php echo base_url(). 'Penghuni/formeditpenghuni/'. $d->Penghuni_ID; ?>">Ubah</a></td>
			<td><a href="<?php echo base_url(). 'Penghuni/deletepenghuni/'. $d->Penghuni_ID; ?>">Hapus</a></td>
        </tr>
        <?php } ?>
	</table>
</body>