// ===== 1. TANGGAL DAN JAM REAL-TIME =====

// Array nama hari dan bulan dalam bahasa Indonesia
const namaHari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
const namaBulan = [
  'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
  'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
];

// Fungsi untuk memformat angka menjadi 2 digit (contoh: 8 -> 08)
function padZero(angka) {
  return angka.toString().padStart(2, '0');
}

// Fungsi untuk update tanggal dan jam
function updateTanggalJam() {
  const elemenTanggalJam    = document.getElementById('tanggal-jam');
  const elemenTanggalTengah = document.getElementById('tanggal-tengah');
  
  if (!elemenTanggalJam && !elemenTanggalTengah) return;
  
  const sekarang = new Date();
  
  const hari   = namaHari[sekarang.getDay()];
  const tanggal = sekarang.getDate();
  const bulan  = namaBulan[sekarang.getMonth()];
  const tahun  = sekarang.getFullYear();
  
  const jam   = padZero(sekarang.getHours());
  const menit = padZero(sekarang.getMinutes());

  if (elemenTanggalTengah) {
    elemenTanggalTengah.textContent = `${hari}, ${tanggal} ${bulan} ${tahun}`;
  }

  if (elemenTanggalJam) {
    elemenTanggalJam.textContent = `${jam}:${menit}`;
  }
}

// Jalankan pertama kali saat halaman dibuka
updateTanggalJam();

// Perbarui setiap 1 detik
setInterval(updateTanggalJam, 1000);


// ===== 2. DRAWER SIDEBAR MOBILE =====

const btnMenu = document.getElementById('btn-menu');
const sidebar = document.getElementById('sidebar');
const overlay = document.getElementById('overlay');

// Jika elemen tidak ada (misal di halaman login), hentikan inisialisasi drawer
if (btnMenu && sidebar && overlay) {
  
  // Fungsi untuk membuka drawer
  function bukaSidebar() {
    sidebar.classList.add('buka');
    overlay.classList.add('aktif');
  }
  
  // Fungsi untuk menutup drawer
  function tutupSidebar() {
    sidebar.classList.remove('buka');
    overlay.classList.remove('aktif');
  }
  
  // Klik tombol menu: toggle buka/tutup
  btnMenu.addEventListener('click', function() {
    if (sidebar.classList.contains('buka')) {
      tutupSidebar();
    } else {
      bukaSidebar();
    }
  });
  
  // Klik overlay: tutup drawer
  overlay.addEventListener('click', tutupSidebar);
  
  // Klik salah satu menu: tutup drawer (agar tidak menghalangi konten)
  const linkMenu = sidebar.querySelectorAll('.menu-item a');
  linkMenu.forEach(function(link) {
    link.addEventListener('click', tutupSidebar);
  });
  
  // Tombol Esc: tutup drawer
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && sidebar.classList.contains('buka')) {
      tutupSidebar();
    }
  });
  
}


// ===== 3. VALIDASI FORM (FUNGSI YANG BISA DIPAKAI ULANG) =====

// Fungsi untuk menampilkan pesan error di bawah field yang salah
function tampilkanError(idField, pesan) {
  const elemenError = document.getElementById('error-' + idField);
  if (elemenError) {
    elemenError.textContent = pesan;
  }
  // Beri border merah pada input yang salah
  const input = document.getElementById(idField);
  if (input) {
    input.style.borderColor = pesan ? 'var(--warna-bahaya)' : '';
  }
}

// Fungsi untuk menghapus semua pesan error sebelum validasi ulang
function bersihkanError() {
  const semuaError = document.querySelectorAll('.field-error');
  semuaError.forEach(function(elemen) {
    elemen.textContent = '';
  });
  const semuaInput = document.querySelectorAll('.field-input');
  semuaInput.forEach(function(input) {
    input.style.borderColor = '';
  });
}


// ===== 4. TOGGLE LIHAT PASSWORD =====

const btnLihatPassword = document.getElementById('btn-lihat-password');

if (btnLihatPassword) {
  btnLihatPassword.addEventListener('click', function() {
    const inputPassword = document.getElementById('password');
    if (inputPassword) {
      // Toggle tipe input antara password (titik) dan text (terlihat)
      if (inputPassword.type === 'password') {
        inputPassword.type = 'text';
      } else {
        inputPassword.type = 'password';
      }
    }
  });
}


// ===== 5. VALIDASI FORM LOGIN =====

const formLogin = document.getElementById('form-login');

if (formLogin) {
  formLogin.addEventListener('submit', function(e) {
    e.preventDefault(); // Cegah form terkirim
    bersihkanError();
    
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();
    let valid = true;
    
    // Username wajib diisi
    if (username === '') {
      tampilkanError('username', 'Username wajib diisi.');
      valid = false;
    }
    
    // Password wajib diisi
    if (password === '') {
      tampilkanError('password', 'Password wajib diisi.');
      valid = false;
    }
    
    // Jika valid, arahkan ke dashboard
    // CATATAN: ini hanya demo, akan diganti proses PHP di Milestone 3
    if (valid) {
      window.location.href = 'dashboard.php';
    } else {
      // Tampilkan pesan error umum di atas form
      const pesanError = document.getElementById('login-error');
      if (pesanError) {
        pesanError.style.display = 'block';
      }
    }
  });
}


// ===== 6. VALIDASI FORM PRODUK =====

const formProduk = document.getElementById('form-produk');

