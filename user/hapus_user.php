<?php
include '../config/connection.php';
$id = $_GET['id'];
$query = "DELETE FROM users WHERE id_user='$id'";
if(mysqli_query($koneksi, $query)){
    echo "<script>alert('User deleted!'); location.href='tampil_user.php';</script>";
}
?>