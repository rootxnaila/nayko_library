<?php 
include '../config/connection.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Author</title>
</head>
<body>

    <h2>List of Book Authors</h2>
    <a href="tambah_penulis.php">+ Add Author</a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Author Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM penulis ORDER BY id_penulis DESC");
            $no = 1;
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['nama_penulis']; ?></td>
                <td>
                    <a href="edit_penulis.php?id=<?php echo $row['id_penulis']; ?>">Edit</a> | 
                    <a href="hapus_penulis.php?id=<?php echo $row['id_penulis']; ?>" onclick="return confirm('Are you sure?');">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>