if (formProduk) {
  formProduk.addEventListener('submit', function(e) {
    e.preventDefault(); // Cegah form terkirim
    bersihkanError();
    
    let valid = true;
    
    // Nama produk wajib diisi
    const nama = document.getElementById('nama').value.trim();
    if (nama === '') {
      tampilkanError('nama', 'Nama produk wajib diisi.');
      valid = false;
    }
    
    // Kategori wajib dipilih
    const kategori = document.getElementById('kategori').value;
    if (kategori === '') {
      tampilkanError('kategori', 'Kategori wajib dipilih.');
      valid = false;
    }
    
    // Harga harus angka lebih dari 0
    const harga = document.getElementById('harga').value.trim();
    if (harga === '' || isNaN(harga) || Number(harga) <= 0) {
      tampilkanError('harga', 'Harga harus berupa angka lebih dari 0.');
      valid = false;
    }
    
    // Stok harus angka bulat 0 atau lebih
    const stok = document.getElementById('stok').value.trim();
    if (stok === '' || isNaN(stok) || Number(stok) < 0 || !Number.isInteger(Number(stok))) {
      tampilkanError('stok', 'Stok harus berupa angka bulat 0 atau lebih.');
      valid = false;
    }
    
    // Jika semua valid, tampilkan pesan sukses (demo)
    if (valid) {
      const pesanSukses = document.getElementById('pesan-sukses');
      if (pesanSukses) {
        pesanSukses.style.display = 'block';
        pesanSukses.textContent = 'Data valid (demo, belum disimpan).';
      }
    }
  });
}


// ===== 7. KONFIRMASI HAPUS PRODUK =====

const tombolHapus = document.querySelectorAll('.btn-aksi.hapus');

// Setiap tombol hapus menampilkan konfirmasi (tidak benar-benar menghapus)
tombolHapus.forEach(function(tombol) {
  tombol.addEventListener('click', function(e) {
    e.preventDefault();
    confirm('Apakah Anda yakin ingin menghapus produk ini?');
  });
});


// ===== 8. MODAL TAMBAH/EDIT KATEGORI =====

const modalOverlayKategori = document.getElementById('modal-overlay-kategori');
const btnTambahKategori    = document.getElementById('btn-tambah-kategori');
const btnTutupModal        = document.getElementById('btn-tutup-modal-kategori');
const btnBatalKategori     = document.getElementById('btn-batal-kategori');
const formKategori         = document.getElementById('form-kategori');
const tbodyKategori        = document.getElementById('tbody-kategori');
const infoKategori         = document.getElementById('info-kategori');

// Jalankan hanya jika elemen modal ada (halaman kategori)
if (modalOverlayKategori && formKategori) {

  // Fungsi buka modal (reset form dulu)
  function bukaModal() {
    formKategori.reset();
    bersihkanError();
    document.getElementById('pesan-sukses-kategori').style.display = 'none';
    modalOverlayKategori.classList.add('aktif');
  }

  // Fungsi tutup modal
  function tutupModal() {
    modalOverlayKategori.classList.remove('aktif');
  }

  // Tombol Tambah Kategori: buka modal
  btnTambahKategori.addEventListener('click', bukaModal);

  // Tombol X dan Batal: tutup modal
  btnTutupModal.addEventListener('click', tutupModal);
  btnBatalKategori.addEventListener('click', tutupModal);

  // Klik latar gelap: tutup modal
  modalOverlayKategori.addEventListener('click', function(e) {
    // Tutup hanya jika klik tepat di overlay, bukan di dalam kotak modal
    if (e.target === modalOverlayKategori) {
      tutupModal();
    }
  });

  // Tombol Esc: tutup modal
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && modalOverlayKategori.classList.contains('aktif')) {
      tutupModal();
    }
  });

  // Submit form: validasi lalu tambah baris ke tabel
  formKategori.addEventListener('submit', function(e) {
    e.preventDefault();
    bersihkanError();

    const kode = document.getElementById('kode-kategori').value.trim();
    const nama = document.getElementById('nama-kategori').value.trim();
    let valid = true;

    // Kode wajib diisi
    if (kode === '') {
      tampilkanError('kode-kategori', 'Kode kategori wajib diisi.');
      valid = false;
    }

    // Nama wajib diisi
    if (nama === '') {
      tampilkanError('nama-kategori', 'Nama kategori wajib diisi.');
      valid = false;
    }

    if (valid) {
      // Tambah baris baru ke tabel
      // CATATAN: data hanya tampil sementara, belum disimpan ke database (Milestone 3)
      const ikonEdit = `<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>`;
      const ikonHapus = `<svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>`;

      const barisBaru = document.createElement('tr');
      barisBaru.innerHTML = `
        <td data-label="Kode">${kode}</td>
        <td data-label="Nama Kategori">${nama}</td>
        <td data-label="Jumlah Produk">0</td>
        <td data-label="Aksi">
          <div class="tabel-aksi">
            <button class="btn-aksi edit" title="Edit">${ikonEdit}</button>
            <button class="btn-aksi hapus" title="Hapus">${ikonHapus}</button>
          </div>
        </td>
      `;
      tbodyKategori.appendChild(barisBaru);

      // Update info jumlah kategori
      const jumlahBaris = tbodyKategori.querySelectorAll('tr').length;
      infoKategori.textContent = `Menampilkan 1–${jumlahBaris} dari ${jumlahBaris} kategori`;

      // Tampilkan pesan sukses lalu tutup modal setelah 1 detik
      const pesanSukses = document.getElementById('pesan-sukses-kategori');
      pesanSukses.textContent = 'Kategori berhasil ditambahkan (demo, belum disimpan).';
      pesanSukses.style.display = 'block';

      setTimeout(tutupModal, 1000);
    }
  });
}
