<?php
// memanggil file koneksi.php untuk melakukan koneksi database
$conn = mysqli_connect('localhost','root','','crud_sederhana');

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form
	$nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $fakultas = $_POST['fakultas'];
  $jurusan = $_POST['jurusan'];
  $ipk = (float) $_POST['ipk'];

  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO mahasiswa VALUES (NULL, '$nim', '$nama', '$fakultas','$jurusan',$ipk)";
  $result = mysqli_query($link, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($link).
           " - ".mysqli_error($link));
  }
}

// melakukan redirect (mengalihkan) ke halaman index.php
header("location:index.php");
?>
