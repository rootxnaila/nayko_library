<?php
include '../config/connection.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='$id'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Book | Nayko Library</title>
    <style>
        /* CSS SAMA PERSIS DENGAN TAMBAH_BUKU.PHP */
        * { box-sizing: border-box; }
        body { font-family: Arial, Helvetica, sans-serif; background-color: #fcfcfc; color: #333; margin: 0; padding: 0; }
        .navbar { background-color: white; padding: 15px 40px; border-bottom: 1px solid #eaeaea; display: flex; justify-content: space-between; align-items: center; }
        .navbar .logo { font-size: 18px; font-weight: bold; letter-spacing: 1px; }
        .navbar a { text-decoration: none; color: #333; margin-left: 20px; font-size: 14px; }
        .navbar a:hover { text-decoration: underline; }
        .container { max-width: 600px; margin: 40px auto; background: white; padding: 30px 40px; border: 1px solid #eaeaea; border-radius: 6px; }
        .container h2 { margin-top: 0; margin-bottom: 25px; font-weight: normal; }
        form label { display: block; font-size: 13px; color: #666; margin-bottom: 5px; }
        form input[type="text"], form input[type="number"], form select, form textarea { width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 4px; font-family: inherit; font-size: 14px; background-color: #fafafa; }
        form input:focus, form select:focus, form textarea:focus { outline: none; border-color: #999; background-color: white; }
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
            <a href="tampil_buku.php">Books</a>
            <a href="../kategori/tampil_kategori.php">Categories</a>
            <a href="../penulis/tampil_penulis.php">Authors</a>
        </div>
    </div>

    <div class="container">
        <h2>Edit Book Detail</h2>

        <form action="proses_edit.php" method="POST">
            <input type="hidden" name="id_buku" value="<?php echo $data['id_buku']; ?>">

            <label>Book Title</label>
            <input type="text" name="judul" value="<?php echo $data['judul']; ?>" required>

            <label>Category</label>
            <select name="id_kategori" required>
                <?php
                $q_kat = mysqli_query($koneksi, "SELECT * FROM kategori");
                while($kat = mysqli_fetch_array($q_kat)) {
                    $selected = ($kat['id_kategori'] == $data['id_kategori']) ? 'selected' : '';
                    echo "<option value='".$kat['id_kategori']."' $selected>".$kat['nama_kategori']."</option>";
                }
                ?>
            </select>

            <label>Author</label>
            <select name="id_penulis" required>
                <?php
                $q_pen = mysqli_query($koneksi, "SELECT * FROM penulis");
                while($pen = mysqli_fetch_array($q_pen)) {
                    $selected = ($pen['id_penulis'] == $data['id_penulis']) ? 'selected' : '';
                    echo "<option value='".$pen['id_penulis']."' $selected>".$pen['nama_penulis']."</option>";
                }
                ?>
            </select>

            <label>Publisher</label>
            <select name="id_penerbit" required>
                <?php
                $q_pub = mysqli_query($koneksi, "SELECT * FROM penerbit");
                while($pub = mysqli_fetch_array($q_pub)) {
                    $selected = ($pub['id_penerbit'] == $data['id_penerbit']) ? 'selected' : '';
                    echo "<option value='".$pub['id_penerbit']."' $selected>".$pub['nama_penerbit']."</option>";
                }
                ?>
            </select>

            <label>ISBN</label>
            <input type="text" name="isbn" value="<?php echo $data['isbn']; ?>">

            <label>Publication Year</label>
            <input type="number" name="tahun_terbit" value="<?php echo $data['tahun_terbit']; ?>" required>

            <label>Total Pages</label>
            <input type="number" name="jumlah_halaman" value="<?php echo $data['jumlah_halaman']; ?>">

            <label>Synopsis</label>
            <textarea name="sinopsis" rows="4"><?php echo $data['sinopsis']; ?></textarea>

            <div style="margin-top: 10px;">
                <button type="submit" class="btn-submit">Update Book</button>
                <a href="tampil_buku.php" class="btn-cancel">Cancel</a>
            </div>
        </form>
    </div>

</body>
</html>