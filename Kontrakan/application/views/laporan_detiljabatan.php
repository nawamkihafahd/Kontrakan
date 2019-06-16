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
			<th>ID Penghuni</th>
			<th>Nama Penghuni</th>
			<th>Kamar</th>
			<th>Nomor Telepon</th>
			<th>Jabatan</th>
		<tr>
		<?php
            $i=1;
            foreach ($list_Barang as $d) {
        ?>
		<tr>
            <td><?=$d->{'Penghuni_ID'};?></td>
			<td><?=$d->{'Penghuni_Nama'};?></td>
			<td><?=$d->{'Kamar'};?></td>
			<td><?=$d->{'Nomor Telepon'};?></td>
			<td><?=$d->{'Jabatan'};?></td>
        </tr>
        <?php } ?>
	</table>
</body>