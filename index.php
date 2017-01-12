<?php

require_once "core/init.php";

if(!isset($_SESSION['username'])){
    header('Location: login.php');
}
?>

<h1>Halaman Profile</h1>
<p>Selamat datang, <?php echo ucwords($_SESSION['username'])?></p>

<a href="logout.php">Logout</a>