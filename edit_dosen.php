<?php
$id = $_GET['nim'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);?>
<!doctype html>
<html lang="en">
<head>
	<title>Edit Dosen</title>
</head>

<!doctype html>
<html lang="en">

<head>
	<title>Edit Dosen</title>
</head>

<body>
	<h1>Edit Dosen</h1>
	<a href="dosen.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>kodedosen</label>
		<br>
		<input type="number" name="kodedosen" value="<?php echo $data->kodedosen ?>">
		<br>
		<label>nids</label>
		<br>
		<input type="text" name="nids" value="<?php echo $data->nids ?>">
		<br>
		<label>nipy</label>
		<br>
		<input type="text" name="nipy" value="<?php echo $data->nipy ?>">
		<br><label>Nama Dosen</label>
		<br>
		<input type="text" name="namadosen" value="<?php echo $data->$namadosen ?>">
		<br>
		<label>Kode Prodi</label>
		<br>
		<input type="number" name="kodeprodi" value="<?php echo $data->kodeprodi ?>">
		<br><br>
		<button type="submit" name="submit_edit">Submit</button>
	</form>
</body>
</html>