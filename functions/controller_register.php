<?php

require_once("core/init.php");

// validasi register
if(isset($_POST['submit']) ){
    $nama = $_POST['username'];
    $pass = $_POST['password'];

    // trim - remove spasi
    if( !empty(trim($nama)) && !empty(trim($pass)) ){
        
        if(register_cek_username($nama)){
            // cek register ke database
            if(register_user($nama, $pass)){
                echo "<script>alert('Berhasil daftar')</script>";
            }
            else{
                echo "<script>alert('Gagal daftar')</script>";
            }
        }
        else{
            echo "<script>alert('Username sudah ada, anda tidak bisa daftar!')</script>";
        }
    }
    else{
        echo "<script>alert('Tidak boleh kosong')</script>";
    }
}