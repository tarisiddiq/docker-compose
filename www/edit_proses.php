<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
  // buat koneksi dengan database
  $conn = mysqli_connect('localhost','root','','crud_sederhana');

  // membuat variabel untuk menampung data dari form edit
  $id = $_POST['id'];
  $nim = $_POST['nim'];
	$nama	= $_POST['nama'];
	$fakultas	= $_POST['fakultas'];
	$jurusan = $_POST['jurusan'];
	$ipk = (float) $_POST['ipk'];

  //buat dan jalankan query UPDATE
  $query  = "UPDATE mahasiswa SET ";
  $query .= "nim = '$nim', nama = '$nama', ";
  $query .= "fakultas='$fakultas', ";
  $query .= "jurusan = '$jurusan', ipk=$ipk ";
  $query .= "WHERE id = '$id'";

  $result = mysqli_query($link, $query);

  //periksa hasil query apakah ada error
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($link).
       " - ".mysqli_error($link));
  }
}

//lakukan redirect ke halaman index.php
header("location:index.php");


?>
