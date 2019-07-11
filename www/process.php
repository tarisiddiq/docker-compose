<?php
    $conn = mysqli_connect('db', 'user', 'test', 'akademikDb');
    $proses = $_POST['proses'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $semester = $_POST['semester'];
    $tahun_angkatan = $_POST['tahun_angkatan'];

    if($proses == "Update") {
       $query = "UPDATE Mahasiswa SET
                nama = '$nama',
                jurusan = '$jurusan',
                semester = '$semester',
                tahun_angkatan = '$tahun_angkatan'
                WHERE nim = '$nim'
                ";
    } else {
        $query = "INSERT INTO Mahasiswa SET
                nim = '$nim',
                nama = '$nama',
                jurusan = '$jurusan',
                semester = '$semester',
                tahun_angkatan = '$tahun_angkatan'
                ";
    }
    $result = mysqli_query($conn, $query);

    if($result){
        header('location: index.php');
    } else {
        echo mysqli_error($conn);
    }
?>