<?php
$id = $_GET['nim'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);?>
<!doctype html>
<html lang="en">
<head>
	<title>Edit Jadwal</title>
</head>

<!doctype html>
<html lang="en">

<head>
	<title>Edit Jadwal</title>
</head>

<body>
	<h1>Edit Nilai Jadwal</h1>
	<a href="jadwal.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>jadwal id</label>
		<br>
		<input type="number" name="jadwalid" value="<?php echo $data->jadwalid ?>">
		<br>
		<label>kode dosen</label>
		<br>
		<input type="number" name="kodedosen" value="<?php echo $data->kodedosen ?>">
		<br>
		<label>hari</label>
		<br>
		<input type="text" name="hari" value="<?php echo $data->hari ?>">
		<br><label>tahun akademik</label>
		<br>
		<input type="number" name="thnakademik" value="<?php echo $data->thnakademik ?>">
		<br>
		<label>semester</label>
		<br>
		<input type="number" name="semester" value="<?php echo $data->semester ?>">
		<br>
        <label>kode mata kuliah</label>
		<br>
		<input type="text" name="uas" value="<?php echo $data->kodemk ?>">
		<br>
        <label>sesi</label>
		<br>
		<input type="number" name="sesi" value="<?php echo $data->sesi ?>">
		<br>
        <label>jam masuk</label>
		<br>
		<input type="time" name="jammasuk" value="<?php echo $data->jammasuk ?>">
		<br>
        <label>jam keluar</label>
		<br>
		<input type="time" name="jamkeluar" value="<?php echo $data->jamkeluar ?>">
		<br>
        <label>kelas</label>
		<br>
		<input type="text" name="kelas" value="<?php echo $data->kelas ?>">
		<br>
        <label>ruang</label>
		<br>
		<input type="text" name="ruang" value="<?php echo $data->ruang ?>">
		<br>
        <label>status</label>
		<br>
		<input type="text" name="status" value="<?php echo $data->status ?>">
		<br>
        <label>kelassesi</label>
		<br>
		<input type="text" name="kelassesi" value="<?php echo $data->kelassesi ?>">
		<br>
        <br>
		<button type="submit" name="submit_edit">Submit</button>
	</form>
</body>
</html>