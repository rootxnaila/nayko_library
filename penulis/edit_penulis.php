<?php
include '../config/connection.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM penulis WHERE id_penulis='$id'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Author</title>
</head>
<body>

    <h2>Edit Book Author</h2>

    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id_penulis" value="<?php echo $data['id_penulis']; ?>">
        <label>Author Name:</label><br>
        <input type="text" name="nama_penulis" value="<?php echo $data['nama_penulis']; ?>" required>
        <br><br>
        <button type="submit">Update</button>
        <a href="tampil_penulis.php">Cancel</a>
    </form>

</body>
</html>