<?php
require 'functions.php';

//cek apakah tombol submit sudah di tekan apa belum
if (isset($_POST["submit"])) {

	//cek apakah data berhasil ditambah atau gagal
	if (tambah($_POST) > 0) {
		echo "
		<script>
		alert('data berhasil ditambahkan');
		document.location.href = 'index.php';
		</script>

		";
	} else {
		echo "
		<script>
		alert('data gagal ditambahkan');
		document.location.href = 'index.php';
		</script>

		";
	}
}
?>




<!DOCTYPE html>
<html>

<head>
	<title>Tambah data</title>
</head>

<body>
	<h1>Tambah data Baju</h1>
	<form action="" method="post">
		<ul>
			<br>
			<li>
				<label for="artikel_1"> Artikel 1</label>
				<textarea name="artikel_1" id="artikel_1" rows="10" cols="100"></textarea>

			</li>
			<br>
			<li>
				<label for="artikel_2"> artikel 2</label>
				<textarea name="artikel_2" id="artikel_2" rows="10" cols="100"></textarea>
			</li>

			<br>
			<li>
				<button type="submit" name="submit">Simpan</button>
			</li>
			<br>
		</ul>

	</form>

</body>

</html>