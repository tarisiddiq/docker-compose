<?php
    $conn = mysqli_connect('db', 'user', 'test', 'akademikDb');
    $proses = $_POST['proses'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    if($proses == "Update") {
       $query = "UPDATE Mahasiswa SET
                nama = '$nama',
                jurusan = '$jurusan'
                WHERE nim = '$nim'
                ";
    } else {
        $query = "INSERT INTO Mahasiswa SET
                nim = '$nim',
                nama = '$nama',
                jurusan = '$jurusan'
                ";
    }
    $result = mysqli_query($conn, $query);

    if($result){
        header('location: index.php');
    } else {
        echo mysqli_error($conn);
    }
?>