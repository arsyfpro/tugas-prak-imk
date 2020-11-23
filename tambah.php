<?php
require 'functions.php';

//cek apakah tombol sudah ditekan atau belum
if( isset($_POST["submit"])) {
	
	//cek apakah data berhasil ditambah
	if( tambah($_POST) > 0 ) {
		echo " 
			<script>
				alert('Data berhasil ditambahkan!');
				document.location.href ='index.php';
			</script> 
		";
	} else {
		echo "
				<script>
				alert('Data gagal ditambahkan!');
				document.location.href ='index.php';
			</script> 
			";
	}
}

?>

<!DOCTYPE html >
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>Tambah Data Barang</title>
</head>
<body>

	<h3 class="alert alert-success text-center mt-3">Tambah Data Barang</h3>

	 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


	<form action="" method="post">

		<div class="form-group row justify-content-center">
		<label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
		<div class="col-sm-6">
			<input type="text" name="nama_barang" class="form-control" id="nama_barang" autocomplete="off" required>
		</div>
	</div>

		<div class="form-group row justify-content-center">
		<label for="merk" class="col-sm-2 col-form-label">Merk</label>
		<div class="col-sm-6">
			<input type="text" name="merk_barang" class="form-control" id="merk" autocomplete="off" required>
		</div>
	</div>

	<div class="form-group row justify-content-center">
		<label for="jenis" class="col-sm-2 col-form-label">Jenis Barang</label>
		<div class="col-sm-6">
			<select class="form-control" name="jenis_barang" id="jenis" required>
				<option value="">-- Jenis Barang --</option>
				<option value="Cushion">Cushion</option>
				<option value="Essence">Essence</option>
				<option value="Face Oil">Face Oil</option>
				<option value="Foundation">Foundation</option>
				<option value="Lip Tint">Lip Tint</option>
				<option value="Moisturizer">Moisturizer</option>
				<option value="Serum">Serum</option>
				<option value="Toner">Toner</option>
				<option value="Lainnya">Lainnya...</option>
			</select>
		</div>
	</div>

	<div class="form-group row justify-content-center">
		<label for="jumlah" class="col-sm-2 col-form-label">Jumlah Barang</label>
		<div class="col-sm-6">
			<input type="number" min="0" name="jumlah_barang" class="form-control" id="jumlah" autocomplete="off" required>
		</div>
	</div>

	<div class="form-group row justify-content-center">
		<label for="harga" class="col-sm-2 col-form-label">Harga (Rp)</label>
		<div class="col-sm-6">
			<input type="number" min="0" name="harga_barang" class="form-control" id="hp" autocomplete="off" required>
		</div>
	</div>
   
 </div>
  <center><button type="submit" name="submit" class="btn btn-success">Tambah data</button></center>

</body>
</html>