# Kasir dan Stok Sederhana

**Mata Kuliah:** Pemrograman Berbasis Web  
**Milestone:** 1 — Perencanaan | 2 — Front-end dan Interaksi Dasar

---

## 1. Nama Proyek dan Anggota

**Nama Proyek:** Kasir dan Stok (Sementara)

**Anggota Tim:**

| Nama | NIM |
|------|-----|
| [Mohamad Aldi Pratama] | [A11.2025.16512] |
| [Vincent Sepriano Gowtama] | [A11.2025.16546] |
| [Diva Maulana Yusuf] | [A11.2025.16554] |

**Dipakai untuk:** Toko Kecil / Kantin / Koperasi

---

## 2. Deskripsi Singkat Aplikasi

Kasir dan Stok Sederhana adalah aplikasi web berbasis PHP yang dirancang untuk membantu pengelolaan produk, stok, dan transaksi penjualan secara digital. Aplikasi ini menyediakan antarmuka kasir yang mudah digunakan untuk mencatat setiap transaksi, sekaligus memperbarui stok secara otomatis. Selain itu, tersedia ringkasan transaksi harian yang dapat dipantau oleh pemilik usaha kapan saja.

---

## 3. Latar Belakang Masalah

Banyak usaha kecil seperti toko, kantin, dan koperasi masih mengelola produk dan stok secara manual, baik menggunakan buku tulis maupun file spreadsheet yang tidak terintegrasi. Akibatnya, data produk dan stok sering tidak tercatat dengan rapi, rentan terhadap kesalahan tulis, dan sulit ditelusuri kembali. Pemilik usaha pun kesulitan memantau transaksi harian karena tidak ada sistem terpusat yang merangkumnya secara otomatis.

Masalah lain yang kerap muncul adalah stok yang tidak diperbarui setelah penjualan terjadi, sehingga pemilik tidak mengetahui kondisi stok secara akurat sampai dilakukan pengecekan fisik. Rekap transaksi yang masih dilakukan secara manual juga memakan waktu dan berpotensi menghasilkan laporan yang tidak akurat. Aplikasi ini hadir untuk mengatasi permasalahan tersebut dengan solusi digital yang sederhana, ringan, dan mudah dioperasikan.

---

## 4. Manfaat Aplikasi

- **Efisiensi pencatatan** — Produk, stok, dan transaksi tercatat secara digital dan terpusat, mengurangi risiko kesalahan dan kehilangan data.
- **Pembaruan stok otomatis** — Setiap transaksi penjualan langsung mengurangi stok produk terkait tanpa perlu input manual.
- **Kemudahan pemantauan** — Pemilik usaha dapat melihat ringkasan transaksi dan kondisi stok kapan saja melalui dashboard.

---

## 5. Target Pengguna

### Kasir
Pengguna utama yang bertugas mengoperasikan aplikasi sehari-hari. Kebutuhannya meliputi:
- Mengelola data produk (tambah, ubah, hapus)
- Mengelola kategori produk
- Memantau dan memperbarui stok
- Mencatat transaksi penjualan

### Pemilik *(opsional)*
Pengguna dengan akses terbatas yang hanya perlu memantau performa usaha. Kebutuhannya meliputi:
- Melihat dashboard ringkasan penjualan
- Melihat laporan transaksi harian/periodik

---

## 6. Fitur Utama

| No | Fitur | Keterangan |
|----|-------|------------|
| 1 | **Login, Logout, Session** | Autentikasi pengguna dengan manajemen sesi PHP |
| 2 | **Dashboard Ringkasan** | Menampilkan total penjualan hari ini, jumlah produk, dan stok menipis |
| 3 | **Kelola Kategori** | Tambah, ubah, dan hapus kategori produk |
| 4 | **Kelola Produk dan Stok** | Tambah, ubah, hapus produk beserta informasi stok |
| 5 | **Pencatatan Transaksi Penjualan** | Input transaksi dengan detail produk dan jumlah yang dibeli |
| 6 | **Pengurangan Stok Otomatis** | Stok produk berkurang secara otomatis setiap kali transaksi dicatat |
| 7 | **Pencarian dan Filter** | Cari produk atau transaksi berdasarkan kata kunci dan filter tertentu |
| 8 | **Pagination** | Tampilan data dibagi per halaman agar tidak memuat terlalu banyak sekaligus |
| 9 | **Tampilan Tanggal dan Waktu** | Setiap transaksi dan log aktivitas mencantumkan tanggal dan waktu |

---

## 7. Teknologi yang Akan Digunakan

| Kategori | Teknologi |
|----------|-----------|
| Markup & Tampilan | HTML5, CSS3 |
| Logika Sisi Klien | JavaScript, jQuery AJAX |
| Logika Sisi Server | PHP Native |
| Basis Data | MySQL / MariaDB |
| Version Control | Git |

---

### Milestone 1 — Perencanaan
- Perencanaan fitur dan teknologi
- Wireframe low-fidelity (login, dashboard, daftar produk, form produk)

### Milestone 2 — Front-end dan Interaksi Dasar
Semua halaman statis (data contoh ditulis langsung di HTML). Belum terhubung ke database.

### File yang dikerjakan:

| File | Keterangan |
|------|------------|
| `index.php` | Redirect ke halaman login |
| `login.php` | Halaman login dua panel, validasi JS |
| `dashboard.php` | 4 kartu ringkasan + tabel transaksi terbaru |
| `logout.php` | Redirect ke halaman login |
| `includes/header.php` | Topbar, Google Fonts, link CSS |
| `includes/sidebar.php` | Menu navigasi dengan ikon SVG |
| `includes/footer.php` | Tutup HTML, load JavaScript |
| `assets/css/style.css` | Layout responsif, komponen, halaman login, tabel, form |
| `assets/js/app.js` | Jam real-time, drawer sidebar mobile, validasi form |
| `pages/produk/index.php` | Daftar produk dengan toolbar, tabel, pagination |
| `pages/produk/form.php` | Form tambah produk dengan validasi |
| `pages/kategori/index.php` | Daftar kategori |
| `pages/transaksi/index.php` | Riwayat transaksi |

### Catatan
- Login dan form belum menyimpan apa pun. Session PHP dikerjakan di Milestone 3, database di Milestone 4.
- PHP baru dipakai untuk `include` header, sidebar, dan footer.
- Penggunaan AI dicatat di `docs/ai-usage-log.md`.

### Cara menjalankan
1. Buka terminal di folder proyek.
2. Jalankan `C:\xampp\php\php.exe -S localhost:8000` (sesuaikan lokasi `php.exe`).
3. Buka `http://localhost:8000/login.php`.

Alternatif: salin folder ke `C:\xampp\htdocs`, nyalakan Apache, lalu buka `http://localhost/pbw-tugas-milestone/login.php`.

### Tampilan
Screenshot desktop dan HP ada di folder `docs/screenshots/`.
