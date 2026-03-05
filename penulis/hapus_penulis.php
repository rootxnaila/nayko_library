<?php
include '../config/connection.php';

$id = $_GET['id'];

$query = "DELETE FROM penulis WHERE id_penulis='$id'";
$delete = mysqli_query($koneksi, $query);

if($delete){
    echo "<script>alert('Author deleted successfully!'); location.href='tampil_penulis.php';</script>";
} else {
    echo "<script>alert('Failed to delete author.'); location.href='tampil_penulis.php';</script>";
}
?>