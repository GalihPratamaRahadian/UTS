<?php
$id = $_GET['nim'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);?>
<!doctype html>
<html lang="en">
<head>
	<title>Edit Prodi</title>
</head>

<!doctype html>
<html lang="en">

<head>
	<title>Edit Prodi</title>
</head>

<body>
	<h1>Edit Prodi</h1>
	<a href="prodi.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>kode prodi</label>
		<br>
		<input type="number" name="kodeprodi" value="<?php echo $data->kodeprodi ?>">
		<br>
		<label>nama prodi</label>
		<br>
		<input type="text" name="namaprodi" value="<?php echo $data->namaprodi ?>">
		<br>
		<br>
		<button type="submit" name="submit_edit">Submit</button>
	</form>
</body>
</html>