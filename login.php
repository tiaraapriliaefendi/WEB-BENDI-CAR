<?php
// Koneksi ke database (ganti dengan koneksi database Anda)
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "rental mobi";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk memeriksa username dan password di database
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Jika data ditemukan, redirect ke halaman utama atau halaman yang sesuai
  header("Location: home.php");
} else {
  // Jika data tidak ditemukan, tampilkan pesan error
  echo "Username atau password salah";
}

$conn->close();
?>