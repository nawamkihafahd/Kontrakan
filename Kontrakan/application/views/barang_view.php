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
			<th>Nama</th>
			<th>Jumlah</th>
			<th>Penanggungjawab</th>
		<tr>
		<?php
            $i=1;
            foreach ($list_Barang as $d) {
        ?>
		<tr>
            <td><?=$d->B_ID;?></td>
			<td><?=$d->B_Nama;?></td>
            <td><?=$d->B_Jumlah;?></td>
            <td><?=$d->Penanggungjawab_ID;?></td>
			
        </tr>
        <?php } ?>
	</table>
</body>