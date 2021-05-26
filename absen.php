<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	
	
<title>Absensi Mahasiswa</title>
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-info" >
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Pemrograman Internet 2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="jadwal.php">Jadwal</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="mkkuliah.php">Matakuliah</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="prodi.php">Prodi</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="absen.php">Absen</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="index.php">Nilai</a>
            </li>
      </ul>
    </div>
  </div>
</nav>
<h1>Data Absen</h1>
<a href="create_absen.php">Tambah Data</a>
<br>
<br><br>
<table border="1">
<thead>
<tr>
<th>tanggal absen</th>
<th>masuk</th>
<th>keluar</th>
<th>kode dosen</th>
<th>sesi</th>
<th>kelas sesi</th>
</tr>
</thead>
<tbody>
<?php
$result = $model->tampil_data_absen();
if ( !empty($result) ) {
foreach ($result as $data): ?>
<tr>
<td><?=$index++ ?></td>
<td><?=$data->tglabsen ?></td>
<td><?=$data->masuk ?></td>
<td><?=$data->keluar ?></td>
<td><?=$data->kodedosen ?></td>
<td><?=$data->sesi ?></td>
<td><?=$data->kelassesi ?></td>
<td><a name="edit" id="edit" 
href="edit_absen.php?tglabsen=<?=$data->tglabsen ?>">Edit</a>
<a name="hapus" id="hapus" 
href="proses.php?nim=<?=$data->nim ?>">Delete</a>
</td>
</tr>
<?php endforeach;
} else{ ?>
<tr>
<td colspan="9">Belum ada data.</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</body>
</html>