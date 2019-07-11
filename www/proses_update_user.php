<?php
include"koneksi.php";

$id   =$_POST ['id_user'];
$nama =$_POST ['nama_user'];
$username = $_POST ['username'];
$password = $_POST ['password'];
$wisata = $_POST ['nama_wisata'];
$status = $_POST ['status'];


$sql=mysqli_query($koneksi," UPDATE user SET 
	nama_user='$nama', 
	username='$username', 
	password='$password', 
	id_wisata='$wisata', 
	status='$status' 
	WHERE id_user='$id' ");

if ($sql==true){
	header("location:index.php?mod=tampil_data_user");
}else{
	echo"gagal";
}

?>