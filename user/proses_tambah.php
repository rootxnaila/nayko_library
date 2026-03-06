<?php
include '../config/connection.php';
$nama_lengkap = $_POST['nama_lengkap'];
$username     = $_POST['username'];
$password     = $_POST['password']; // Ingat: di real project harus pakai password_hash()

$query = "INSERT INTO users (nama_lengkap, username, password) VALUES ('$nama_lengkap', '$username', '$password')";
if(mysqli_query($koneksi, $query)){
    echo "<script>alert('User added!'); location.href='tampil_user.php';</script>";
} else {
    echo "<script>alert('Failed!'); location.href='tambah_user.php';</script>";
}
?>