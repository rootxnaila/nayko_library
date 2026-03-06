<?php 
include '../config/connection.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nayko Library | Catalog</title>
    <style>
        * { box-sizing: border-box; }
        body { 
            font-family: Arial, Helvetica, sans-serif; 
            background-color: #fcfcfc; 
            color: #333; 
            margin: 0; 
            padding: 0; 
        }

        .navbar {
            background-color: white;
            padding: 15px 40px;
            border-bottom: 1px solid #eaeaea;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar .logo { font-size: 18px; font-weight: bold; letter-spacing: 1px; }
        .navbar a { text-decoration: none; color: #333; margin-left: 20px; font-size: 14px; }
        .navbar a:hover { text-decoration: underline; }

        .container { max-width: 1100px; margin: 40px auto; padding: 0 20px; }

        .page-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; }
        .page-header h2 { margin: 0; font-weight: normal; }
        
        .btn-add { background-color: #333; color: white; padding: 10px 18px; text-decoration: none; font-size: 14px; border-radius: 4px; }
        .btn-add:hover { background-color: #555; }

        .styled-table { width: 100%; border-collapse: collapse; background-color: white; border: 1px solid #eaeaea; border-radius: 6px; overflow: hidden; }
        .styled-table thead { background-color: #fafafa; }
        .styled-table th, .styled-table td { padding: 15px 20px; text-align: left; border-bottom: 1px solid #eaeaea; }
        .styled-table th { font-size: 13px; color: #666; font-weight: normal; }
        .styled-table td { font-size: 14px; }
        .styled-table tbody tr:hover { background-color: #f9f9f9; }
        
        .action-links a { text-decoration: none; font-size: 13px; margin-right: 10px; }
        .btn-edit { color: #0066cc; }
        .btn-delete { color: #cc0000; }
        .badge { background-color: #eee; padding: 3px 8px; font-size: 11px; border-radius: 3px; }
    </style>
</head>
<body>

    <div class="navbar">
        <div class="logo">NAYKO.LIB</div>
        <div>
            <a href="tampil_buku.php">Books</a>
            <a href="../kategori/tampil_kategori.php">Categories</a>
            <a href="../penulis/tampil_penulis.php">Authors</a>
            <a href="../penerbit/tampil_penerbit.php">Publishers</a>
            <a href="../user/tampil_user.php">Users</a>
        </div>
    </div>

    <div class="container">
        <div class="page-header">
            <h2>Collection Catalog</h2>
            <a href="tambah_buku.php" class="btn-add">+ Add New Book</a>
        </div>

        <table class="styled-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Category</th>
                    <th>Book Title</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT buku.*, kategori.nama_kategori, penulis.nama_penulis, penerbit.nama_penerbit 
                          FROM buku 
                          LEFT JOIN kategori ON buku.id_kategori = kategori.id_kategori
                          LEFT JOIN penulis ON buku.id_penulis = penulis.id_penulis
                          LEFT JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit
                          ORDER BY buku.id_buku DESC";
                          
                $result = mysqli_query($koneksi, $query);
                $no = 1;
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td style="color: #999;"><?php echo $no++; ?></td>
                        <td><span class="badge"><?php echo $row['nama_kategori']; ?></span></td>
                        <td><strong><?php echo $row['judul']; ?></strong></td>
                        <td><?php echo $row['nama_penulis']; ?></td>
                        <td><?php echo $row['nama_penerbit']; ?> (<?php echo $row['tahun_terbit']; ?>)</td>
                        <td class="action-links">
                            <a href="edit_buku.php?id=<?php echo $row['id_buku']; ?>" class="btn-edit">Edit</a>
                            <a href="hapus_buku.php?id=<?php echo $row['id_buku']; ?>" class="btn-delete" onclick="return confirm('Delete this book?');">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

</body>
</html>