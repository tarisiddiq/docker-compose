<?php

session_start(); //fungsi session untuk penyimpanan sementara dari browser
include "koneksi.php";

$username= $_POST['username'];
$password= $_POST['password'];

$sql=mysqli_query($koneksi, "select * from user where username='$username' and password='$password' ") or die ('error'.mysqli_error());

$row=mysqli_fetch_array($sql);
if(empty($username)) {
	$row="tidak boleh kosong";
	}
if ($row['username']==$username and $row ['password']==$password) {
	$_SESSION ['username']=$row['username'];
	$_SESSION ['password']=$row['password'];
header("location:index.php");

}else{

header("location:form_login.php");

}

?>