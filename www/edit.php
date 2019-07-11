
<?php
	
	include"koneksi.php";
	$no = 1;
	$data = mysqli_query ($koneksi, " select 
											id_mahasiswa,
											nama,
											jenis_kelamin,
											telepon,
											alamat
									  from 
									  mahasiswa 
									  where id_mahasiswa = $_POST[id]");
	$row = mysqli_fetch_array ($data);
	
?>
<form role="form" id="form-edit" method="post" action="update.php">
	<div class="form-group">
		<label>Nama</label>
		<input type="hidden" name="id_mahasiswa" value="<?php echo $row['id_mahasiswa'] ; ?>">
		<input class="form-control" name="nama" value="<?php echo $row['nama'] ; ?>">
		<p style="color:red" id="error_edit_nama"></p>
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<div class="radio">
			<label>
				<input type="radio" name="jenis_kelamin" value="Laki-laki"  <?php if($row['jenis_kelamin']=='Laki-laki'){ ; ?> checked <?php } ?>>Laki-laki
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="jenis_kelamin" value="Perempuan"  <?php if($row['jenis_kelamin']=='Perempuan'){ ; ?> checked <?php } ?>>Perempuan
			</label>
		</div>
	</div>
	<div class="form-group">
		<label>Telepon</label>
		<input class="form-control" name="telepon"  value="<?php echo $row['telepon'] ; ?>">
		<p style="color:red" id="error_edit_telepon"></p>
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat" class="form-control" rows="3"><?php echo $row['alamat'] ; ?></textarea>
		<p style="color:red" id="error_edit_alamat"></p>
	</div>
	
</form>