<?php
// Halaman login berdiri sendiri (tanpa sidebar dan topbar)
$base = '';
$judul = 'Login';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $judul; ?> - Kasir & Stok</title>
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo $base; ?>assets/css/style.css">
</head>
<body class="halaman-login">

  <div class="login-wrapper">
    
    <!-- Panel kiri: gradien biru muda dengan sambutan -->
    <div class="login-panel-kiri">
      <!-- Hiasan lingkaran transparan -->
      <div class="login-hiasan satu"></div>
      <div class="login-hiasan dua"></div>
      
      <h1>Selamat datang di Kasir &amp; Stok</h1>
      <p>Sistem kasir dan manajemen stok sederhana untuk toko Anda. Kelola produk, kategori, dan transaksi dengan mudah.</p>
    </div>
    
    <!-- Panel kanan: form login -->
    <div class="login-panel-kanan">
      <form id="form-login" class="login-form">
        <h2>Selamat datang kembali</h2>
        <p class="login-subtitle">Masuk untuk mengelola toko Anda</p>
        
        <!-- Pesan error umum (disembunyikan dulu, tampil lewat JS) -->
        <div class="login-pesan-error" id="login-error" style="display:none;">
          Mohon lengkapi username dan password Anda.
        </div>
        
        <!-- Field username -->
        <div class="field">
          <label class="field-label" for="username">Username</label>
          <input class="field-input" type="text" id="username" name="username" placeholder="Masukkan username" autocomplete="username">
          <div class="field-error" id="error-username"></div>
        </div>
        
        <!-- Field password dengan tombol lihat -->
        <div class="field">
          <label class="field-label" for="password">Password</label>
          <div class="input-password-wrap">
            <input class="field-input" type="password" id="password" name="password" placeholder="Masukkan password" autocomplete="current-password">
            <!-- Tombol lihat password (toggle tipe input) -->
            <button type="button" class="btn-lihat-password" id="btn-lihat-password" aria-label="Lihat password">
              <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
              </svg>
            </button>
          </div>
          <div class="field-error" id="error-password"></div>
        </div>
        
        <!-- Baris: checkbox ingat saya + lupa password -->
        <div class="login-row">
          <label class="login-cek">
            <input type="checkbox" name="ingat"> Ingat saya
          </label>
          <a href="#" class="login-link">Lupa password?</a>
        </div>
        
        <!-- Tombol Masuk -->
        <button type="submit" class="btn btn-utama login-btn-submit">Masuk</button>
      </form>
    </div>
    
  </div>

  <!-- JavaScript -->
  <script src="<?php echo $base; ?>assets/js/app.js"></script>
</body>
</html>
