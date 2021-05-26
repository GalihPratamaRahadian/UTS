<?php
$id = $_GET['nim'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);?>
<!doctype html>
<html lang="en">
<head>
	<title>Edit Mata Kuliah</title>
</head>

<!doctype html>
<html lang="en">

<head>
	<title>Edit Mata Kuliah</title>
</head>

<body>
	<h1>Edit Mata Kuliah</h1>
	<a href="mkkuliah.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>Kode Mata Kuliah</label>
		<br>
		<input type="number" name="kodemk" value="<?php echo $data->kodemk ?>">
		<br>
		<label>nama mata kuliah</label>
		<br>
		<input type="text" name="namamk" value="<?php echo $data->namamk ?>">
		<br>
		<label>sks</label>
		<br>
		<input type="number" name="sks" value="<?php echo $data->sks ?>">
		<br><label>semester</label>
		<br>
		<input type="number" name="smt" value="<?php echo $data->smt ?>">
		<br>
		<label>kode prodi</label>
		<br>
		<input type="number" name="kodeprodi" value="<?php echo $data->kodeprodi ?>">
		<br><br>
		<button type="submit" name="submit_edit">Submit</button>
	</form>
</body>
</html>