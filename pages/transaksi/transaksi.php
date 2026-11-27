<?php
$base = '../../';
$judul = 'Transaksi';
$menu_aktif = 'transaksi';

include '../../includes/auth.php';
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
    

  </div>
  

</main>

<?php
// Include footer
include '../../includes/footer.php';
?>
