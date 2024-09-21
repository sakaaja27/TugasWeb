<?php
include('koneksi.php');

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Validate the input data
if (empty($username) || empty($email) || empty($password)) {
    $error = 'Please fill in all fields';
    header("location:login.php?pesan=data");
} else {
    // Hash the password using password_hash()
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Insert the user into the database
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, 'sss', $username, $email, $hashed_password);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) > 0) {
        $_SESSION['status'] = "berhasil";
        header("location:login.php?success=1");
        exit;
    } else {
        $error = 'Error registering user';
        header("location:login.php?pesan=data");
    }
}
