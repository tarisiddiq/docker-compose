<?php

include"koneksi.php";//include fungsinya untuk memanggil file koneksi

$nama_user = $_POST['nama_user'];
$username =$_POST['username'];
$password=$_POST['password'];
$nama_wisata=$_POST['nama_wisata'];
$status=$_POST['status'];

$sql=mysqli_query($koneksi,"INSERT INTO  user VALUES('','$nama_user','$username','$password','$nama_wisata','$status')") or die ('error'.mysqli_error());

if ($sql=true) {
	header("location:index.php?mod=tampil_data_user");// header location untuk pindah ke halaman lain.
}else{
	echo"gagal";
}


?>


?>