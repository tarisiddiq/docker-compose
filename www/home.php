<script type="text/javascript">   
     function printDiv(elementId) {
    var a = document.getElementById('print').value;
    var b = document.getElementById(elementId).innerHTML;
    window.frames["print_frame"].document.title = document.title;
    window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
    window.frames["print_frame"].window.focus();
    window.frames["print_frame"].window.print();
}
</script>

 <center>hay..!! <b> <?php  echo $_SESSION ['username']; ?></b> <br/>

 Selamat Datang Di <?php // echo $datau ['nama_user']; ?>
 
 <b><?php echo $datau ['nama'];?></b></center><br/><hr/>

<div class="row">
	<div class="col-sm-4">
	<form action="" method="post" class="form-horizontal" role="form" style="max-width:300px;">
		<div class="form-group">
			<label class="control-label" for="email">Jumlah Pengunjung</label>
				<input type="text" class="form-control" name="jumlah" placeholder="input jumlah pengunjung" required="required">
					</div>
						<div class="form-group">
								<button type="submit" class="btn btn-primary" name="cetak">cetak</button>
									</div>
										</form>
										</div>
 <div class="col-sm-7" style="border-left:2px black solid">
 <?php if(isset($_POST['cetak'])){?>
	<?php
		include"koneksi.php";
		
		$code=date("ymd")."".rand();
		$jumlah=$_POST['jumlah'];
		$id_wisata=$datau['id_wisata'];
		
		$sql=mysqli_query($koneksi, "INSERT INTO pengunjuang(kode_tiket, id_pengunjung, id_wisata,id_user, tgl, jumlah) VALUES ('$code','','$id_wisata','".$datau['id_user']."','".date("Y-m-d")."','$jumlah')")or die (''.mysqli_error());
	?>

 <a href="javascript:printDiv('print');"><button class="btn btn-primary"> Print Tiket</button></a><br>

 
 <div style="border:1px black solid; padding:5px; max-width:300px; margin-left:200px;">
 	<div id="print">
 	<div align="center">
	<center><h3><?php echo $datau ['nama'];?></h3></center>
	<hr>
	<h4 align="center">Tiket Masuk</h4>
	<p>
	Kode Tiket :<?php echo $code;?><br>
	Tanggal : <?php echo date("d-m-y"); ?><br>
	Jumlah :<?php echo $jumlah;?><br>
	Harga : Rp.<?php echo number_format($datau['harga_tiket']);?> <hr>
	<h4>Total : Rp.<?php echo number_format($_POST['jumlah']*$datau['harga_tiket']);?></h4>
	<hr>
	<center>
	Tiket tidak boleh hilang <br>
	jika hilang akan dikenakan denda.<br><br>
	(<?php echo $datau['nama_user'];?>)
	</center>
	</p>
	 </div>
	</div>
	<?php }else{echo "Silahkan Isi Form di Samping!!";}?>

 
	</div>
	<iframe id="printing-frame" name="print_frame" src="about:blank" style="display: none;"></iframe>
 
									

 


