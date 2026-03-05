<?php include '../config/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Categories | Nayko Library</title>
    <style>
        * { box-sizing: border-box; }
        body { font-family: Arial, Helvetica, sans-serif; background-color: #fcfcfc; color: #333; margin: 0; padding: 0; }
        
        /* Navbar Konsisten */
        .navbar { background-color: white; padding: 15px 40px; border-bottom: 1px solid #eaeaea; display: flex; justify-content: space-between; align-items: center; }
        .navbar .logo { font-size: 18px; font-weight: bold; letter-spacing: 1px; }
        .navbar a { text-decoration: none; color: #333; margin-left: 20px; font-size: 14px; }
        .navbar a:hover { text-decoration: underline; }
        
        /* Container & Header */
        .container { max-width: 1000px; margin: 40px auto; padding: 0 20px; }
        .page-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; }
        .page-header h2 { margin: 0; font-weight: normal; }
        .btn-add { background-color: #333; color: white; padding: 10px 18px; text-decoration: none; font-size: 14px; border-radius: 4px; }
        .btn-add:hover { background-color: #555; }

        /* Grid Kartu Master Data */
        .item-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 20px; }
        .item-card { background-color: white; border: 1px solid #eaeaea; padding: 20px; border-radius: 6px; text-align: center; }
        .item-card h3 { margin: 0 0 15px; font-size: 16px; font-weight: normal; color: #111; }
        
        .card-actions { border-top: 1px solid #eaeaea; padding-top: 15px; display: flex; justify-content: space-around; }
        .card-actions a { text-decoration: none; font-size: 13px; }
        .btn-edit { color: #0066cc; }
        .btn-delete { color: #cc0000; }
    </style>
</head>
<body>

    <div class="navbar">
        <div class="logo">NAYKO.LIB</div>
        <div>
            <a href="../buku/tampil_buku.php">Books</a>
            <a href="tampil_kategori.php">Categories</a>
            <a href="../penulis/tampil_penulis.php">Authors</a>
            <a href="../penerbit/tampil_penerbit.php">Publishers</a>
        </div>
    </div>

    <div class="container">
        <div class="page-header">
            <h2>Categories</h2>
            <a href="tambah_kategori.php" class="btn-add">+ Add Category</a>
        </div>

        <div class="item-grid">
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kategori DESC");
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="item-card">
                    <h3><?php echo $row['nama_kategori']; ?></h3>
                    <div class="card-actions">
                        <a href="edit_kategori.php?id=<?php echo $row['id_kategori']; ?>" class="btn-edit">Edit</a>
                        <a href="hapus_kategori.php?id=<?php echo $row['id_kategori']; ?>" class="btn-delete" onclick="return confirm('Delete this category?');">Delete</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>
</html>