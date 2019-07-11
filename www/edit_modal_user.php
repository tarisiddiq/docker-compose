<div class="modal fade" id="edit<?php echo $urow['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<?php
		$n=mysqli_query($conn,"select * from `user` where id_user='".$urow['id_user']."'");
		$nrow=mysqli_fetch_array($n);
	?>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<div class = "modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<center><h3 class = "text-success modal-title">Update Data</h3></center>
		</div>
		<form class="form-inline">
		<div class="modal-body">
			Nama User: <input type="text" value="<?php echo $nrow['nama_user']; ?>" id="nama_user<?php echo $urow['id_user']; ?>" class="form-control">
			Username: <input type="text" value="<?php echo $nrow['username']; ?>" id="username<?php echo $urow['id_user']; ?>" class="form-control">
			Password: <input type="text" value="<?php echo $nrow['password']; ?>" id="password<?php echo $urow['id_user']; ?>" class="form-control">
			Nama Wisata: <input type="text" value="<?php echo $nrow['nama_wisata']; ?>" id="nama_wisata<?php echo $urow['id_user']; ?>" class="form-control">
			Status: <input type="text" value="<?php echo $nrow['status']; ?>" id="status<?php echo $urow['id_user']; ?>" class="form-control">
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><span class = "glyphicon glyphicon-remove"></span> Cancel</button> | <button type="button" class="updateuser btn btn-success" value="<?php echo $urow['id_user']; ?>"><span class = "glyphicon glyphicon-floppy-disk"></span> Save</button>
		</div>
		</form>
    </div>
  </div>
</div>