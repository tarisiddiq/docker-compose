<?php
include"koneksi.php";
$id   =$_POST ['id_wisata'];
$nama =$_POST ['nama_wisata'];
$harga_tiket = $_POST ['harga_tiket'];


$sql=mysqli_query($koneksi,"update wisata set nama_wisata='$nama', harga_tiket='$harga_tiket' where id_wisata='$id'");

if ($sql==true){
	header("location:index.php?mod=tampil_data_wisata");
}else{
	echo"gagal";
}

?>