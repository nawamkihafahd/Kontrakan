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
		<tr>
		<?php
            $i=1;
            foreach ($list_Barang as $d) {
        ?>
		<tr>
            <td><?=$d->KKomunal_ID;?></td>
			<td><?=$d->KKomunal_Nama;?></td>
			
        </tr>
        <?php } ?>
	</table>
</body>