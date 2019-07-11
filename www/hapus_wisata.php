<?php
include"koneksi.php";

header("location:index.php?mod=tampil_data_wisata");

$id=$_GET['id'];
$sql=mysqli_query($koneksi,"delete from wisata where id_wisata='$id'");

?>