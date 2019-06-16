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
			<th>ID Barang</th>
			<th>Nama Barang</th>
			<th>ID Penanggungjawab</th>
			<th>Nama Penanggungjawab</th>
			<th>Jumlah Barang</th>
		<tr>
		<?php
            $i=1;
            foreach ($list_Barang as $d) {
        ?>
		<tr>
            <td><?=$d->{'ID Barang'};?></td>
			<td><?=$d->{'Nama Barang'};?></td>
			<td><?=$d->{'ID Penanggungjawab'};?></td>
			<td><?=$d->{'Nama Penanggungjawab'};?></td>
			<td><?=$d->{'Jumlah Barang'};?></td>
        </tr>
        <?php } ?>
	</table>
</body>