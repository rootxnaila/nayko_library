<?php
include '../config/connection.php';
$id_user      = $_POST['id_user'];
$nama_lengkap = $_POST['nama_lengkap'];
$username     = $_POST['username'];
$password     = $_POST['password'];

if(!empty($password)) {
    $query = "UPDATE users SET nama_lengkap='$nama_lengkap', username='$username', password='$password' WHERE id_user='$id_user'";
} else {
    $query = "UPDATE users SET nama_lengkap='$nama_lengkap', username='$username' WHERE id_user='$id_user'";
}

if(mysqli_query($koneksi, $query)){
    echo "<script>alert('User updated!'); location.href='tampil_user.php';</script>";
} else {
    echo "<script>alert('Failed!'); location.href='edit_user.php?id=$id_user';</script>";
}
?>