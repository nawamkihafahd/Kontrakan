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
			<th>Periode</th>
			<th>ID Kategori</th>
			<th>Hutang</th>
		<tr>
		<?php
            $i=1;
            foreach ($list_Barang as $d) {
        ?>
		<tr>
            <td><?=$d->{'ID Penghuni'};?></td>
			<td><?=$d->{'Periode'};?></td>
			<td><?=$d->{'ID Kategori'};?></td>
			<td><?=$d->{'Hutang'};?></td>
        </tr>
        <?php } ?>
	</table>
</body>