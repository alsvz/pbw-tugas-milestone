<?php
$base = '';
$judul = 'Dashboard';
$menu_aktif = 'dashboard';

include 'includes/auth.php';
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<!-- Konten utama -->
<main class="konten">
  <h1 class="judul-halaman">Dashboard</h1>

  <?php if (!empty($_SESSION['flash'])): ?>
  <div class="flash-sukses"><?php echo htmlspecialchars($_SESSION['flash']); unset($_SESSION['flash']); ?></div>
  <?php endif; ?>
  
  <!-- Kartu ringkasan: 4 kartu, 2 kolom di HP, 4 kolom di desktop -->
  <div class="ringkasan-grid">
    <!-- Kartu 1: Jumlah Produk -->
    <div class="kartu-ringkasan">
      <div class="ringkasan-ikon biru">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
        </svg>
      </div>
      <div class="ringkasan-info">
        <div class="ringkasan-nilai">0</div>
        <div class="ringkasan-label">Jumlah Produk</div>
      </div>
    </div>
    
    <!-- Kartu 2: Stok Tersedia -->
    <div class="kartu-ringkasan">
      <div class="ringkasan-ikon hijau">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
        </svg>
      </div>
      <div class="ringkasan-info">
        <div class="ringkasan-nilai">0</div>
        <div class="ringkasan-label">Stok Tersedia</div>
      </div>
    </div>
    
    <!-- Kartu 3: Transaksi Hari Ini -->
    <div class="kartu-ringkasan">
      <div class="ringkasan-ikon ungu">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
        </svg>
      </div>
      <div class="ringkasan-info">
        <div class="ringkasan-nilai">0</div>
        <div class="ringkasan-label">Transaksi Hari Ini</div>
      </div>
    </div>
    
    <!-- Kartu 4: Total Penjualan Hari Ini -->
    <div class="kartu-ringkasan">
      <div class="ringkasan-ikon oranye">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
      </div>
      <div class="ringkasan-info">
        <div class="ringkasan-nilai">Rp 0</div>
        <div class="ringkasan-label">Total Penjualan Hari Ini</div>
      </div>
    </div>
  </div>
  
  <!-- Tabel transaksi terbaru -->
  <div class="kartu">
    <div class="section-header">
      <h2 class="section-judul">Transaksi Terbaru</h2>
      <!-- Link ke halaman transaksi lengkap -->
      <a href="<?php echo $base; ?>pages/transaksi/transaksi.php" class="section-aksi">Lihat Semua →</a>
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
  </div>
</main>

<?php
// Include footer
include 'includes/footer.php';

?>
