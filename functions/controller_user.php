<?php

function register_user($nama, $pass){
    global $link;
    // mencegah sql injection
    $nama = mysqli_real_escape_string($link, $nama);
    $pass = mysqli_real_escape_string($link, $pass);
    // Encrypt password
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $query = "INSERT INTO users(username, password) VALUES('$nama', '$pass')";

    if( mysqli_query($link, $query) ) return true;
    else return false;
}

// cegah duplikasi username
function register_cek_username($nama){
    global $link;
    // mencegah sql injection
    $nama = mysqli_real_escape_string($link, $nama);

    $query = "SELECT * FROM users where username = '$nama'";

    if($result = mysqli_query($link, $query)){
        if(mysqli_num_rows($result) == 0) return true;
        else return false;
    }

}

// cek nama terdaftar / belum
function login_cek_nama($nama){
    global $link;

    $nama = mysqli_real_escape_string($link, $nama);

    $query = "SELECT * FROM users where username = '$nama'";

    if($result = mysqli_query($link, $query)){
        if(mysqli_num_rows($result) > 0) return true;
        else return false;
    }
}

// cek password Login
function cek_data($nama, $pass){
    global $link;
    // mencegah sql injection
    $nama = mysqli_real_escape_string($link, $nama);
    $pass = mysqli_real_escape_string($link, $pass);

    $query = "SELECT password FROM users WHERE username = '$nama'";

    $result = mysqli_query($link, $query);
    $hash = mysqli_fetch_assoc($result);

    if( password_verify($pass, $hash['password']) ) return true;
    else return false;
}

// clear all session
function logout($session){
    unset($session);
    session_destroy();
}