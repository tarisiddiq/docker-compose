<?php
	include('conn.php');
?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8" name = "viewport" content = "width-device=width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<title>DATA USER</title>
	</head>
<body>
	<div style="height:30px;"></div>
	<div class = "row">	
		<div class = "col-md-3">
		</div>
		<div class = "col-md-6 well">
			<div class="row">
                <div class="col-lg-12">
                    <center><h2 class = "text-primary">DATA USER</h2></center>
					<hr>
				<div>
					<form class = "form-inline">
						<div class = "form-group">
							<label>Nama User:</label>
							<input type  = "text" id = "nama_user" class = "form-control">
						</div><br/>
						<div class = "form-group">
							<label>Username:</label>
							<input type  = "text" id = "username" class = "form-control">
						</div>
						<div class = "form-group">
							<label>Password:</label>
							<input type  = "text" id = "password" class = "form-control">
						</div>
						<div class = "form-group">
							<label>Pilih Wisata:</label>
							<select name="nama_wisata" id="nama_wisata" id = "nama_wisata" >
								<?php 
										include 'conn.php';

									$sql=mysqli_query($conn ,"select * from wisata order by id_wisata desc") or die ('error'.mysqli_error());

										while ($data=mysqli_fetch_array($sql)) {
											?>
										<option value="<?php echo $data['id_wisata'];?>"><?php echo $data['nama'];?></option>
								<?php } ?>
								
							</select>
						</div>
						<div class = "form-group">
							<label>Status:</label>
							<select name="status" id="status" class="form-control">
								<option value="pegawai">pegawai</option>
								<option value="admin">admin</option>
							</select>
						</div>
						<div class = "form-group">
							<button type = "button" id="addnewuser" class = "btn btn-primary"><span class = "glyphicon glyphicon-plus"></span> Add</button>
						</div>
					</form>
				</div>
                </div>
            </div><br>
			<div class="row">
			<div id="userTable"></div>
			</div>
		</div>
	</div>
</body>
<script src = "js/jquery-3.1.1.js"></script>	
<script src = "js/bootstrap.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		showUser();
		//Add New
		$(document).on('click', '#addnewuser', function(){
			if ($('#nama_user').val()=="" || $('#username').val()=="" || $('#password').val()=="" || $('#nama_wisata').val()=="" || $('#status').val()=="") {
				alert('Please input data first');
			}
			else{
			$nama_user=$('#nama_user').val();
			$username=$('#username').val();		
			$password=$('#password').val();		
			$nama_wisata=$('#nama_wisata').val();
			$status=$('#status').val();
				$.ajax({
					type: "POST",
					url: "addnewUser.php",
					data: {
						nama_user: $nama_user,
						username: $username,
						password: $password,
						nama_wisata: $nama_wisata,
						status: $status,
						add: 1,
					},
					success: function(){
						showUser();
					}
				});
			}
		});
		//Delete
		$(document).on('click', '.delete', function(){
			$id=$(this).val();
				$.ajax({
					type: "POST",
					url: "delete_user.php",
					data: {
						id: $id,
						del: 1,
					},
					success: function(){
						showUser();
					}
				});
		});
		//Update
		$(document).on('click', '.updateuser', function(){
			$uid=$(this).val();
			$('#edit'+$uid).modal('hide');
			$('body').removeClass('modal-open');
			$('.modal-backdrop').remove();
			$nama_user=$('#nama_user'+$uid).val();
			$username=$('#username'+$uid).val();
			$password=$('#password'+$uid).val();
			$nama_wisata=$('#nama_wisata'+$uid).val();
			$status=$('#status'+$uid).val();
				$.ajax({
					type: "POST",
					url: "update_user.php",
					data: {
						id: $uid,
						nama_user: $nama_user,
						username: $username,
						password: $password,
						nama_wisata: $nama_wisata,
						status: $status,
						edit: 1,
					},
					success: function(){
						showUser();
					}
				});
		});
	
	});
	
	//Showing our Table
	function showUser(){
		$.ajax({
			url: 'show_user.php',
			type: 'POST',
			async: false,
			data:{
				show: 1
			},
			success: function(response){
				$('#userTable').html(response);
			}
		});
	}
	
</script>
</html>