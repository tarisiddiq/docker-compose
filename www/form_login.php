<?php 

session_start();
if(!empty($_SESSION['username'])){
	header('location:index.php');
}
elseif(empty($_SESSION['username'])){
	echo"<script> alert ('username dan password anda salah'); </script>";
}

?>
<!DOCTYPE html>
<html>
<head><title> Form Login </title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<br/><br/>
<center><div style="background-color:#2196F3; color:#fff; width:400px; height: 207px; padding:15px;"><!--ini adalah header-->
 <form action="proses_login.php" method="post" class="form-horizontal" role="form" style="max-width:300px;">
	<div class="form-group">
		<label class="control-label" for="username" >Username</label>
		<input type="text" class="form-control" name="username">
	</div>
	<div class="form-group">
		<label class="control-label" for="password">Password</label>
		<input type="text" class="form-control" name="password">
	</div>	

	<div class="col-sm-offset-2 col-sm-8">
		<button type="submit" class="btn btn-primary">Login</button>
	</div>	
	
</form>

</div> </center>
</div>
</body>
</html>
