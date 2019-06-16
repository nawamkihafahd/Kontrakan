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
			<th>Periode</th>
			<th>Pengeluaran</th>
		<tr>
		<?php
            $i=1;
            foreach ($list_Barang as $d) {
        ?>
		<tr>
            <td><?=$d->{'Periode'};?></td>
			<td><?=$d->{'Pengeluaran'};?></td>
        </tr>
        <?php } ?>
	</table>
</body>