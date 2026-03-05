<?php
include '../config/connection.php';

$id_penerbit   = $_POST['id_penerbit'];
$nama_penerbit = $_POST['nama_penerbit'];

$query = "UPDATE penerbit SET nama_penerbit='$nama_penerbit' WHERE id_penerbit='$id_penerbit'";
$update = mysqli_query($koneksi, $query);

if($update){
    echo "<script>alert('Publisher updated successfully!'); location.href='tampil_penerbit.php';</script>";
} else {
    echo "<script>alert('Failed to update publisher.'); location.href='edit_penerbit.php?id=$id_penerbit';</script>";
}
?>