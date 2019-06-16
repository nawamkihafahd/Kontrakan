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
			<th>Nominal</th>
		<tr>
		<?php
            $i=1;
            foreach ($list_KategoriInd as $d) {
        ?>
		<tr>
            <td><?=$d->Kategori_ID;?></td>
			<td><?=$d->Kategori_Nama;?></td>
            <td><?=$d->Kategori_Nominal;?></td>
        </tr>
        <?php } ?>
	</table>
</body>