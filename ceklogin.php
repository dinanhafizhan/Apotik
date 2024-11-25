<?php 
    session_start();
    include 'koneksi.php';
 
    // menangkap data yang dikirim dari form login
    $nama = $_POST['nama'];
    $password = $_POST['password'];
 
    // menyeleksi data pada tabel admin dengan username dan password yang sesuai
    $data = mysqli_query($koneksi, "SELECT * FROM user WHERE nama='$nama' and password='$password'");
 
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
 
    if($cek > 0){
        $_SESSION['nama'] = $nama;
        $_SESSION['status'] = "login";
        header("location:tampil.php");
    }
    else{
        
        echo "<script> alert ('login gagal ! name dan password tidak benar ');</script>";
        echo "<script> window.location ='form_login.php';</script>";
    }
?>