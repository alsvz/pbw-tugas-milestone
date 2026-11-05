<?php
// Variabel untuk header dan sidebar
$base = '../../'; // Path relatif ke root (naik 2 level dari pages/kategori/)
$judul = 'Kategori';
$menu_aktif = 'kategori';

// Include header dan sidebar
include '../../includes/header.php';
include '../../includes/sidebar.php';
?>

<!-- Konten utama -->
<main class="konten">
  <h1 class="judul-halaman">Kategori</h1>
  
  <!-- Toolbar dengan tombol tambah -->
  <div class="toolbar">
    <div class="toolbar-kiri">
      <input type="text" class="input-cari" placeholder="Cari kategori..." id="cari-kategori">
    </div>
    <a href="#" class="btn btn-utama">
      <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width:20px;height:20px;">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
      </svg>
      Tambah Kategori
    </a>
  </div>
  
  <!-- Tabel daftar kategori -->
  <div class="kartu">
    <div class="tabel-wrap">
      <table class="tabel tabel-responsif">
        <thead>
          <tr>
            <th>Kode</th>
            <th>Nama Kategori</th>
            <th>Jumlah Produk</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-label="Kode">KAT001</td>
            <td data-label="Nama Kategori">Makanan</td>
            <td data-label="Jumlah Produk">20</td>
            <td data-label="Aksi">
              <div class="tabel-aksi">
                <a href="#" class="btn-aksi edit" title="Edit">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                </a>
                <button class="btn-aksi hapus" title="Hapus">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td data-label="Kode">KAT002</td>
            <td data-label="Nama Kategori">Minuman</td>
            <td data-label="Jumlah Produk">18</td>
            <td data-label="Aksi">
              <div class="tabel-aksi">
                <a href="#" class="btn-aksi edit" title="Edit">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                </a>
                <button class="btn-aksi hapus" title="Hapus">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td data-label="Kode">KAT003</td>
            <td data-label="Nama Kategori">Lain-lain</td>
            <td data-label="Jumlah Produk">10</td>
            <td data-label="Aksi">
              <div class="tabel-aksi">
                <a href="#" class="btn-aksi edit" title="Edit">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                </a>
                <button class="btn-aksi hapus" title="Hapus">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                </button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    
    <p class="tabel-info">Menampilkan 1–3 dari 3 kategori</p>
  </div>
</main>

<?php
// Include footer
include '../../includes/footer.php';
?>
