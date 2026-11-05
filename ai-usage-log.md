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
membantu membuat front-end statis lengkap untuk aplikasi Kasir & Stok,
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
