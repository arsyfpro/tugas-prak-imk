<?php
require 'functions.php';

//pagination
//konfigurasi
$jumlahDataPerHalaman = 10;
$jumlahData = count(query("SELECT * FROM barang "));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$barang = query("SELECT * FROM barang ORDER BY id ASC LIMIT $awalData, $jumlahDataPerHalaman");

//tombol cari di klik
if (isset($_POST["cari"])) {
	$barang = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 <link rel="stylesheet" type="text/css" href="table.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>


 <title> Honey Lure Beauty Shop </title>
</head>
<body>

	<nav class="navbar navbar-light" justify-content-between style="background-color:#DB7093;" >
  <a class="navbar-brand font-size: 50px;">Honey Lure</a>
  <form action="" method="post" class="form-inline">
    <input  type="text" name="keyword" autofocus placeholder="Masukkan keyword pencarian.." autocomplete="off" class="form-control mr-sm-4"
     aria-label="Search">
    <button  type="submit" name="cari" class="btn btn-outline-warning my-2 my-sm-0">Search</button>
  </form>
</nav>



<div class="container-lg">
	<div class="table-responsive">
			<div class="table-title">
				<div class="row align-middle">
					<div class="col-md-6">
						<h2 class="justify-content-center">Daftar Stok Barang</h2> <br> </div>
					<div class="col-md-6">
						<a href="tambah.php" class="btn btn-danger"> <span>Tambah data barang</span></a>						
					</div>
				</div>
			</div>


		<div class="text-center justify-content-center">
		<table class="table table-striped table-bordered table-hover">
		<thead class="thead-light">
<tr>
	<th >No.</th>
	<th>Jenis Barang</th>
	<th>Nama Barang</th>
	<th>Merek Barang</th>
	<th>Jumlah</th>
	<th>Harga</th>
	<th>Aksi</th>
</tr>
		</thead>
		
 <?php $i = $awalData + 1; ?>
<?php foreach ( $barang as $row) :?>  
<tr>
		<td><?=$i; ?></td>
	<td><?= $row["jenis_barang"]; ?></td>
	<td><?= $row["nama_barang"];?></td>
	<td><?= $row["merk_barang"];?></td>
	<td><?= $row["jumlah_barang"];?></td>
	<td><?= $row["harga_barang"]; ?></td> 
	<td>
		<a href="edit.php?id=<?= $row["id"]; ?>"><i class="material-icons"title="Edit">&#xE254;</i></a></a> | 
		<a href="delete.php?id=<?= $row["id"];?>" onclick="return confirm('Apakah Anda Yakin?');"><i class="material-icons" title="hapus">&#xE872;</i></a></a>
	</td>
</tr>

<?php $i++;?>
<?php endforeach; ?>


</table>
<!--navigasi-->
    <ul class="pagination justify-content-center">

<?php for( $i = 1; $i <= $jumlahHalaman; $i++ ) : ?>
	<li class="page-item"><a class="page-link" href="?halaman=<?= $i;?>"><?= $i; ?></a></li>
 
<?php endfor; ?>
</ul>

</div>
	</div>
	</div>
</div>
</body>
</html>
