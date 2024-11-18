<?php
session_start(); // Mulai session

// Hapus semua session
session_unset();
session_destroy();

// Redirect ke halaman login setelah logout
header("Location: login.php"); // Pastikan path ini sesuai dengan lokasi file login.php Anda
exit();
?>
