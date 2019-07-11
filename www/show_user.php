<?php
	include('conn.php');
	if(isset($_POST['show'])){
		?>
		<center>
		<table class = "table table-bordered alert-warning table-hover">
			<thead>
				<th>Nama User</th>
				<th>Username</th>
				<th>Password</th>
				<th>Nama Wisata</th>
				<th>Status</th>
				<th>Action</th>

			</thead>
				<tbody>
					<?php
						$quser=mysqli_query($conn,"select * from `user`");
						while($urow=mysqli_fetch_array($quser)){
							?>
								<tr>
									<td><?php echo $urow['nama_user']; ?></td>
									<td><?php echo $urow['username']; ?></td>
									<td><?php echo $urow['password']; ?></td>
									<td><?php echo $urow['nama_wisata']; ?></td>
									<td><?php echo $urow['status']; ?></td>
									<td><button class="btn btn-success" data-toggle="modal" data-target="#edit<?php echo $urow['id_user']; ?>"><span class = "glyphicon glyphicon-pencil"></span> Edit</button> | <button class="btn btn-danger delete" value="<?php echo $urow['id_user']; ?>"><span class = "glyphicon glyphicon-trash"></span> Delete</button>
									<?php include('edit_modal_user.php'); ?>
									</td>
								</tr>
							<?php
						}
					
					?>
				</tbody>
			</table>
			</center>
		<?php
	}

?>