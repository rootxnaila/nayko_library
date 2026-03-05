<?php
include '../config/connection.php';

$id = $_GET['id'];

$query = "DELETE FROM kategori WHERE id_kategori='$id'";
$delete = mysqli_query($koneksi, $query);

if($delete){
    echo "<script>
        alert('Category deleted successfully!');
        location.href='tampil_kategori.php';
    </script>";
} else {
    echo "<script>
        alert('Failed to delete category.');
        location.href='tampil_kategori.php';
    </script>";
}
?>