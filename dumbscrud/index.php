<?php
//memanggil file functions
require 'functions.php'; //require/include

//kirim ke function_query
$distro = query("SELECT * FROM dumbs");


?>

<!DOCTYPE html>
<html>

<head>
	<title>DUMBWAYS</title>
</head>

<body>
	<h1 style="background-color:darkturquoise; padding:10px;">DUMB SOSMED</h1>

	<br>
	<br>
	<table border="0" cellpadding="10" cellspacing="0">
		<tr style="border: 0">
			<!-- <th>no</th> -->
			<th>ARTIKEL KEBUN BINATANG DUMBWAYS</th>
			<th>ARTIKEL KEBUN BINATANG DUMBWAYS</th>
			<th>Aksi</th>
		</tr>
		<?php $j = 1; ?>
		<?php foreach ($distro as $d) { ?>

			<tr style="border: 1px solid">
				<!-- <td><?php echo $j; ?> </td> -->
				<td style="height: 200px; width: 600px;"><?php echo $d["artikel_1"]; ?></td>
				<td style="height: 200px; width: 600px;"><?php echo $d["artikel_2"]; ?> </td>
				<td>
					<a href="edit.php?id=<?= $d["id"]; ?>"> Edit </a> |
					<a href="hapus.php?id=<?= $d["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
					<!-- kirim data ke file hapus.php ketika di klik -->

				</td>
			</tr>
			<?php $j++ ?>
		<?php } ?>

	</table>
	<br>
	<button>
		<a href="tambah.php">Tambah Data</a>
	</button>

</body>

</html>
