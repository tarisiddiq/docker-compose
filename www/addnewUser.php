<?php
	include('conn.php');
	if(isset($_POST['add'])){
		$nama_user=$_POST['nama_user'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$nama_wisata=$_POST['nama_wisata'];
		$status=$_POST['status'];
		
		mysqli_query($conn,"insert into `user` (nama_user, username, password, nama_wisata, status) values ('$nama_user', '$username', '$password','$nama_wisata', '$status')");
		
	}
?>