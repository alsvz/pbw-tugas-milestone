<?php
// Variabel untuk header dan sidebar
$base = '../../'; // Path relatif ke root (naik 2 level dari pages/produk/)
$judul = 'Tambah Produk';
$menu_aktif = 'produk';

// Include header dan sidebar
include '../../includes/header.php';
include '../../includes/sidebar.php';
?>

<!-- Konten utama -->
<main class="konten">
  <!-- Judul form: "Tambah Produk Baru" untuk mode tambah,
       berubah jadi "Edit Produk" di mode edit (nanti di Milestone 3) -->
  <h1 class="judul-halaman">Tambah Produk Baru</h1>
  
  <!-- Pesan sukses (disembunyikan dulu, tampil lewat JS jika valid) -->
  <div class="pesan-sukses" id="pesan-sukses"></div>
  
  <!-- Form produk -->
  <form id="form-produk" class="kartu">
    <div class="form-grid">
      
      <!-- Field: Nama Produk (wajib) -->
      <div class="field">
        <label class="field-label" for="nama">Nama Produk <span style="color:var(--warna-bahaya);">*</span></label>
        <input class="field-input" type="text" id="nama" name="nama" placeholder="Contoh: Indomie Goreng">
        <div class="field-error" id="error-nama"></div>
      </div>
      
      <!-- Field: Kategori (wajib) -->
      <div class="field">
        <label class="field-label" for="kategori">Kategori <span style="color:var(--warna-bahaya);">*</span></label>
        <select class="select-filter" id="kategori" name="kategori" style="width:100%;">
          <option value="">Pilih kategori...</option>
          <option value="makanan">Makanan</option>
          <option value="minuman">Minuman</option>
          <option value="lain-lain">Lain-lain</option>
        </select>
        <div class="field-error" id="error-kategori"></div>
      </div>
      
      <!-- Field: Harga (wajib) -->
      <div class="field">
        <label class="field-label" for="harga">Harga (Rp) <span style="color:var(--warna-bahaya);">*</span></label>
        <input class="field-input" type="number" id="harga" name="harga" placeholder="Contoh: 3000" min="0">
        <div class="field-error" id="error-harga"></div>
      </div>
      
      <!-- Field: Stok Awal (wajib) -->
      <div class="field">
        <label class="field-label" for="stok">Stok Awal <span style="color:var(--warna-bahaya);">*</span></label>
        <input class="field-input" type="number" id="stok" name="stok" placeholder="Contoh: 50" min="0">
        <div class="field-error" id="error-stok"></div>
      </div>
      
      <!-- Field: Deskripsi (opsional, lebar penuh) -->
      <div class="field form-full">
        <label class="field-label" for="deskripsi">Deskripsi</label>
        <textarea class="field-input" id="deskripsi" name="deskripsi" placeholder="Deskripsi produk (opsional)"></textarea>
      </div>
      
      <!-- Area upload gambar (opsional, HANYA tampilan visual) -->
      <div class="form-full">
        <label class="field-label">Gambar Produk (opsional)</label>
        <div class="upload-area">
          <!-- Ikon cloud upload -->
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
          </svg>
          <div class="upload-area-judul">Seret gambar ke sini atau klik untuk pilih</div>
          <div class="upload-area-teks">PNG, JPG, atau JPEG (maks. 2MB) — hanya tampilan, belum berfungsi</div>
        </div>
      </div>
      
    </div>
    
    <!-- Baris tombol: Simpan dan Batal -->
    <div class="form-aksi">
      <button type="submit" class="btn btn-utama">Simpan</button>
      <a href="index.php" class="btn btn-sekunder">Batal</a>
    </div>
  </form>
</main>

<?php
// Include footer
include '../../includes/footer.php';
?>
