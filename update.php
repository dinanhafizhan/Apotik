<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$iduser    = $_POST['login_id'];
$nama      = $_POST['nama'];
$nrp        = $_POST['nrp'];
$email      = $_POST['email'];
$password      = $_POST['password'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE user SET nama = '$nama', nrp = '$nrp', email = '$email', password = '$password' WHERE login_id = '$iduser'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: tampil.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>