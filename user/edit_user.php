<?php
include '../config/connection.php';
if(!isset($_GET['id']) || empty($_GET['id'])) { echo "<script>location.href='tampil_user.php';</script>"; exit; }
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM users WHERE id_user='$id'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User | Nayko Library</title>
    <style>
        * { box-sizing: border-box; } body { font-family: Arial, sans-serif; background: #fcfcfc; color: #333; margin: 0; padding: 0; }
        .navbar { background: white; padding: 15px 40px; border-bottom: 1px solid #eaeaea; display: flex; justify-content: space-between; align-items: center; } .navbar a { text-decoration: none; color: #333; margin-left: 20px; font-size: 14px; }
        .container { max-width: 500px; margin: 40px auto; background: white; padding: 30px 40px; border: 1px solid #eaeaea; border-radius: 6px; }
        form label { display: block; font-size: 13px; color: #666; margin-bottom: 5px; } form input { width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 4px; background: #fafafa; }
        .btn-submit { background: #333; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; } .btn-cancel { color: #666; text-decoration: none; margin-left: 15px; }
    </style>
</head>
<body>
    <div class="navbar">
        <div><strong>NAYKO.LIB</strong></div>
    <div class="container">
        <h2>Edit User</h2>
        <form action="proses_edit.php" method="POST">
            <input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
            
            <label>Full Name</label>
            <input type="text" name="nama_lengkap" value="<?php echo $data['nama_lengkap']; ?>" required>
            
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $data['username']; ?>" required>
            
            <label>Password (Isi jika ingin diubah)</label>
            <input type="password" name="password" placeholder="Biarkan kosong jika tidak diubah">
            
            <button type="submit" class="btn-submit">Update User</button>
            <a href="tampil_user.php" class="btn-cancel">Cancel</a>
        </form>
    </div>
</body>
</html>