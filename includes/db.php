<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'student_market';

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
  die("Kết nối thất bại: " . mysqli_connect_error());
}
?>
