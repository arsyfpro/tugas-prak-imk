<?php
require 'functions.php';

//ambil data di url
$id = $_GET["id"];

$barang = query("SELECT * FROM barang WHERE id =$id")[0];

if( isset($_POST["submit"])) {
	
	//cek apakah data berhasil diubah
	if( edit($_POST) > 0 ) {
		echo " 
			<script>
				alert('data berhasil diedit!');
				document.location.href ='index.php';
			</script> 
		";
	} else {
		echo "
				<script>
				alert('data gagal diedit!');
				document.location.href ='index.php';
			</script> 
			";
	}
}

?>

<!DOCTYPE html >
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>Edit data barang</title>
</head>
<body>

	<h3 class="alert alert-danger text-center mt-3"> Edit data barang</h3>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $barang ["id"];?>">
		<div class="form-group row justify-content-center">
		<label for="jenis" class="col-sm-2 col-form-label">Jenis Barang</label>
		<div class="col-sm-6">
			<input type="text" name="jenis_barang" id="jenis" class="form-control" required value="<?= $barang ["jenis_barang"];?>">
		</div>
	</div>

		<div class="form-group row justify-content-center">
		<label for="nama" class="col-sm-2 col-form-label">Nama Barang</label>
		<div class="col-sm-6">
			<input type="text" name="nama_barang" id="nama" class="form-control" required value="<?= $barang ["nama_barang"];?>">
		</div>
	</div>

	<div class="form-group row justify-content-center">
		<label for="merk" class="col-sm-2 col-form-label">Merk Barang</label>
		<div class="col-sm-6">
			<input type="text" name="merk_barang" id="merk" class="form-control" required value="<?= $barang ["merk_barang"];?>">
		</div>
	</div>

	<div class="form-group row justify-content-center">
		<label for="jumlah" class="col-sm-2 col-form-label">Jumlah Barang</label>
		<div class="col-sm-6">
			<input type="text" name="jumlah_barang" id="jumlah" class="form-control" required value="<?= $barang ["jumlah_barang"];?>">
		</div>
	</div>

	<div class="form-group row justify-content-center">
		<label for="harga" class="col-sm-2 col-form-label">Harga Barang</label>
		<div class="col-sm-6">
			<input type="text" name="harga_barang" id="harga" class="form-control" required value="<?= $barang ["harga_barang"];?>">
		</div>
	</div>
   
 </div>
 <center><button type="submit" name="submit" class="btn btn-success">Edit data</button></center>

</body>
</html>