<?php 

include '../config/connection.php'; 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Book Category</title>
</head>
<body>

    <h2>List of Category Book</h2>
    <a href="tambah_kategori.php">+ Add Category</a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Category Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kategori DESC");
            $no = 1;
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['nama_kategori']; ?></td>
                <td>
                    <a href="edit_kategori.php?id=<?php echo $row['id_kategori']; ?>">Edit</a> | 
                    <a href="hapus_kategori.php?id=<?php echo $row['id_kategori']; ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>