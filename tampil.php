<?php
include("koneksi.php");
$sql="select * from mahasiswa";
$proses= mysqli_query($koneksi,$sql);
$isi=mysqli_fetch_assoc($proses);
echo "NIM                   :".$isi['nim']."<br>";
echo "NAMA                  :".$isi['nama']."<br>";
echo "JENIS KELAMIN         :".$isi['jenkel']."<br>";
echo "TEMPAT TANGGAL LAHRI  :".$isi['lahir']."<br>";
echo "NOMOR HP              :".$isi['hp']."<br><br>";
?>