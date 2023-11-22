<?php

// membuat koneksi
$koneksi = mysqli_connect("localhost","root","","2106129_adam");
// cek koneksi
if ($koneksi) {
    echo "database terhubung 👌";
    echo "<script> alert('database terhubung'); </script>";
}

// $query = "INSERT INTO tamu VALUES(NULL, 'ruli','2106189@itg.ac.id')";

// $query2 = "DELETE FROM tamu" ;

// mysqli_query($koneksi,$query);


