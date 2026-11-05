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
          <tr>
            <td data-label="No.">1</td>
            <td data-label="Waktu">08:15</td>
            <td data-label="Nama Produk">Indomie Goreng</td>
            <td data-label="Qty">2</td>
            <td data-label="Total">Rp 6.000</td>
            <td data-label="Kasir">Andi</td>
          </tr>
          <tr>
            <td data-label="No.">2</td>
            <td data-label="Waktu">08:42</td>
            <td data-label="Nama Produk">Aqua Botol 600ml</td>
            <td data-label="Qty">5</td>
            <td data-label="Total">Rp 10.000</td>
            <td data-label="Kasir">Andi</td>
          </tr>
          <tr>
            <td data-label="No.">3</td>
            <td data-label="Waktu">09:10</td>
            <td data-label="Nama Produk">Chitato 68g</td>
            <td data-label="Qty">3</td>
            <td data-label="Total">Rp 15.000</td>
            <td data-label="Kasir">Budi</td>
          </tr>
          <tr>
            <td data-label="No.">4</td>
            <td data-label="Waktu">09:35</td>
            <td data-label="Nama Produk">Kopi Kapal Api</td>
            <td data-label="Qty">1</td>
            <td data-label="Total">Rp 2.500</td>
            <td data-label="Kasir">Andi</td>
          </tr>
          <tr>
            <td data-label="No.">5</td>
            <td data-label="Waktu">10:05</td>
            <td data-label="Nama Produk">Teh Botol Sosro</td>
            <td data-label="Qty">4</td>
            <td data-label="Total">Rp 12.000</td>
            <td data-label="Kasir">Budi</td>
          </tr>
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
