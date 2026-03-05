-- tabel user untuk login ke sistem (admin / pemilik akun)
CREATE TABLE users (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    nama_lengkap VARCHAR(100) NOT NULL
);

-- tabel kategori buku (genre novel, sejarah, dll)
CREATE TABLE kategori (
    id_kategori INT AUTO_INCREMENT PRIMARY KEY,
    nama_kategori VARCHAR(50) NOT NULL
);

-- tabel data penulis buku
CREATE TABLE penulis (
    id_penulis INT AUTO_INCREMENT PRIMARY KEY,
    nama_penulis VARCHAR(100) NOT NULL
);

-- tabel data penerbit buku
CREATE TABLE penerbit (
    id_penerbit INT AUTO_INCREMENT PRIMARY KEY,
    nama_penerbit VARCHAR(100) NOT NULL
);

-- tabel utama untuk menyimpan data buku
-- relasi ke kategori, penulis, dan penerbit
CREATE TABLE buku (
    id_buku INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255) NOT NULL,
    id_kategori INT,
    id_penulis INT,
    id_penerbit INT,
    isbn VARCHAR(20),
    tahun_terbit YEAR,
    jumlah_halaman INT,
    sinopsis TEXT,
    cover_buku VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_kategori) REFERENCES kategori(id_kategori),
    FOREIGN KEY (id_penulis) REFERENCES penulis(id_penulis),
    FOREIGN KEY (id_penerbit) REFERENCES penerbit(id_penerbit)
);

-- tabel rak baca
-- dipakai buat nyimpen status baca buku (wishlist / sedang baca / selesai)
-- juga bisa isi rating dan review pribadi
CREATE TABLE rak_baca (
    id_rak INT AUTO_INCREMENT PRIMARY KEY,
    id_buku INT,
    status_baca ENUM('Wishlist', 'Sedang Dibaca', 'Selesai') DEFAULT 'Wishlist',
    tanggal_mulai DATE,
    tanggal_selesai DATE,
    rating INT(1), 
    review TEXT,
    FOREIGN KEY (id_buku) REFERENCES buku(id_buku) ON DELETE CASCADE
);


INSERT INTO users (username, password, nama_lengkap) 
VALUES ('nayko', '12345', 'Naila Rizki');

