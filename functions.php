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

