<?php
include '../config/connection.php';

$nama_kategori = $_POST['nama_kategori'];

$query = "INSERT INTO kategori (nama_kategori) VALUES ('$nama_kategori')";
$insert = mysqli_query($koneksi, $query);

if($insert){
    echo "<script>
        alert('Category added successfully!');
        location.href='tampil_kategori.php';
    </script>";
} else {
    echo "<script>
        alert('Failed add category.');
        location.href='tambah_kategori.php';
    </script>";
}
?>