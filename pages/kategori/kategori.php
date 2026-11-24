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
    <!-- Tombol buka modal tambah kategori -->
    <button class="btn btn-utama" id="btn-tambah-kategori">
      <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width:20px;height:20px;">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
      </svg>
      Tambah Kategori
    </button>
  </div>

  <!-- Tabel daftar kategori -->
  <div class="kartu">
    <div class="tabel-wrap">
      <table class="tabel tabel-responsif" id="tabel-kategori">
        <thead>
          <tr>
            <th>Kode</th>
            <th>Nama Kategori</th>
            <th>Jumlah Produk</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody id="tbody-kategori">
          <!-- Data awal kategori -->
          <tr>
            <td data-label="Kode">KAT001</td>
            <td data-label="Nama Kategori">Makanan</td>
            <td data-label="Jumlah Produk">1</td>
            <td data-label="Aksi">
              <div class="tabel-aksi">
                <button class="btn-aksi edit" title="Edit">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                </button>
                <button class="btn-aksi hapus" title="Hapus">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td data-label="Kode">KAT002</td>
            <td data-label="Nama Kategori">Minuman</td>
            <td data-label="Jumlah Produk">1</td>
            <td data-label="Aksi">
              <div class="tabel-aksi">
                <button class="btn-aksi edit" title="Edit">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                </button>
                <button class="btn-aksi hapus" title="Hapus">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                </button>
              </div>
            </td>
          </tr>
          <tr>
            <td data-label="Kode">KAT003</td>
            <td data-label="Nama Kategori">Lain-lain</td>
            <td data-label="Jumlah Produk">1</td>
            <td data-label="Aksi">
              <div class="tabel-aksi">
                <button class="btn-aksi edit" title="Edit">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                </button>
                <button class="btn-aksi hapus" title="Hapus">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                </button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>


  </div>
</main>

<!-- Modal tambah/edit kategori -->
<div class="modal-overlay" id="modal-overlay-kategori">
  <div class="modal">

    <!-- Header modal -->
    <div class="modal-header">
      <h2 class="modal-judul" id="modal-judul-kategori">Tambah Kategori</h2>
      <button class="modal-tutup" id="btn-tutup-modal-kategori" aria-label="Tutup">
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width:22px;height:22px;">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>

    <!-- Pesan sukses (disembunyikan dulu) -->
    <div class="pesan-sukses" id="pesan-sukses-kategori"></div>

    <!-- Form kategori -->
    <form id="form-kategori">
      <!-- Field kode kategori -->
      <div class="field">
        <label class="field-label" for="kode-kategori">
          Kode Kategori <span style="color:var(--warna-bahaya);">*</span>
        </label>
        <input class="field-input" type="text" id="kode-kategori" placeholder="Contoh: KAT004">
        <div class="field-error" id="error-kode-kategori"></div>
      </div>

      <!-- Field nama kategori -->
      <div class="field">
        <label class="field-label" for="nama-kategori">
          Nama Kategori <span style="color:var(--warna-bahaya);">*</span>
        </label>
        <input class="field-input" type="text" id="nama-kategori" placeholder="Contoh: Elektronik">
        <div class="field-error" id="error-nama-kategori"></div>
      </div>

      <!-- Tombol aksi -->
      <div class="form-aksi">
        <button type="submit" class="btn btn-utama">Simpan</button>
        <button type="button" class="btn btn-sekunder" id="btn-batal-kategori">Batal</button>
      </div>
    </form>

  </div>
</div>

<?php
// Include footer
include '../../includes/footer.php';
?>
