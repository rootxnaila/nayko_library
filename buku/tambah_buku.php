<?php include '../config/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Book | Nayko Library</title>
    <style>
        * { box-sizing: border-box; }
        body { 
            font-family: Arial, Helvetica, sans-serif; 
            background-color: #fcfcfc; 
            color: #333; 
            margin: 0; padding: 0; 
        }

        /* Navbar */
        .navbar {
            background-color: white; padding: 15px 40px;
            border-bottom: 1px solid #eaeaea;
            display: flex; justify-content: space-between; align-items: center;
        }
        .navbar .logo { font-size: 18px; font-weight: bold; letter-spacing: 1px; }
        .navbar a { text-decoration: none; color: #333; margin-left: 20px; font-size: 14px; }
        .navbar a:hover { text-decoration: underline; }

        /* Form Container Minimalis */
        .container {
            max-width: 600px; /* Dibuat lebih sempit agar rapi untuk form */
            margin: 40px auto;
            background: white;
            padding: 30px 40px;
            border: 1px solid #eaeaea;
            border-radius: 6px;
        }

        .container h2 { margin-top: 0; margin-bottom: 25px; font-weight: normal; }

        /* Style Input & Select */
        form label {
            display: block; font-size: 13px; color: #666; margin-bottom: 5px;
        }
        form input[type="text"], form input[type="number"], form select, form textarea {
            width: 100%; padding: 10px; margin-bottom: 20px;
            border: 1px solid #ddd; border-radius: 4px;
            font-family: inherit; font-size: 14px;
            background-color: #fafafa;
        }
        form input:focus, form select:focus, form textarea:focus {
            outline: none; border-color: #999; background-color: white;
        }

        /* Tombol */
        .btn-submit {
            background-color: #333; color: white; padding: 10px 20px;
            border: none; border-radius: 4px; cursor: pointer; font-size: 14px;
        }
        .btn-submit:hover { background-color: #555; }
        
        .btn-cancel {
            color: #666; text-decoration: none; margin-left: 15px; font-size: 14px;
        }
        .btn-cancel:hover { text-decoration: underline; color: #333; }
    </style>
</head>
<body>

    <div class="navbar">
        <div class="logo">NAYKO.LIB</div>
        <div>
            <a href="tampil_buku.php">Books</a>
            <a href="../kategori/tampil_kategori.php">Categories</a>
            <a href="../penulis/tampil_penulis.php">Authors</a>
        </div>
    </div>

    <div class="container">
        <h2>Add New Book</h2>

        <form action="proses_tambah.php" method="POST">
            <label>Book Title</label>
            <input type="text" name="judul" required>

            <label>Category</label>
            <select name="id_kategori" required>
                <option value="">- Select Category -</option>
                <?php
                $q_kat = mysqli_query($koneksi, "SELECT * FROM kategori");
                while($kat = mysqli_fetch_array($q_kat)) {
                    echo "<option value='".$kat['id_kategori']."'>".$kat['nama_kategori']."</option>";
                }
                ?>
            </select>

            <label>Author</label>
            <select name="id_penulis" required>
                <option value="">- Select Author -</option>
                <?php
                $q_pen = mysqli_query($koneksi, "SELECT * FROM penulis");
                while($pen = mysqli_fetch_array($q_pen)) {
                    echo "<option value='".$pen['id_penulis']."'>".$pen['nama_penulis']."</option>";
                }
                ?>
            </select>

            <label>Publisher</label>
            <select name="id_penerbit" required>
                <option value="">- Select Publisher -</option>
                <?php
                $q_pub = mysqli_query($koneksi, "SELECT * FROM penerbit");
                while($pub = mysqli_fetch_array($q_pub)) {
                    echo "<option value='".$pub['id_penerbit']."'>".$pub['nama_penerbit']."</option>";
                }
                ?>
            </select>

            <label>ISBN</label>
            <input type="text" name="isbn">

            <label>Publication Year</label>
            <input type="number" name="tahun_terbit" required>

            <label>Total Pages</label>
            <input type="number" name="jumlah_halaman">

            <label>Synopsis</label>
            <textarea name="sinopsis" rows="4"></textarea>

            <div style="margin-top: 10px;">
                <button type="submit" class="btn-submit">Save Book</button>
                <a href="tampil_buku.php" class="btn-cancel">Cancel</a>
            </div>
        </form>
    </div>

</body>
</html>