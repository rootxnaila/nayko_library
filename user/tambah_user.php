<?php include '../config/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add User | Nayko Library</title>
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
    </div>
    <div class="container">
        <h2>Add System User</h2>
        <form action="proses_tambah.php" method="POST">
            <label>Full Name</label>
            <input type="text" name="nama_lengkap" required>
            
            <label>Username</label>
            <input type="text" name="username" required>
            
            <label>Password</label>
            <input type="password" name="password" required>
            
            <button type="submit" class="btn-submit">Save User</button>
            <a href="tampil_user.php" class="btn-cancel">Cancel</a>
        </form>
    </div>
</body>
</html>