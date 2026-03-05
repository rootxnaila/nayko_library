<?php
include '../config/connection.php';

$id_kategori   = $_POST['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];

$query = "UPDATE kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori'";
$update = mysqli_query($koneksi, $query);

if($update){
    echo "<script>
        alert('Category updated successfully!');
        location.href='tampil_kategori.php';
    </script>";
} else {
    echo "<script>
        alert('Failed to update category.');
        location.href='edit_kategori.php?id=$id_kategori';
    </script>";
}
?>