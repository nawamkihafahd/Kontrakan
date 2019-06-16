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
			<th>Penghuni ID</th>
			<th>Nominal</th>
			<th>Tanggal</th>
			<th>Kategori ID</th>
			<th>Penerima ID</th>
			<th>Periode</th>
		<tr>
		<?php
            $i=1;
            foreach ($list_NotaInd as $d) {
        ?>
		<tr>
            <td><?=$d->NI_ID;?></td>
			<td><?=$d->Penghuni_ID;?></td>
            <td><?=$d->NI_Nominal;?></td>
            <td><?=$d->NI_tanggal;?></td>
			<td><?=$d->Kategori_ID;?></td>
            <td><?=$d->ID_Penerima;?></td>
            <td><?=$d->NI_Periode;?></td>
        </tr>
        <?php } ?>
	</table>
</body>