<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Publiser</title>
</head>
<body>

    <h2>Add New Publisher</h2>

    <form action="proses_tambah.php" method="POST">
        <label>Publisher Name:</label><br>
        <input type="text" name="nama_penerbit" required>
        <br><br>
        <button type="submit">Save</button>
        <a href="tampil_penerbit.php">Cancel</a>
    </form>

</body>
</html>