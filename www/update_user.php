<?php
	include('conn.php');
	if(isset($_POST['edit'])){
		$id=$_POST['id'];
		$nama_user=$_POST['nama_user'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$nama_wisata=$_POST['nama_wisata'];
		$status=$_POST['status'];
		
		mysqli_query($conn,"update `user` set nama_user='$nama_user', username='$username',password='$password', nama_wisata='$nama_wisata', status='$status' where id_user='$id'");
	}
?>