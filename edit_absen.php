<?php
$id = $_GET['nim'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);?>
<!doctype html>
<html lang="en">
<head>
	<title>Edit Absen</title>
</head>

<!doctype html>
<html lang="en">

<head>
	<title>Edit Absen</title>
</head>

<body>
	<h1>Edit Absen</h1>
	<a href="absen.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>id absen</label>
		<br>
		<input type="number" name="idabsen" value="<?php echo $data->idabsen ?>">
		<br>
		<label>tanggal absen</label>
		<br>
		<input type="date" name="tglabsen" value="<?php echo $data->tglabsen ?>">
		<br>
		<label>masuk</label>
		<br>
		<input type="time" name="masuk" value="<?php echo $data->masuk ?>">
		<br><label>keluar</label>
		<br>
		<input type="time" name="keluar" value="<?php echo $data->keluar ?>">
		<br>
		<label>kode dosen</label>
		<br>
		<input type="number" name="kodedosen" value="<?php echo $data->kodedosen ?>">
		<br><br>
		<button type="submit" name="submit_edit_absen">Submit</button>
	</form>
</body>
</html>