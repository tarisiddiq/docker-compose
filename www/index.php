<!DOCTYPE html>
<html>
  <head>
    <style>
      table{
        width: 840px;
        margin: auto;
      }
      h1{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <h1>Tabel Biodata Mahasiswa</h1>
    <center><a href="input.php">Input Data &Gt; </a></center>
    <br/>
    <table border="1">
      <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Fakultas</th>
        <th>Jurusan</th>
        <th>IPK</th>
        <th>Pilihan</th>
      </tr>
      <?php
      // Connexion et sélection de la base
      $conn = mysqli_connect('localhost','root','','crud_sederhana');
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM mahasiswa ORDER BY nim ASC";
      $result = mysqli_query($link, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($data = mysqli_fetch_assoc($result))
      {
        // mencetak / menampilkan data
        echo "<tr>";
        echo "<td>$no</td>"; //menampilkan no urut
        echo "<td>$data[nim]</td>"; //menampilkan data nim
        echo "<td>$data[nama]</td>"; //menampilkan data nama
        echo "<td>$data[fakultas]</td>"; //menampilkan data fakultas
        echo "<td>$data[jurusan]</td>"; //menampilkan data jurusan
        echo "<td>$data[ipk]</td>"; //menampilkan data ipk
        // membuat link untuk mengedit dan menghapus data
        echo '<td>
          <a href="edit.php?id='.$data['id'].'">Edit</a> /
          <a href="hapus.php?id='.$data['id'].'"
      		  onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
        </td>';
        echo "</tr>";
        $no++; // menambah nilai nomor urut
      }
      ?>
    </table>
  </body>
</html>
