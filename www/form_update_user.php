<?php
 include"koneksi.php";

 $id =$_GET ['id'];
 $sql=mysqli_query($koneksi,"select * from user where id_user='$id'");
 $tampil=mysqli_fetch_array($sql);
?>

<form action="proses_update_user.php" method="post" class="form-horizontal" role="form" style="max-width:600px;">
	
<div class="row">
	<div class="col-sm-5">
		<input type="hidden" name="id_user" value="<?php echo $id?>">
		<div class="form-group">
			<label class="control-label" for="nama">Nama</label>
				<input type="text" class="form-control" name="nama_user" value="<?php echo $tampil['nama_user'] ?>" placeholder="input nama user">
					</div>
						<div class="form-group">
							<label class="control-label" for="pwd">Username</label>
								<input type="text" class="form-control" name="username" value="<?php echo $tampil['username']?>"placeholder="input username">
									</div>
										<div class="form-group">
											<label class="control-label" for="pwd">Password</label>
												<input type="password" class="form-control" name="password" value="<?php echo $tampil['password'] ?>" placeholder="input password">
													</div>
											</div>
								<div class="col-sm-2">
						</div>		
				<div class="col-sm-5">
						<div class="form-group">
							<label class="control-label" for="pwd">Pilih Wisata</label>

								<select name="nama_wisata" class="form-control">
									<?php 
										include 'koneksi.php';
										$sqlw=mysqli_query($koneksi ,"select * from wisata order by id_wisata desc") or die ('error'.mysqli_error());//membuat variabel lebih dari pada proses php yan berbeda di satu halaman harus di bedakan untuk mengantisipasi bentrok antara variabel yang satu dan variabel lainya.
										while ($dataw=mysqli_fetch_array($sqlw)) {
									?>
										<option <?php if ($dataw['id_wisata']==$tampil['id_wisata']) {echo 'selected="selected"';} ?> value ="<?php echo $dataw['id_wisata'];?>"><?php echo $dataw['nama_wisata'];?></option>

									<?php } ?>

								</select>
													</div>
							<div class="form-group">
								<label class="control-label" for="pwd">Pilih Status</label>
									
								<select name="status" class="form-control">
								<option <?php if($tampil['status']=="pegawai") {echo 'selected="selected"';}?> value="pegawai">pegawai</option>
								<option <?php if($tampil['status']=="admin") {echo 'selected="selected"';}?> value="admin">admin</option>
								</select>
													</div>
								
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
											<button type="submit" class="btn btn-primary">update</button>
												</div>
													</div>
														</div>
															</div>
																</form>