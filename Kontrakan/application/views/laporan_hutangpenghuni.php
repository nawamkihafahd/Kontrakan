<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


	<!-- Bootstrap core CSS-->
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

	<!-- Page level plugin CSS-->
	<link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?php echo base_url('css/sb-admin.css') ?>" rel="stylesheet">

	
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url() ?>">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('Penghuni') ?>">Penghuni</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('Penerima') ?>">Penerima</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('KategoriInd') ?>">Kategori Individu</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('Kategorikomunal') ?>">Kategori Komunal</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('NotaInd') ?>">Nota Individu</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('Notakomunal') ?>">Nota Komunal</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('Barang') ?>">Barang</a>
			</li>
		</ul>
	</nav>
	<div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-body">
	<table class="table table-striped table-dark">
		<tr>
			<th>ID Penghuni</th>
			<th>Periode</th>
			<th>ID Kategori</th>
			<th>Hutang</th>
		<tr>
		<?php
            $i=1;
            foreach ($list_Barang as $d) {
        ?>
		<tr>
            <td><?=$d->{'ID Penghuni'};?></td>
			<td><?=$d->{'Periode'};?></td>
			<td><?=$d->{'ID Kategori'};?></td>
			<td><?=$d->{'Hutang'};?></td>
        </tr>
        <?php } ?>
	</table>
	</div>
    </div>
  </div>
</body>