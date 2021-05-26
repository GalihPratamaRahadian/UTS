<?php
include 'Connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();

 // tabel absen
 }
public function insert_absen($idabsen , $tglabsen, $masuk, $keluar, $kodedosen, $sesi, $kelassesi)
{
    $sql = "INSERT INTO tblabsen ( idabsen, tglabsen, masuk, keluar ,kodedosen , sesi, kelassesi) 
	VALUES ('$idabsen','$tglabsen', '$masuk','$keluar', '$kodedosen', '$sesi', '$kelassesi')";
	$this->conn->query($sql);
}
public function tampil_data_absen()
{
	 $sql = "SELECT * FROM tblabsen";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object() { 
	 	$baris[] = $obj;
	 }
	 if(!empty($baris)){
		 return $baris;
	 }
}
public function edit_data_absen($idabsen)
{
    $sql = "UPDATE tblabsen SET idabsen='$idabsen', tglabsen='$tglabsen', masuk='$masuk', keluar='$keluar' WHERE idabsen='$idabsen'";
    $this->conn->query($sql);
}
public function update_data_absen($tglabsen, $masuk, $keluar,$kodedosen, $sesi, $kelassesi)
{
	 $sql = "UPDATE tblabsen SET idabsen='$idabsen', tglabsen='$tglabsen', masuk='$masuk', keluar='$keluar', kodedosen='$kodedosen', sesi='$sesi', kelassesi='$kelassesi' WHERE tglabsen='$tglabsen'";
	 $this->conn->query($sql);
}
public function delete_data_absen($tglabsen)
{ 
	$sql = "DELETE FROM tblabsen WHERE tglabsen='$tglabsen'";
	$this->conn->query($sql);
}

// tabel dosen
 public function insert_dosen($kodedosen, $nids, $nipy, $namadosen, $kodeprodi)
{
	$sql = "INSERT INTO tbldosen (kodedosen, nids, nipy, namadosen, kodeprodi) 
	VALUES ('$kodedosen', '$nids','$nipy', '$namadosen', '$kodeprodi',)";
	$this->conn->query($sql);
}
public function tampil_data_dosen()
{
	 $sql = "SELECT * FROM tbldosen";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) { 
	 	$baris[] = $obj;
	 }
	 if(!empty($baris)){
	 	return $baris;
	 }
}
public function edit_dosen($id)
{
	 $sql = "SELECT * FROM tbldosen WHERE id='$id'";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) {
		 $baris = $obj;
	 }
	 return $baris;
}
public function update_dosen($kodedosen, $nids, $nipy, $namadosen, $kodeprodi)
{
	 $sql = "UPDATE tbldosen SET kodedosen='$kodedosen', nids='$nids', nipy='$nipy', namadosen='$namadosen', kodeprodi='$kodeprodi' WHERE id='$id'";
	 $this->conn->query($sql);
}
public function delete_dosen($id)
{ 
	$sql = "DELETE FROM tbldosen WHERE id='$id'";
	$this->conn->query($sql);
}

 // tabel jadwal
 public function insert_jadwal($id, $jadwalid, $kodedosen, $hari, $thnakademik, $semester, $kodemk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi)
{
	$sql = "INSERT INTO tbljadwal (id, jadwalid, kodedosen, hari, thnakademik, semester, kodemk, sesi, jammasuk, jamkeluar, kelas, ruang, status, kelassesi) 
	VALUES ('$id', '$jadwalid,','$kodedosen', '$hari', '$thnakademik','$semester', '$kodemk', '$sesi', '$jammasuk', '$jamkeluar', '$kelas', '$ruang','$status', '$kelassesi')";
	$this->conn->query($sql);
}
public function tampil_data_jadwal()
{
	 $sql = "SELECT * FROM tbljadwal";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) { $baris[] = $obj;
 }
 if(!empty($baris)){
 	return $baris;
 }
}
public function edit_jadwal($id)
{
	 $sql = "SELECT * FROM tbljadwal WHERE id='$id'";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) {
	 	$baris = $obj;
 }
	 return $baris;
}
public function update_jadwal($id, $jadwalid, $kodedosen, $hari, $thnakademik, $semester, $kodemk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi)
{
	 $sql = "UPDATE tbljadwal SET jadwalid='$jadwalid', kodedosen='$kodedosen', hari='$hari', thnakademik='$thnakademik', semester='$semester', kodemk='$kodemk', sesi='$sesi', jammasuk='$jammasuk', kelas='$kelas', ruang='$ruang', status='$status', kelassesi='$kelassesi' WHERE id='$id'";
	 $this->conn->query($sql);
}
public function delete_jadwal($id)
{ 
	$sql = "DELETE FROM tbljadwal WHERE id='$id'";
	$this->conn->query($sql);
}

// tabel mkkuliah
public function insert_mkuliah($kodemk, $namamk, $sks, $smt, $kodeprodi)
{
	$sql = "INSERT INTO tbmkuliah (kodemk, namamk, sks, smt, kodeprodi) 
	VALUES ('$kodemk', '$namamk', '$sks', '$smt', '$kodeprodi')";
	$this->conn->query($sql);
}
public function tampil_data_mkuliah()
{
	 $sql = "SELECT * FROM tbmkuliah";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) { $baris[] = $obj;
 }
 if(!empty($baris)){
 	return $baris;
 }
}
public function edit_mkuliah($id)
{
	 $sql = "SELECT * FROM tbmkuliah WHERE id='$id'";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) {
	 	$baris = $obj;
 }
	 return $baris;
}
public function update_mkuliah($kodemk, $namamk, $sks, $smt, $kodeprodi)
{
	 $sql = "UPDATE tbmkuliah SET kodemk='$kodemk', mhs_id='$namamk', sks='$sks', smt='$smt', kodeprodi='$kodeprodi' WHERE id='$id'";
	 $this->conn->query($sql);
}
public function delete_kontrakmk($id)
{ 
	$sql = "DELETE FROM tbmkuliah WHERE id='$id'";
	$this->conn->query($sql);
}


// tabel prodi
public function insert_prodi($kodeprodi, $namaprodi)
{
	$sql = "INSERT INTO tblprodi (kodeprodi, namaprodi) 
	VALUES ('$kodeprodi', '$namaprodi')";
	$this->conn->query($sql);
}
public function tampil_data_prodi()
{
	 $sql = "SELECT * FROM tblprodi";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) { $baris[] = $obj;
 }
 if(!empty($baris)){
 	return $baris;
 }
}
public function edit_prodi($id)
{
	 $sql = "SELECT * FROM tblprodi WHERE id='$id'";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) {
	 	$baris = $obj;
 }
	 return $baris;
}
public function update_prodi($id, $kodeprodi, $namaprodi)
{
	 $sql = "UPDATE tblprodi SET namaprodi='$namaprodi' WHERE id='$id'";
	 $this->conn->query($sql);
}
public function delete_prodi($id)
{ 
	$sql = "DELETE FROM tblprodi WHERE id='$id'";
	$this->conn->query($sql);
}



}