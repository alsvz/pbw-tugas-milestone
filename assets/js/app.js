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
  const elemenTanggalJam = document.getElementById('tanggal-jam');
  
  // Jika elemen tidak ada (misal di halaman login), hentikan
  if (!elemenTanggalJam) return;
  
  const sekarang = new Date();
  
  const hari = namaHari[sekarang.getDay()];
  const tanggal = sekarang.getDate();
  const bulan = namaBulan[sekarang.getMonth()];
  const tahun = sekarang.getFullYear();
  
  const jam = padZero(sekarang.getHours());
  const menit = padZero(sekarang.getMinutes());
  const detik = padZero(sekarang.getSeconds());
  
  // Format: "Rabu, 14 Oktober 2026 · 08:30"
  const teksLengkap = `${hari}, ${tanggal} ${bulan} ${tahun} · ${jam}:${menit}`;
  
  elemenTanggalJam.textContent = teksLengkap;
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
