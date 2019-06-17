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
    <div class="card card-register">
      <div class="card-body">
	<table class="table table-striped table-dark">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
			<th>Kamar</th>
			<th>NRP</th>
			<th>Alamat</th>
			<th>Nomor Telepon</th>
		<tr>
		<?php
            $i=1;
            foreach ($list_penghuni as $d) {
        ?>
		<tr>
            <td><?=$d->Penghuni_ID;?></td>
			<td><?=$d->Penghuni_Nama;?></td>
            <td><?=$d->Penghuni_Tgllahir;?></td>
            <td><?=$d->Penghuni_JK;?></td>
			<td><?=$d->Penghuni_Kamar;?></td>
			<td><?=$d->Penghuni_NRP;?></td>
			<td><?=$d->Penghuni_Alamat;?></td>
			<td><?=$d->Penghuni_NoTelp;?></td>
			<td><a href="<?php echo base_url(). 'Penghuni/viewpenghuni/'. $d->Penghuni_ID; ?>">Lihat</a></td>
			<td><a href="<?php echo base_url(). 'Penghuni/formeditpenghuni/'. $d->Penghuni_ID; ?>">Ubah</a></td>
			<td><a href="<?php echo base_url(). 'Penghuni/deletepenghuni/'. $d->Penghuni_ID; ?>">Hapus</a></td>
        </tr>
        <?php } ?>
	</table>
	</div>
    </div>
  </div>
</body>