<!DOCTYPE html>
<html>
<head>
    <title>Responsi Praktikum TCC</title>
    
    <meta charset="utf-8"> 
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<?php
    $conn = mysqli_connect('db', 'user', 'test', 'akademikDb');

    $nim = $_GET['nim'];
    $query = "SELECT * FROM Mahasiswa WHERE nim = '$nim'";
    $result = mysqli_query($conn, $query);
    
    $data = mysqli_fetch_assoc($result);
    $nama = $data["nama"];
    $jurusan = $data["jurusan"];
    $semester = $data["semester"];
    $tahun_angkatan = $data["tahun_angkatan"];

?>

<body>
    <div class='container'>
        <h1>Tambah Data</h1>

        <form class="form-horizontal" action="process.php" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nim">NIM:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nim" value="<?php echo $nim;?>" readonly="on">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nama">Nama:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" value="<?php echo $nama;?>">
                </div>
            </div>
            <div class="form-group">
                <label for="sel2">Jurusan:</label>
                <select class="form-control" name="prodi">
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                    <option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
                    <option value="Teknik Komputer">Teknik Komputer</option>
                </select>
            </div> 
            <div class="form-group">
                <label class="control-label col-sm-2" for="nama">Semester:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" placeholder="Semester">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nama">Tahun Angkatan:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" placeholder="Angkatan">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-info" value="Update" name="proses">
                </div>
            </div>
        </form> 
    </div>
</body>
</html>