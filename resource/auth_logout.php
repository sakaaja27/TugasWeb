<?php  

// Lampirkan dbconfig  
require_once "koneksi.php";  

// Logout! hapus session user  
session_destroy();   

// Redirect ke login  
header('location:login.php');