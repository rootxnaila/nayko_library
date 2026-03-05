<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Add Category</title>
</head>
<body>

    <h2>Add New Category</h2>

    <form action="proses_tambah.php" method="POST">
        <label>Category Name:</label><br>
        <input type="text" name="nama_kategori" required>
        <br><br>
        <button type="submit">Save</button>
        <a href="tampil_kategori.php">Cancel</a>
    </form>

</body>
</html>