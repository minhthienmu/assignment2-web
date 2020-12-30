<?php
$username = "root"; // Khai báo username
$password = "";      // Khai báo password
$server   = "localhost";   // Khai báo server
$dbname   = "skt";      // Khai báo database

// Kết nối database tintuc
$conn = new mysqli($server, $username, $password, $dbname);

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if ($conn->connect_error) {
    die("Không kết nối :" . $conn->connect_error);
    exit();
}