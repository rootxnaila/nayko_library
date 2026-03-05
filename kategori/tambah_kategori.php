<?php include '../config/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Category | Nayko Library</title>
    <style>
        * { box-sizing: border-box; }
        body { font-family: Arial, Helvetica, sans-serif; background-color: #fcfcfc; color: #333; margin: 0; padding: 0; }
        .navbar { background-color: white; padding: 15px 40px; border-bottom: 1px solid #eaeaea; display: flex; justify-content: space-between; align-items: center; }
        .navbar .logo { font-size: 18px; font-weight: bold; letter-spacing: 1px; }
        .navbar a { text-decoration: none; color: #333; margin-left: 20px; font-size: 14px; }
        .navbar a:hover { text-decoration: underline; }
        
        .container { max-width: 500px; margin: 40px auto; background: white; padding: 30px 40px; border: 1px solid #eaeaea; border-radius: 6px; }
        .container h2 { margin-top: 0; margin-bottom: 25px; font-weight: normal; }
        
        form label { display: block; font-size: 13px; color: #666; margin-bottom: 5px; }
        form input[type="text"] { width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 4px; font-family: inherit; font-size: 14px; background-color: #fafafa; }
        form input:focus { outline: none; border-color: #999; background-color: white; }
        
        .btn-submit { background-color: #333; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 14px; }
        .btn-submit:hover { background-color: #555; }
        .btn-cancel { color: #666; text-decoration: none; margin-left: 15px; font-size: 14px; }
        .btn-cancel:hover { text-decoration: underline; color: #333; }
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
        <h2>Add Category</h2>
        <form action="proses_tambah.php" method="POST">
            <label>Category Name</label>
            <input type="text" name="nama_kategori" required>
            
            <div style="margin-top: 10px;">
                <button type="submit" class="btn-submit">Save Category</button>
                <a href="tampil_kategori.php" class="btn-cancel">Cancel</a>
            </div>
        </form>
    </div>

</body>
</html>