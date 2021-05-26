<!doctype html>
<html lang="en">
<head>
	<title>Tambah Data Absen</title>
</head>

<body>
	<h1>Tambah Data Absen</h1>
	<a href="absen.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>tanggal absen</label>
		<br>
		<input type="date" name="tglabsen">
		<br>
		<label>masuk</label>
		<br>
		<input type="time" name="masuk"><br>
		<label>keluar</label>
		<br>
		<input type="time" name="keluar">
		<br>
		<label>kode dosen</label>
		<br>
		<input type="number" name="kodedosen">
		<br>
		<label>sesi</label>
		<br>
		<input type="number" name="sesi">
		<br>
		<label>kelas sesi</label>
		<br>
		<input type="number" name="kelassesi">
		<br><br>
		<button type="submit" name="submit_simpan_absen">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>