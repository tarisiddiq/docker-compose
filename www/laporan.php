<form action="" method="post">
<div class="row">
<form>
	<div class="col-sm-2">
	<div class="form-group">
			<label class="control-label" for="nama wisata">dari tanggal</label>
				<input type="date" class="form-control" name="tgl1" required="required">
					</div>
						</div>
	
	<div class="col-sm-2">
	<div class="form-group">
			<label class="control-label" for="nama wisata">sampai tanggal</label>
				<input type="date" class="form-control" name="tgl2" required="required">
					</div>
				      </div>
	<div class="col-sm-8"><br/>
	<div class="form-group">
					<button type="submit" class="btn btn-danger" name="filter">filter</button>
			
					<a href="proses_print.php?tgl1=<?php if(isset($_POST['filter'])) {echo $_POST['tgl1'];}?>&tgl2=<?php if(isset($_POST['filter'])) {echo $_POST['tgl2'];}?>"target="blank"><button type="button" class="btn btn-primary">print</button></a>
				</div>
			</div>

</form>
</div>
<?php
	 include"koneksi.php";
	 if(isset($_POST['filter'])){
	 	$tgl_1=$_POST['tgl1'];
	 	$tgl_2=$_POST['tgl2'];
$sql=mysqli_query($koneksi, "SELECT * FROM pengunjuang p, wisata w,user u WHERE p.id_wisata=w.id_wisata and p.id_user=u.id_user and p.tgl between '$tgl_1' and '$tgl_2' ORDER BY id_pengunjung") or die('error');
$jumlah=mysqli_num_rows($sql);

	 }else{
	 $sql=mysqli_query($koneksi, "SELECT * FROM pengunjuang p, wisata w,user u WHERE p.id_wisata=w.id_wisata and p.id_user=u.id_user ORDER BY id_pengunjung") or die('error');
	 $jumlah=mysqli_num_rows($sql);
}
if($jumlah==0){
	echo "<b>Data Kosong<br/>";
}else{
	echo "Jumlah Data : ". $jumlah;
}
?>
<table class="table"><br/>
	<tr>
		<th>No</th>
		<th>Tanggal</th>
		<th>Wisata</th>
		<th>Pegawai</th>
		<th>Harga Tiket</th>
		<th>Jumlah</th>
		<th>Total</th>
	</tr>
	 <?php
					$no=1;
					while($data=mysqli_fetch_array($sql)){
	
					  ?>
				   <tr>
                      <td><?php echo $no ; ?></td>
                      <td><?php echo $data['tgl'] ; ?></td>
                      <td><?php echo $data['nama'] ; ?></td>
                      <td><?php echo $data['nama_user'] ; ?></td>
                      <td><?php echo $data['harga_tiket'] ; ?></td>
                      <td><?php echo $data['jumlah'] ; ?></td>
                      <td><?php echo $data['jumlah'] * $data['harga_tiket'] ; ?></td>
                   </tr>              
                   <?php $no++;
				  
				    }?>    
</table>


 