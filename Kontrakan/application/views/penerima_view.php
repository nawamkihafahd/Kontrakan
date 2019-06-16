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
			<th>Status</th>
			<th>Jenis Kelamin</th>
		<tr>
		<?php
            $i=1;
            foreach ($list_Penerima as $d) {
        ?>
		<tr>
            <td><?=$d->Penerima_ID;?></td>
			<td><?=$d->Penerima_Nama;?></td>
            <td><?=$d->Penerima_Status;?></td>
            <td><?=$d->Penerima_JK;?></td>
        </tr>
        <?php } ?>
	</table>
</body>