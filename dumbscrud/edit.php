<?php
require 'functions.php';


//ambil data dari url
$id = $_GET["id"];


$dis = query("SELECT * FROM dumbs WHERE id=$id")[0];

//cek apakah tombol submit sudah di tekan apa belum
if (isset($_POST["submit"])) {

	//cek apakah data berhasil ditambah atau gagal
	if (edit($_POST) > 0) {
		echo "
		<script>
		alert('data berhasil diedit');
		document.location.href = 'index.php';
		</script>

		";
	} else {
		echo "
		<script>
		alert('data gagal diedit');
		document.location.href = 'index.php';
		</script>

		";
	}
}
?>



<!DOCTYPE html>
<html>

<head>
	<title>Edit data</title>
</head>

<body>
	<h1>EDIT ARTIKEL DUMBWAYS</h1>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?php echo $dis["id"]; ?>">
		<ul>
			<br>

			<li>
				<label for="artikel_1"> artikel_1</label>
				<input style="height: 50px; width:600px;" type="text" name="artikel_1" id="artikel_1" required value="<?php echo $dis["artikel_1"]; ?>">
			</li>
			<br>
			<li>
				<label for="artikel_2"> artikel_2</label>
				<input style="height: 50px; width:600px;" type="text" name="artikel_2" id="artikel_2" value="<?php echo $dis["artikel_2"]; ?>">
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