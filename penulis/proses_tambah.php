<?php
include '../config/connection.php';

$nama_penulis = $_POST['nama_penulis'];

$query = "INSERT INTO penulis (nama_penulis) VALUES ('$nama_penulis')";
$insert = mysqli_query($koneksi, $query);

if($insert){
    echo "<script>alert('Author added successfully!'); location.href='tampil_penulis.php';</script>";
} else {
    echo "<script>alert('Failed to add author.'); location.href='tambah_penulis.php';</script>";
}
?>