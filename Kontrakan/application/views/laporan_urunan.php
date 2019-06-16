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
			<th>Uang yang dibayarkan</th>
		<tr>
		<?php
            $i=1;
            foreach ($list_Barang as $d) {
        ?>
		<tr>
            <td><?=$d->{'ID Penghuni'};?></td>
			<td><?=$d->{'Nama Penghuni'};?></td>
			<td><?=$d->{'Uang yang dibayarkan'};?></td>
        </tr>
        <?php } ?>
	</table>
</body>