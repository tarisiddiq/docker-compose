<?php 

session_start();
if(empty($_SESSION['username'])){
	header('location:form_login.php');
}
include"koneksi.php";
$sqlu=mysqli_query($koneksi,"select * from  user u,  wisata w where u.id_wisata=w.id_wisata and u.username='$_SESSION[username]'") or die ('error');//memanggil data user berdasarkan session
$datau=mysqli_fetch_array($sqlu);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Latihan Bootstrap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-pluid"><!--container adalah untuk mengafitsemua div -->
	<div style="background-color:#2196F3; color:#fff; height:100px; padding:15px;"><!--ini adalah header-->
		<h3><b> Wisata</b></h3>

			</div> 
			  <div class="row" ><!--ini adalah row-->
				<div class="col-sm-3"><!--ini adalah pembagian colom -->
			<ul class="list-group"><!--ini adalah list group -->
				<a href="index.php?mod=home" class="list-group-item">HOME</a>
					<a href="index.php?mod=tampil_data_user" class="list-group-item">USER</<a>
							<a href="index.php?mod=tampil_data_wisata" class="list-group-item">WISATA</a>
								<a href="index.php?mod=laporan" class="list-group-item">LAPORAN</a>
									<a href="logout.php" class="list-group-item">LOG OUT</a>
									</ul>
										</div>
									<div class="col-sm-9">
								<div style="border:0px black solid; padding:5px;"><!--ini adalah untuk membuat contern dengan border -->
			<?php
				if(empty($_GET['mod'])){
					include"home.php";
					}else{
				$mod=$_GET['mod'];
				include $mod.".php";
			}
			?>
								</div>
						</div>
				</div>
				<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
				<div style="background-color:#2196F3; color:#ffffff; height:30px; padding:5px;"><!--ini adalah footer -->
			<center><p style="font:11px verdana">
				
				 Email : <b>siddiqfisamalaka@gmail.com<br/>
		</p></center>
	</div>
</div>
</body>
</html>
</html>
