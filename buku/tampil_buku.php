<?php 
include '../config/connection.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nayko Library | Catalog</title>
    <style>
        /* Reset bawaan browser agar rapi */
        * { box-sizing: border-box; }
        
        /* Font bawaan sistem yang rapi dan simpel (nggak perlu import) */
        body { 
            font-family: Arial, Helvetica, sans-serif; 
            background-color: #fcfcfc; /* Abu-abu sangat terang */
            color: #333; 
            margin: 0; 
            padding: 0; 
        }

        /* Navbar Simpel ala itsmostly */
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

        /* Container Utama */
        .container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
        }

        /* Header Halaman & Tombol */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        .page-header h2 { margin: 0; font-weight: normal; letter-spacing: 0.5px; }
        
        .btn-add {
            background-color: #333; /* Hitam simpel */
            color: white;
            padding: 10px 18px;
            text-decoration: none;
            font-size: 14px;
            border-radius: 4px; /* Sedikit melengkung tapi tetap tegas */
        }
        .btn-add:hover { background-color: #555; }

        /* Rahasia Layout Katalog: CSS Grid */
        .book-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 25px;
        }

        /* Desain Kartu Buku (Card) */
        .book-card {
            background-color: white;
            border: 1px solid #eaeaea;
            padding: 20px;
            border-radius: 6px;
            transition: box-shadow 0.3s ease;
        }
        .book-card:hover {
            box-shadow: 0 4px 12px rgba(0,0,0,0.05); /* Efek melayang tipis saat di-hover */
        }

        .book-card h3 { margin: 0 0 10px; font-size: 18px; line-height: 1.3; }
        .book-card p { margin: 5px 0; color: #666; font-size: 13px; }
        .book-card .category { 
            display: inline-block; 
            padding: 3px 8px; 
            background-color: #eee; 
            font-size: 11px; 
            margin-bottom: 10px;
            border-radius: 3px;
        }

        /* Tombol Aksi (Edit/Hapus) di dalam Kartu */
        .card-actions {
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid #eaeaea;
            display: flex;
            justify-content: space-between;
        }
        .card-actions a {
            text-decoration: none;
            font-size: 13px;
        }
        .btn-edit { color: #0066cc; }
        .btn-delete { color: #cc0000; }
    </style>
</head>
<body>

    <div class="navbar">
        <div class="logo">NAYKO.LIB</div>
        <div>
            <a href="../buku/tampil_buku.php">Books</a>
            <a href="../kategori/tampil_kategori.php">Categories</a>
            <a href="../penulis/tampil_penulis.php">Authors</a>
        </div>
    </div>

    <div class="container">
        
        <div class="page-header">
            <h2>Collection Catalog</h2>
            <a href="tambah_buku.php" class="btn-add">+ Add New Book</a>
        </div>

        <div class="book-grid">
            <?php
            // Query JOIN tetap sama persis!
            $query = "SELECT buku.*, kategori.nama_kategori, penulis.nama_penulis, penerbit.nama_penerbit 
                      FROM buku 
                      LEFT JOIN kategori ON buku.id_kategori = kategori.id_kategori
                      LEFT JOIN penulis ON buku.id_penulis = penulis.id_penulis
                      LEFT JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit
                      ORDER BY buku.id_buku DESC";
                      
            $result = mysqli_query($koneksi, $query);
            
            // Kita ganti tabel menjadi kartu (card)
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="book-card">
                    <span class="category"><?php echo $row['nama_kategori']; ?></span>
                    <h3><?php echo $row['judul']; ?></h3>
                    <p><strong>By:</strong> <?php echo $row['nama_penulis']; ?></p>
                    <p><strong>Publisher:</strong> <?php echo $row['nama_penerbit']; ?> (<?php echo $row['tahun_terbit']; ?>)</p>
                    
                    <div class="card-actions">
                        <a href="edit_buku.php?id=<?php echo $row['id_buku']; ?>" class="btn-edit">Edit</a>
                        <a href="hapus_buku.php?id=<?php echo $row['id_buku']; ?>" class="btn-delete" onclick="return confirm('Are you sure you want to delete this book?');">Delete</a>
                    </div>
                </div>
            <?php } ?>
        </div> </div>

</body>
</html>