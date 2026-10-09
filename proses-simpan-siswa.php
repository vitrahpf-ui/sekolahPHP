<?php

include_once('koneksi.php');

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST["jurusan"];

    $query = mysqli_query($db, "INSERT INTO siswa (nama, nis, kelas, jurusan) VALUES('$nama', '$nis', '$kelas', '$jurusan')");
}
if ($query){
    header('location: index.php');
    exit();

} else {
    echo 'error' . mysqli_error($db);
}
?>