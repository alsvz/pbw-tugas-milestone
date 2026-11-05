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
          <!-- Baris 1 -->
          <tr>
            <td data-label="Kode">PRD001</td>
            <td data-label="Nama Produk">Indomie Goreng</td>
            <td data-label="Kategori"><span class="badge badge-info">Makanan</span></td>
            <td data-label="Harga (Rp)">3.000</td>
            <td data-label="Stok">45</td>
            <td data-label="Aksi">
              <div class="tabel-aksi">
                <a href="form.php" class="btn-aksi edit" title="Edit">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                </a>
                <button class="btn-aksi hapus" title="Hapus">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                </button>
              </div>
            </td>
          </tr>
          
          <!-- Baris 2 -->
          <tr>
            <td data-label="Kode">PRD002</td>
            <td data-label="Nama Produk">Aqua Botol 600ml</td>
            <td data-label="Kategori"><span class="badge badge-info">Minuman</span></td>
            <td data-label="Harga (Rp)">2.000</td>
            <td data-label="Stok">80</td>
            <td data-label="Aksi">
              <div class="tabel-aksi">
                <a href="form.php" class="btn-aksi edit" title="Edit">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                </a>
                <button class="btn-aksi hapus" title="Hapus">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                </button>
              </div>
            </td>
          </tr>
          
          <!-- Baris 3 - stok rendah, beri badge "Hampir habis" -->
          <tr>
            <td data-label="Kode">PRD003</td>
            <td data-label="Nama Produk">Chitato 68g</td>
            <td data-label="Kategori"><span class="badge badge-info">Makanan</span></td>
            <td data-label="Harga (Rp)">5.000</td>
            <td data-label="Stok">
              5 <span class="badge badge-peringatan">Hampir habis</span>
            </td>
            <td data-label="Aksi">
              <div class="tabel-aksi">
                <a href="form.php" class="btn-aksi edit" title="Edit">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                </a>
                <button class="btn-aksi hapus" title="Hapus">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                </button>
              </div>
            </td>
          </tr>
          
          <!-- Baris 4 -->
          <tr>
            <td data-label="Kode">PRD004</td>
            <td data-label="Nama Produk">Kopi Kapal Api</td>
            <td data-label="Kategori"><span class="badge badge-info">Minuman</span></td>
            <td data-label="Harga (Rp)">2.500</td>
            <td data-label="Stok">30</td>
            <td data-label="Aksi">
              <div class="tabel-aksi">
                <a href="form.php" class="btn-aksi edit" title="Edit">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                </a>
                <button class="btn-aksi hapus" title="Hapus">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                </button>
              </div>
            </td>
          </tr>
          
          <!-- Baris 5 -->
          <tr>
            <td data-label="Kode">PRD005</td>
            <td data-label="Nama Produk">Teh Botol Sosro</td>
            <td data-label="Kategori"><span class="badge badge-info">Minuman</span></td>
            <td data-label="Harga (Rp)">3.000</td>
            <td data-label="Stok">50</td>
            <td data-label="Aksi">
              <div class="tabel-aksi">
                <a href="form.php" class="btn-aksi edit" title="Edit">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                </a>
                <button class="btn-aksi hapus" title="Hapus">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                </button>
              </div>
            </td>
          </tr>
          
          <!-- Baris 6 - stok rendah, beri badge "Hampir habis" -->
          <tr>
            <td data-label="Kode">PRD006</td>
            <td data-label="Nama Produk">Roti Tawar Sari Roti</td>
            <td data-label="Kategori"><span class="badge badge-info">Makanan</span></td>
            <td data-label="Harga (Rp)">12.000</td>
            <td data-label="Stok">
              8 <span class="badge badge-peringatan">Hampir habis</span>
            </td>
            <td data-label="Aksi">
              <div class="tabel-aksi">
                <a href="form.php" class="btn-aksi edit" title="Edit">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                </a>
                <button class="btn-aksi hapus" title="Hapus">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                </button>
              </div>
            </td>
          </tr>
          
          <!-- Baris 7 -->
          <tr>
            <td data-label="Kode">PRD007</td>
            <td data-label="Nama Produk">Sabun Mandi Lifebuoy</td>
            <td data-label="Kategori"><span class="badge badge-info">Lain-lain</span></td>
            <td data-label="Harga (Rp)">4.000</td>
            <td data-label="Stok">25</td>
            <td data-label="Aksi">
              <div class="tabel-aksi">
                <a href="form.php" class="btn-aksi edit" title="Edit">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                </a>
                <button class="btn-aksi hapus" title="Hapus">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                </button>
              </div>
            </td>
          </tr>
          
          <!-- Baris 8 - stok rendah, beri badge "Hampir habis" -->
          <tr>
            <td data-label="Kode">PRD008</td>
            <td data-label="Nama Produk">Pepsodent 190g</td>
            <td data-label="Kategori"><span class="badge badge-info">Lain-lain</span></td>
            <td data-label="Harga (Rp)">15.000</td>
            <td data-label="Stok">
              3 <span class="badge badge-peringatan">Hampir habis</span>
            </td>
            <td data-label="Aksi">
              <div class="tabel-aksi">
                <a href="form.php" class="btn-aksi edit" title="Edit">
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
    
    <!-- Info jumlah data dan pagination -->
    <p class="tabel-info">Menampilkan 1–8 dari 48 produk</p>
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
