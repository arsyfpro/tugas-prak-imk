<?php
//koneksi ke database

$conn = mysqli_connect("localhost", "root", "", "skincare");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}

return $rows;
}


function tambah($data) {
	global $conn;

	$namaBarang = htmlspecialchars($data["nama_barang"]);
	$merk = htmlspecialchars($data["merk_barang"]);
	$jenis = htmlspecialchars($data["jenis_barang"]);
	$jumlah = htmlspecialchars($data["jumlah_barang"]);
	$harga = htmlspecialchars($data["harga_barang"]);

	//query insert data
	$query = "INSERT INTO mahasiswa VALUES
	('','$jenis','$namaBarang','$merk','$jumlah','$harga')
	";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function cari($keyword) {
	$query = "SELECT * FROM barang 
					WHERE 
					nama_barang LIKE '%$keyword%' OR 
					jenis_barang LIKE '%$keyword%' OR 
					merk_barang LIKE '%$keyword%'
					";

	return query($query);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM barang WHERE id = $id"); 
    return mysqli_affected_rows($conn);
}

?>

