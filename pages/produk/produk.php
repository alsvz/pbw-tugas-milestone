<?php
// Variabel untuk header dan sidebar
$base = '../../'; // Path relatif ke root (naik 2 level dari pages/produk/)
$judul = 'Produk';
$menu_aktif = 'produk';

// Include header dan sidebar
include '../../includes/header.php';
include '../../includes/sidebar.php';
?>

<!-- Konten utama -->
<main class="konten">
  <h1 class="judul-halaman">Produk</h1>
  
  <!-- Toolbar: pencarian, filter kategori, tombol tambah -->
  <div class="toolbar">
    <div class="toolbar-kiri">
      <!-- Kolom pencarian -->
      <input type="text" class="input-cari" placeholder="Cari produk..." id="cari-produk">
      
      <!-- Filter kategori -->
      <select class="select-filter" id="filter-kategori">
        <option value="">Semua Kategori</option>
        <option value="makanan">Makanan</option>
        <option value="minuman">Minuman</option>
        <option value="lain-lain">Lain-lain</option>
      </select>
    </div>
    
    <!-- Tombol tambah produk -->
    <a href="form.php" class="btn btn-utama">
      <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width:20px;height:20px;">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
      </svg>
      Tambah Produk
    </a>
  </div>
  
  <!-- Tabel daftar produk -->
  <div class="kartu">
    <div class="tabel-wrap">
      <table class="tabel tabel-responsif">
        <thead>
          <tr>
            <th>Kode</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Harga (Rp)</th>
            <th>Stok</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <!-- Data produk akan diisi dari database di Milestone 3 -->
        </tbody>
      </table>
    </div>
    
    <!-- Info jumlah data dan pagination -->

    <nav class="pagination">
      <a href="#">‹ Prev</a>
      <a href="#" class="aktif">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#">Next ›</a>
    </nav>
  </div>
</main>

<?php
// Include footer
include '../../includes/footer.php';
?>
