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
			<th>ID Penerima</th>
			<th>Nama Penerima</th>
			<th>Uang yang diterima</th>
		<tr>
		<?php
            $i=1;
            foreach ($list_Barang as $d) {
        ?>
		<tr>
            <td><?=$d->{'ID Penerima'};?></td>
			<td><?=$d->{'Nama Penerima'};?></td>
			<td><?=$d->{'Uang yang diterima'};?></td>
        </tr>
        <?php } ?>
	</table>
</body>