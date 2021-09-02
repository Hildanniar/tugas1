<?php
session_start();
if(isset($_SESSION['username'])) {
    echo '<center><h1>Selamat Datang ;)</h1><br/><a href="./logout.php">Logout</a>';
} else {
    echo '<script>window.location.replace("./login.php");</script>';
}
?>