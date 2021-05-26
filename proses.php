<?php
include 'model.php';

// tabel absen
if (isset($_POST['submit_simpan'])) {
 $tglabsen = $_POST['tglabsen']; 
 $masuk = $_POST['masuk'];
 $keluar = $_POST['keluar'];
 $kodedosen = $_POST['kodedosen'];
 $sesi = $_POST['sesi'];
 $kelassesi = $_POST['kelassesi'];
 $model = new Model();
 $model->insert($tglabsen, $masuk, $keluar, $kodedosen, $sesi, $kelassesi);
 header('location:absen.php');
}
if (isset($_POST['submit_edit'])) {
    $tglabsen = $_POST['tglabsen']; 
    $masuk = $_POST['masuk'];
    $keluar = $_POST['keluar'];
    $kodedosen = $_POST['kodedosen'];
    $sesi = $_POST['sesi'];
    $kelassesi = $_POST['kelassesi'];
 $model = new Model();
 $model->update($nim, $nama, $uts, $tugas,$uas);
 header('location:absen.php');
}
if (isset($_GET['tglabsen'])) {
 $id = $_GET['tglabsen'];
 $model = new Model();
 $model->delete($idabsen);
 header('location:absen.php');
}

// tabel dosen
if (isset($_POST['submit_simpan_dosen'])) {
 $kodedosen = $_POST['kodedosen'];
 $nids = $_POST['nids'];
 $nipy = $_POST['nipy'];
 $namadosen = $_POST['namadosen'];
 $kodeprodi = $_POST['kodeprodi'];
 $model = new Model();
 $model->insert_dosen($kodedosen, $nids, $nipy, $namadosen, $namadosen, $kodeprodi);
 header('location:dosen.php');
}
if (isset($_POST['submit_edit_dosen'])) {
    $kodedosen = $_POST['kodedosen'];
    $nids = $_POST['nids'];
    $nipy = $_POST['nipy'];
    $namadosen = $_POST['namadosen'];
    $kodeprodi = $_POST['kodeprodi'];
 $model = new Model();
 $model = new Model();
 $model->update_mhs($kodedosen, $nids, $nipy, $namadosen, $namadosen, $kodeprodi);
 header('location:dosen.php');
}
if (isset($_GET['id'])) {
 $id = $_GET['id'];
 $model = new Model();
 $model->delete_mhs($id);
 header('location:mahasiswa.php');
}


// tabel jadwal
if (isset($_POST['submit_simpan_jadwal'])) {
 $id = $_POST['id'];
 $jadwalid = $_POST['jadwalid'];
 $kodedosen = $_POST['kodedosen'];
 $hari = $_POST['hari'];
 $thnakademik = $_POST['thnakademik'];
 $semester = $_POST['semester'];
 $kodemk = $_POST['kodemk'];
 $sesi = $_POST['sesi'];
 $jammasuk = $_POST['jammasuk'];
 $jamkeluar = $_POST['jamkeluar'];
 $kelas = $_POST['kelas'];
 $ruang = $_POST['ruang'];
 $status = $_POST['status'];
 $kelassesi = $_POST['kelassesi'];
 $model = new Model();
 $model->insert_absen($id, $jadwalid, $kodedosen, $hari, $thnakademik, $semester, $kodemk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi);
 header('location:jadwal.php');
}
if (isset($_POST['submit_edit_absen'])) {
    $id = $_POST['id'];
    $jadwalid = $_POST['jadwalid'];
    $kodedosen = $_POST['kodedosen'];
    $hari = $_POST['hari'];
    $thnakademik = $_POST['thnakademik'];
    $semester = $_POST['semester'];
    $kodemk = $_POST['kodemk'];
    $sesi = $_POST['sesi'];
    $jammasuk = $_POST['jammasuk'];
    $jamkeluar = $_POST['jamkeluar'];
    $kelas = $_POST['kelas'];
    $ruang = $_POST['ruang'];
    $status = $_POST['status'];
    $kelassesi = $_POST['kelassesi'];
 $model = new Model();
 $model->update_absen($id, $jadwalid, $kodedosen, $hari, $thnakademik, $semester, $kodemk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi);
 header('location:jadwal.php');
}
if (isset($_GET['id'])) {
 $id = $_GET['id'];
 $model = new Model();
 $model->delete_absen($id);
 header('location:jadwal.php');
}

// tabel mkuliah
if (isset($_POST['submit_simpan_mkuliah'])) {
 $kodemk = $_POST['kodemk'];
 $namamk = $_POST['namamk'];
 $sks = $_POST['sks'];
 $smt = $_POST['smt'];
 $kodeprodi = $_POST['kodeprodi'];
 $model = new Model();
 $model->insert_kontrakmk($kodemk, $namamk, $sks, $smt, $kodeprodi);
 header('location:mkkuliah.php');
}
if (isset($_POST['submit_edit_mkuliah'])) {
    $kodemk = $_POST['kodemk'];
    $namamk = $_POST['namamk'];
    $sks = $_POST['sks'];
    $smt = $_POST['smt'];
    $kodeprodi = $_POST['kodeprodi'];
 $model = new Model();
 $model->update_kontrakmk($kodemk, $namamk, $sks, $smt, $kodeprodi);
 header('location:mkuliah.php');
}
if (isset($_GET['id'])) {
 $id = $_GET['id'];
 $model = new Model();
 $model->delete_kontrakmk($id);
 header('location:mkuliah.php');
}

// tabel prodi
if (isset($_POST['submit_simpan_prodi'])) {
$id = $_POST['id'];
$kodeprodi = $_POST['kodeprodi'];
 $model = new Model();
 $model->insert_jadwal($kodeprodi, $namaprodi);
 header('location:jadwal.php');
}
if (isset($_POST['submit_edit_prodi'])) {
 $kodeprodi = $_POST['kodeprodi'];
 $namaprodi = $_POST['namaprodi'];
 $model = new Model();
 $model->update_jadwal($kodeprodi, $namaprodi);
 header('location:prodi.php');
}
if (isset($_GET['id'])) {
 $id = $_GET['id'];
 $model = new Model();
 $model->delete_jadwal($id);
 header('location:prodi.php');
}