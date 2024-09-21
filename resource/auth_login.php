<?php
include 'koneksi.php';

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$cek = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");

if ($cek) {
    $row = mysqli_fetch_assoc($cek);
    $hashed_password = $row['password'];

    if (password_verify($password, $hashed_password)) {
        // jika berhasil
        $_SESSION['status'] = "berhasil";
        header("location:dashboard.php");
        exit;
    } else {
        // jika gagal
        header("location:login.php?pesan=gagal");
    }
}