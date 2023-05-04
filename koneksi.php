<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_latihan";
$koneksi = mysqli_connect ($host,$user,$pass,$db);
if ($koneksi){
    echo"Koneksi berhasil" . "<br>";
}
else {
    echo"koneksi gagal";
}
?>