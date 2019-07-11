<?php
	include"koneksi.php";

	$sql=mysqli_query($koneksi,"select * from wisata order by id_wisata desc") or die ('error');
?>
<center><h3> DATA WISATA </h3></center>
<center><a href="index.php?mod=form_wisata"><button class="btn btn-primary">tambah data</button></a></center>
<center><table class="table"><br/>
	<tr>
		<th>No</th>
		<th>Nama wisata</th>
		<th>Harga Tiket</th>
		<th>Option</th>
	</tr>
<?php
$no=1;
while($data=mysqli_fetch_array($sql)){
?>
		<tr>
			<td><?php echo $no;?></td>
			<td><?php echo $data['nama'];?></td>
			<td><?php echo $data['harga_tiket'];?></td>
			<td><a href="index.php?mod=form_update_data_wisata&id=<?php echo $data['id_wisata'];?>"><button class="btn btn-warning">edit</button></a><!--proses & sampe echo data wisata fungsinya agar program tau data mana yang kita update-->
			<a href="hapus_wisata.php?id=<?php echo $data['id_wisata'];?>"><button class="btn btn-danger">hapus</button></a></td>
			
		</tr>

		
	<?php $no++;} ?>
</table></center>
