<?php
include '../config/connection.php';
$id = $_GET['id'];

$query = "DELETE FROM buku WHERE id_buku='$id'";
$delete = mysqli_query($koneksi, $query);

if($delete){
    echo "<script>alert('Book deleted successfully!'); location.href='tampil_buku.php';</script>";
} else {
    echo "<script>alert('Failed to delete book.'); location.href='tampil_buku.php';</script>";
}
?>