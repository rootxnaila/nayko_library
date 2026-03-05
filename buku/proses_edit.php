<?php
include '../config/connection.php';

$id_buku        = $_POST['id_buku'];
$judul          = $_POST['judul'];
$id_kategori    = $_POST['id_kategori'];
$id_penulis     = $_POST['id_penulis'];
$id_penerbit    = $_POST['id_penerbit'];
$isbn           = $_POST['isbn'];
$tahun_terbit   = $_POST['tahun_terbit'];
$jumlah_halaman = $_POST['jumlah_halaman'];
$sinopsis       = $_POST['sinopsis'];

$query = "UPDATE buku SET 
            judul='$judul', 
            id_kategori='$id_kategori', 
            id_penulis='$id_penulis', 
            id_penerbit='$id_penerbit', 
            isbn='$isbn', 
            tahun_terbit='$tahun_terbit', 
            jumlah_halaman='$jumlah_halaman', 
            sinopsis='$sinopsis' 
          WHERE id_buku='$id_buku'";

$update = mysqli_query($koneksi, $query);

if($update){
    echo "<script>alert('Book updated successfully!'); location.href='tampil_buku.php';</script>";
} else {
    echo "<script>alert('Failed to update book.'); location.href='edit_buku.php?id=$id_buku';</script>";
}
?>