<?php
include '../config/connection.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori='$id'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Category</title>
</head>
<body>

    <h2>Edit Category Book</h2>

    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id_kategori" value="<?php echo $data['id_kategori']; ?>">
        
        <label>Category Name:</label><br>
        <input type="text" name="nama_kategori" value="<?php echo $data['nama_kategori']; ?>" required>
        <br><br>
        
        <button type="submit">Update</button>
        <a href="tampil_kategori.php">Cancel</a>
    </form>

</body>
</html>