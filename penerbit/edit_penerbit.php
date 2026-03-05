<?php
include '../config/connection.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM penerbit WHERE id_penerbit='$id'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Publisher</title>
</head>
<body>

    <h2>Edit Book Publisher</h2>

    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id_penerbit" value="<?php echo $data['id_penerbit']; ?>">
        <label>Publisher Name:</label><br>
        <input type="text" name="nama_penerbit" value="<?php echo $data['nama_penerbit']; ?>" required>
        <br><br>
        <button type="submit">Update</button>
        <a href="tampil_penerbit.php">Cancel</a>
    </form>

</body>
</html>