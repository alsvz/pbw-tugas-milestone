**ai usage log:** 

---

**milestone 1:**

tujuan:
membantu kita mengadaptasi design kasar ke dalam html dalam bentuk wireframe

prompt:
buatkan wireframe low-fidelity sederhana dalam satu file .html, 4 halaman yaitu (login,dashboard,daftar produk,form produk),
masing masing dalam tampilan desktop dan mobile.
(prompt digunakan untuk claude ai)

file yang tambahkan:
- wireframe.html

---

**milestone 2:**

tujuan:
membantu membuat front-end statis lengkap untuk aplikasi StokFlow,
mencakup layout, komponen CSS, halaman-halaman utama, dan interaksi dasar JavaScript.

prompt:
- membuat fondasi layout (TAHAP 1): style.css, header.php, sidebar.php, footer.php, app.js, dashboard.php (kerangka)
- mengisi konten lengkap (TAHAP 2): login.php, dashboard.php (isi), pages/produk/index.php, pages/produk/form.php, pages/kategori/index.php, pages/transaksi/index.php, logout.php, index.php
(prompt digunakan untuk claude ai)

file yang tambahkan:
- index.php — redirect ke login
- login.php — halaman login dua panel dengan validasi JS
- dashboard.php — 4 kartu ringkasan + tabel transaksi terbaru
- logout.php — redirect ke login
- includes/header.php — topbar, Google Fonts, link CSS
- includes/sidebar.php — menu navigasi dengan ikon SVG
- includes/footer.php — tutup HTML, link JS
- assets/css/style.css — layout responsif, komponen, halaman login, tabel, form
- assets/js/app.js — jam real-time, drawer sidebar mobile, validasi form login & produk
- pages/produk/index.php — daftar produk dengan toolbar, tabel 8 baris, pagination
- pages/produk/form.php — form tambah produk dengan validasi
- pages/kategori/index.php — daftar kategori
- pages/transaksi/index.php — riwayat transaksi

---

**milestone 3 (perbaikan & persiapan):**

tujuan:
memperbaiki tampilan dan konsistensi UI dari hasil milestone 2,
serta mempersiapkan struktur file sebelum implementasi backend di milestone 3.

prompt:
- memperbaiki ikon dropdown select filter kategori agar konsisten di semua browser
- menghapus metode login sosial (Google, Facebook, Apple) dan checkbox "ingat saya" / "lupa password" dari login.php
- menyamakan proporsi padding, margin, dan ukuran kartu di semua halaman (dashboard, produk, kategori, transaksi)
- menyamakan tinggi toolbar (input cari, select filter, tombol tambah) agar sejajar
- menghapus teks placeholder statis (menampilkan 1–8 dari 48 produk, dst.) dari semua halaman
- mereset angka dummy di dashboard menjadi 0
- merename pages/*/index.php menjadi nama deskriptif (produk.php, kategori.php, transaksi.php) dan update semua link terkait
(prompt digunakan untuk Kiro AI)

file yang diubah:
- assets/css/style.css — perbaikan select-filter (custom chevron SVG, appearance:none), konsistensi judul-halaman, kartu, toolbar, ringkasan-grid
- login.php — hapus tombol sosial, pemisah "atau masuk dengan", checkbox ingat saya, link lupa password
- includes/sidebar.php — update link navigasi ke nama file baru
- dashboard.php — reset angka kartu ringkasan ke 0, update link "Lihat Semua" ke transaksi.php
- pages/produk/index.php → pages/produk/produk.php — hapus teks info pagination
- pages/kategori/index.php → pages/kategori/kategori.php — hapus teks info, reset jumlah produk ke 1
- pages/transaksi/index.php → pages/transaksi/transaksi.php — hapus teks info dan kartu catatan milestone

