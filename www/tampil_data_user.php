<?php
	include "koneksi.php";

	$sql=mysqli_query($koneksi,"select * from user u, wisata w where 
	u.id_wisata=w.id_wisata 
	order by u.id_user desc") or die('mysqli_error');
?>

<center><h3> DATA USER</h3></center>
<center><a href="index.php?mod=form_user"><button class="btn btn-primary">tambah data</button></a></center>
<center><table class="table"><br/>
	<tr>
		<th>No</th>
		<th>Nama User</th>
		<th>User name</th>
		<th>Password</th>
		<th>nama wisata</th>
		<th>status</th>
		<th>option</th>
	</tr>
<?php
$no=1;
while($data=mysqli_fetch_array($sql)){
?>
		<tr>
			<td><?php echo $no;?></td>
			<td><?php echo $data['nama_user'];?></td>
			<td><?php echo $data['username'];?></td>
			<td><?php echo $data['password'];?></td>
			<td><?php echo $data['nama'];?></td>
			<td><?php echo $data['status'];?></td>
			<td><a href="index.php?mod=form_update_user&id=<?php echo $data['id_user'];?>"><button class="btn btn-warning">edit</button></a>
				<!--proses & sampe echo data wisata fungsinya agar program tau data mana yang kita update-->
			<a href="hapus_user.php?id=<?php echo $data['id_user'];?>"><button class="btn btn-danger">hapus</button></a></td>
			
		</tr>

		
	<?php $no++;} ?>
</table></center>
