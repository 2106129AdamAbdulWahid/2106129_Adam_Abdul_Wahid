<?php

include'./koneksi.php';

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $jenis = $_POST['jenis'];
    $service = $_POST['service'];
    $rambut = $_POST['rambut'];
    $tanggal = $_POST['tanggal'];

    $ini_query ="INSERT INTO pendaftaran VALUE(NULL, '$nama', '$email','$umur','$alamat','$jenis','$service','$rambut','$tanggal')";

mysqli_query($koneksi, $ini_query);

header("Location: ./index.php");

exit;
    