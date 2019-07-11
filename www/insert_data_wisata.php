<?php
include"koneksi.php";//include fungsinya untuk memanggil file koneksi

$nama_wisata = $_POST['nama_wisata'];
$harga =$_POST['harga_tiket'];

$sql=mysqli_query($koneksi,"insert into wisata values('','$nama_wisata','$harga')");

if ($sql=true) {
	header("location:index.php?mod=tampil_data_wisata");// header location untuk pindah ke halaman lain.
}else{
	echo"gagal";
}


?>




