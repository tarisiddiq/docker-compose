<?php
include "koneksi.php";


$id= $_GET['id'];
$sql=mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$id'")or die("error".mysqli_error());
header("location:index.php?mod=tampil_data_user");

?>