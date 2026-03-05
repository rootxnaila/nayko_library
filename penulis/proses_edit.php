<?php
include '../config/connection.php';

$id_penulis   = $_POST['id_penulis'];
$nama_penulis = $_POST['nama_penulis'];

$query = "UPDATE penulis SET nama_penulis='$nama_penulis' WHERE id_penulis='$id_penulis'";
$update = mysqli_query($koneksi, $query);

if($update){
    echo "<script>alert('Author updated successfully!'); location.href='tampil_penulis.php';</script>";
} else {
    echo "<script>alert('Failed to update author.'); location.href='edit_penulis.php?id=$id_penulis';</script>";
}
?>