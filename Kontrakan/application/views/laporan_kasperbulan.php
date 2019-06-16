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
			<th>Periode Pemasukan Kas</th>
			<th>Jumlah Pemasukan Kas</th>
			<th>Jumlah Pengeluaran</th>
			<th>Surplus</th>
		<tr>
		<?php
            $i=1;
            foreach ($list_Barang as $d) {
        ?>
		<tr>
            <td><?=$d->{'Periode Pemasukan Kas'};?></td>
			<td><?=$d->{'Jumlah Pemasukan Kas'};?></td>
			<td><?=$d->{'Jumlah Pengeluaran'};?></td>
			<td><?=$d->{'Pemasukan - Pengeluaran'};?></td>
        </tr>
        <?php } ?>
	</table>
</body>