<?php include '../config/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users | Nayko Library</title>
    <style>
        * { box-sizing: border-box; } body { font-family: Arial, sans-serif; background: #fcfcfc; color: #333; margin: 0; padding: 0; }
        .navbar { background: white; padding: 15px 40px; border-bottom: 1px solid #eaeaea; display: flex; justify-content: space-between; align-items: center; }
        .navbar a { text-decoration: none; color: #333; margin-left: 20px; font-size: 14px; }
        .container { max-width: 1000px; margin: 40px auto; padding: 0 20px; }
        .page-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; }
        .btn-add { background: #333; color: white; padding: 10px 18px; text-decoration: none; font-size: 14px; border-radius: 4px; }
        .item-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px; }
        .item-card { background: white; border: 1px solid #eaeaea; padding: 20px; border-radius: 6px; }
        .card-actions { border-top: 1px solid #eaeaea; padding-top: 15px; margin-top: 15px; display: flex; justify-content: space-between; }
        .card-actions a { text-decoration: none; font-size: 13px; }
    </style>
</head>
<body>
    <div class="navbar">
        <div><strong>NAYKO.LIB</strong></div>
    </div>
    <div class="container">
        <div class="page-header">
            <h2>System Users</h2>
            <a href="tambah_user.php" class="btn-add">+ Add User</a>
        </div>
        <div class="item-grid">
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM users ORDER BY id_user DESC");
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="item-card">
                    <h3 style="margin:0 0 5px;"><?php echo $row['nama_lengkap']; ?></h3>
                    <p style="margin:0; font-size:13px; color:#666;">Username: @<?php echo $row['username']; ?></p>
                    <div class="card-actions">
                        <a href="edit_user.php?id=<?php echo $row['id_user']; ?>" style="color:#0066cc;">Edit</a>
                        <a href="hapus_user.php?id=<?php echo $row['id_user']; ?>" style="color:red;" onclick="return confirm('Delete this user?');">Delete</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>