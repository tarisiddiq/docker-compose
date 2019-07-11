<form action="insert_user.php" method="post" class="form-horizontal" role="form" style="max-width:600px;">
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label class="control-label" for="email">Nama</label>
				<input type="text" class="form-control" name="nama_user" placeholder="input nama user">
					</div>
						<div class="form-group">
							<label class="control-label" for="pwd">Username</label>
								<input type="text" class="form-control" name="username" placeholder="input username">
									</div>
										<div class="form-group">
											<label class="control-label" for="pwd">Password</label>
												<input type="password" class="form-control" name="password" placeholder="input password">
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

									$sql=mysqli_query($koneksi ,"select * from wisata order by id_wisata desc") or die ('error'.mysqli_error());

										while ($data=mysqli_fetch_array($sql)) {
											?>
										<option value="<?php echo $data['id_wisata'];?>"><?php echo $data['nama'];?></option>

										<?php } ?>

								</select>
							</div>
						<div class="form-group">
								<label class="control-label" for="pwd">Pilih Status</label>
									<select name="status" class="form-control">
										<option value="pegawai">pegawai</option>
											<option value="admin">admin</option>
												</select>
													</div>
								
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
											<button type="submit" class="btn btn-primary">simpan</button>
												</div>
													</div>
														</div>
															</div>
																</form>