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
			<th>Hutang Total</th>
		<tr>
		<?php
            $i=1;
            foreach ($list_Barang as $d) {
        ?>
		<tr>
            <td><?=$d->{'ID Penghuni'};?></td>
			<td><?=$d->{'Penghuni_Nama'};?></td>
			<td><?=$d->{'Hutang Total'};?></td>
        </tr>
        <?php } ?>
	</table>
</body>