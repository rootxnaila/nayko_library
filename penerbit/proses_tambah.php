<?php
include '../config/connection.php';

$nama_penerbit = $_POST['nama_penerbit'];

$query = "INSERT INTO penerbit (nama_penerbit) VALUES ('$nama_penerbit')";
$insert = mysqli_query($koneksi, $query);

if($insert){
    echo "<script>alert('Publisher added successfully!'); location.href='tampil_penerbit.php';</script>";
} else {
    echo "<script>alert('Failed to add publisher.'); location.href='tambah_penerbit.php';</script>";
}
?>