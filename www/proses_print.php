<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print Laporan Wisata</title>
</head>
<script type=”text/javascript”>
var s5_taf_parent = window.location;
function popup_print(){
window.open('view.php','page','toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=750,height=600,left=50,top=50,titlebar=yes')
}
</script>
<body onLoad="window.print()">
<?php
	 include"koneksi.php";
	 if(!empty($_GET['tgl1'])){
	 	$tgl_1=$_GET['tgl1'];
	 	$tgl_2=$_GET['tgl2'];
$sql=mysqli_query($koneksi, "SELECT * FROM pengunjuang p, wisata w,user u WHERE p.id_wisata=w.id_wisata and p.id_user=u.id_user and p.tgl between '$tgl_1' and '$tgl_2' ORDER BY id_pengunjung") or die('error');
$jumlah=mysqli_num_rows($sql);

	 }else{
	 $sql=mysqli_query($koneksi, "SELECT * FROM pengunjuang p, wisata w,user u WHERE p.id_wisata=w.id_wisata and p.id_user=u.id_user ORDER BY id_pengunjung") or die('error'.mysqli_error());
	 $jumlah=mysqli_num_rows($sql);
}

if($jumlah==0){
	echo "<b>Data Kosong<br/>";
}else{
	echo "Jumlah Data : ". $jumlah;
}
?>
<table class="table" border="1" cellpadding="5" cellspacing="0" width="100%"><br/>
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
	<iframe id="printing-frame" name="print_frame" src="about:blank" style="display: none;"></iframe>


 