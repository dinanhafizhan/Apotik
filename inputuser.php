<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$password = $_POST['password'];
$nrp = $_POST['nrp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
// menginput data ke database
mysqli_query($koneksi,"insert into user (nama, password, nrp, alamat, email) values ('$nama','$password','$nrp','$alamat','$email')");
    
// mengalihkan halaman kembali ke index.php
header("location:tampil.php");
 
?>