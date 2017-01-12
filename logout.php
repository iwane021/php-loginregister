<?php

require_once("core/init.php");

$session = $_SESSION['username'];
// function logout
logout($session);

header('Location: login.php');