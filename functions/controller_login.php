<?php

require_once("core/init.php");

// validasi register
if(isset($_POST['submit']) ){
    $nama = $_POST['username'];
    $pass = $_POST['password'];

    // trim - remove spasi
    if( !empty(trim($nama)) && !empty(trim($pass)) ){
        
        if( login_cek_nama($nama) ){
            if( cek_data($nama, $pass) ){
                $_SESSION['username'] = $nama;
                header('Location: index.php');
            }
            else{
                echo "<script>alert('Data ada yang salah')</script>";
            }
        }
        else{
            echo "<script>alert('Nama belum terdaftar di database')</script>";
        }
    }
    else{
        echo "<script>alert('Tidak boleh kosong')</script>";
    }
}