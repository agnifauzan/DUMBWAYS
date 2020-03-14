<?php
//terima dari require
$conn = mysqli_connect("localhost", "root", "", "crud");

//terima dari query
function query($query)
{
	//variable con ada dalam functions
	global $conn;
	$result = mysqli_query($conn, $query);


	//proses pengambilan data 
	$rows = []; //tempat menimpan data(kosong)
	while ($row = mysqli_fetch_assoc($result)) { //mengambil data nya dari rows
		$rows[] = $row; //menimpan data satu2 ke variable row 		
	}
	return $rows; //kembalikan data nya

}

//menerima inputan
function tambah($data)
{
	global $conn;
	//ambil data dari tiap elemen dalam form
	$artikel_1 = htmlspecialchars($data["artikel_1"]);
	$artikel_2 = htmlspecialchars($data["artikel_2"]);




	//query insert data
	$query = "INSERT INTO dumbs
			VALUES
			('', '$artikel_1', '$artikel_2')
		";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function hapus($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM dumbs WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function edit($data)
{
	global $conn;

	//ambil data dari tiap elemen dalam form
	$id = $data["id"];
	$artikel_1 = htmlspecialchars($data["artikel_1"]);
	$artikel_2 = htmlspecialchars($data["artikel_2"]);



	//query ubah data
	$query = "UPDATE dumbs SET
				artikel_1 = '$artikel_1',
				artikel_2 ='$artikel_2'
				
				WHERE id = $id
				";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
