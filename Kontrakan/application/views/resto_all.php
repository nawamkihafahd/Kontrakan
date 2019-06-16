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
			<th>Nama Restoran</th>
			<th>Daerah Restoran</th>
			<th>Alamat Restoran</th>
			<th>Budget Minimum</th>
			<th>Budget Maksimum</th>
		<tr>
		<?php
            $i=1;
            foreach ($list_resto as $d) {
        ?>
		<tr>
            <td><?=$d->ID;?></td>
            <td><?=$d->Resto_Nama;?></td>
            <td><?=$d->Resto_Daerah;?></td>
			<td><?=$d->Resto_Alamat;?></td>
			<td><?=$d->Resto_Budget_Min;?></td>
			<td><?=$d->Resto_Budget_Max	;?></td>
        </tr>
        <?php } ?>
	</table>
</body>