<?php
    $conn = mysqli_connect('db', 'user', 'test', 'akademikDb');
    
    $nim = $_GET['nim'];

    $query = "SELECT * FROM Mahasiswa WHERE nim = '$nim'";
    $result = mysqli_query($conn, $query);

    $data = mysqli_fetch_assoc($result);
    $nim = $data["nim"];
    $nama = $data["nama"];
    $jurusan = $data["jurusan"];
?>

<html>
<head>
    <title>Responsi Praktikum TCC</title>
</head>
<body>
    <div class="container">
        <h1>Detail Mahasiswa STMIK AKAKOM YOGYAKARTA</h1>

        <table class="table table-condensed">
        <tbody>
            <tr>
                <td>NIM</td>
                <td><?php echo $nim;?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?php echo $nama;?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><?php echo $jurusan;?></td>
            </tr>
            <tr>
                <td>Semester</td>
                <td><?php echo $semester;?></td>
            </tr>
            <tr>
                <td>Tahun Angkatan</td>
                <td><?php echo $tahun_angkatan;?></td>
            </tr>
        </tbody>
        </table>

        <a href='index.php'><button type="button" class="btn btn-info">Kembali</button></a>
    </div>
</body>
</html>