<?php
include "koneksi.php";
$id=$_GET['id'];
$sql=mysqli_query($koneksi, "select * from wisata where id_wisata='$id'");
$tampil=mysqli_fetch_array($sql);
?>

<form action="proses_update_wisata.php" method="post" class="form-horizontal" role="form" style="max-width:250px;">
		<input type="hidden" name="id_wisata" value="<?php echo $id;?>">
		<div class="form-group">
			<label class="control-label" for="nama wisata">Nama Wisata</label>
				<input type="text" class="form-control" name="nama_wisata" value="<?php echo $tampil['nama_wisata']?>" placeholder="enter nama wisata">
					</div>
				<div class="form-group">
			<label class="control-label" for="harga tiket">Harga Tiket</label>
		<input type="text" class="form-control" name="harga_tiket" value="<?php echo $tampil['harga_tiket']?>" placeholder="enter harga tiket">
	</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<div class="checkbox">
					<label><input type="checkbox">Remember me</label>
						</div>
							</div>
								</div>
							<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">simpan</button>
				</div>
			</div>
		</form>

 