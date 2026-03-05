<?php 
include '../config/connection.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Publisher</title>
</head>
<body>

    <h2>List of Book Publishers</h2>
    <a href="tambah_penerbit.php">+ Add Publisher</a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Publisher Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM penerbit ORDER BY id_penerbit DESC");
            $no = 1;
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['nama_penerbit']; ?></td>
                <td>
                    <a href="edit_penerbit.php?id=<?php echo $row['id_penerbit']; ?>">Edit</a> | 
                    <a href="hapus_penerbit.php?id=<?php echo $row['id_penerbit']; ?>" onclick="return confirm('Are you sure?');">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>