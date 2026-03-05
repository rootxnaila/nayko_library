<?php
include '../config/connection.php';

$id = $_GET['id'];

$query = "DELETE FROM penerbit WHERE id_penerbit='$id'";
$delete = mysqli_query($koneksi, $query);

if($delete){
    echo "<script>alert('Publisher deleted successfully!'); location.href='tampil_penerbit.php';</script>";
} else {
    echo "<script>alert('Failed to delete publisher.'); location.href='tampil_penerbit.php';</script>";
}
?>