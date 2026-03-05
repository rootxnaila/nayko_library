<?php
include '../config/connection.php';

$judul          = $_POST['judul'];
$id_kategori    = $_POST['id_kategori'];
$id_penulis     = $_POST['id_penulis'];
$id_penerbit    = $_POST['id_penerbit'];
$isbn           = $_POST['isbn'];
$tahun_terbit   = $_POST['tahun_terbit'];
$jumlah_halaman = $_POST['jumlah_halaman'];
$sinopsis       = $_POST['sinopsis'];

$query = "INSERT INTO buku (judul, id_kategori, id_penulis, id_penerbit, isbn, tahun_terbit, jumlah_halaman, sinopsis) 
          VALUES ('$judul', '$id_kategori', '$id_penulis', '$id_penerbit', '$isbn', '$tahun_terbit', '$jumlah_halaman', '$sinopsis')";

$insert = mysqli_query($koneksi, $query);

if($insert){
    echo "<script>alert('Book added successfully!'); location.href='tampil_buku.php';</script>";
} else {
    echo "<script>alert('Failed to add book.'); location.href='tambah_buku.php';</script>";
}
?>