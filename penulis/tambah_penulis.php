<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Author</title>
</head>
<body>

    <h2>Add New Author</h2>

    <form action="proses_tambah.php" method="POST">
        <label>Author Name:</label><br>
        <input type="text" name="nama_penulis" required>
        <br><br>
        <button type="submit">Save</button>
        <a href="tampil_penulis.php">Cancel</a>
    </form>

</body>
</html>