<?php
    if($_POST){
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telpon = $_POST['telpon'];
        $password = $_POST['password'];

        include "koneksi.php";
        $input = mysqli_query($koneksi, "INSERT INTO pelanggan (nama, alamat, telp, password) VALUES ('{$nama}','{$alamat}','{$telpon}','".md5($password)."')");       
        
        if ($input) {
            echo "<script>alert('BERHASIL');location.href='index.php';</script>";
        }
        else{
            echo "<script>alert('gagal');location.href='registrasi.php';</script>";
        }
    }
?>