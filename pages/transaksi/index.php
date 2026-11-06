<?php
// Variabel untuk header dan sidebar
$base = '../../'; // Path relatif ke root (naik 2 level dari pages/transaksi/)
$judul = 'Transaksi';
$menu_aktif = 'transaksi';

// Include header dan sidebar
include '../../includes/header.php';
include '../../includes/sidebar.php';
?>

<!-- Konten utama -->
<main class="konten">
  <h1 class="judul-halaman">Transaksi</h1>
  
  <!-- Tabel transaksi contoh -->
  <div class="kartu">
    <div class="section-header">
      <h2 class="section-judul">Riwayat Transaksi</h2>
    </div>
    
    <div class="tabel-wrap">
      <table class="tabel tabel-responsif">
        <thead>
          <tr>
            <th>No.</th>
            <th>Waktu</th>
            <th>Nama Produk</th>
            <th>Qty</th>
            <th>Total</th>
            <th>Kasir</th>
          </tr>
        </thead>
        <tbody>
          <!-- Data transaksi akan diisi dari database di Milestone 3 -->
        </tbody>
      </table>
    </div>
    
    <p class="tabel-info">Menampilkan 1–5 dari 15 transaksi hari ini</p>
  </div>
  
  <!-- Catatan: halaman kasir dikerjakan di milestone berikutnya -->
  <div class="kartu" style="margin-top: var(--spasi-lg);">
    <p style="color: var(--warna-teks-muted); font-size: 14px; text-align: center;">
      Halaman kasir dikerjakan di milestone berikutnya.
    </p>
  </div>
</main>

<?php
// Include footer
include '../../includes/footer.php';
?>
