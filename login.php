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
        
        <!-- Pemisah "atau masuk dengan" -->
        <div class="login-pemisah">
          <span>atau masuk dengan</span>
        </div>
        
        <!-- Tombol ikon sosial (HANYA hiasan visual, tidak berfungsi) -->
        <div class="login-sosial">
          <!-- Google (tidak berfungsi, hanya tampilan) -->
          <button type="button" class="btn-sosial" title="Google (tidak berfungsi)">
            <svg viewBox="0 0 24 24">
              <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
              <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
              <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
              <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
            </svg>
          </button>
          <!-- Facebook (tidak berfungsi, hanya tampilan) -->
          <button type="button" class="btn-sosial" title="Facebook (tidak berfungsi)">
            <svg viewBox="0 0 24 24" fill="#1877F2">
              <path d="M24 12.07C24 5.41 18.63 0 12 0S0 5.41 0 12.07C0 18.1 4.39 23.1 10.13 24v-8.44H7.08v-3.49h3.05V9.41c0-3.02 1.79-4.69 4.53-4.69 1.31 0 2.69.24 2.69.24v2.97h-1.52c-1.49 0-1.96.93-1.96 1.89v2.25h3.33l-.53 3.49h-2.8V24C19.61 23.1 24 18.1 24 12.07z"/>
            </svg>
          </button>
          <!-- Apple (tidak berfungsi, hanya tampilan) -->
          <button type="button" class="btn-sosial" title="Apple (tidak berfungsi)">
            <svg viewBox="0 0 24 24" fill="currentColor">
              <path d="M17.05 12.04c-.03-2.6 2.13-3.85 2.22-3.91-1.21-1.77-3.1-2.01-3.77-2.04-1.6-.16-3.13.94-3.95.94-.82 0-2.07-.92-3.41-.89-1.75.03-3.37 1.02-4.27 2.59-1.83 3.17-.47 7.85 1.31 10.42.87 1.26 1.91 2.67 3.27 2.62 1.32-.05 1.82-.85 3.42-.85 1.6 0 2.05.85 3.45.82 1.43-.03 2.33-1.28 3.2-2.55 1.01-1.47 1.43-2.9 1.45-2.97-.03-.01-2.79-1.07-2.82-4.25zM14.52 4.3c.73-.88 1.22-2.01 1.09-3.18-1.05.04-2.32.7-3.07 1.58-.68.78-1.26 2.02-1.1 3.18 1.17.09 2.35-.6 3.08-1.58z"/>
            </svg>
          </button>
        </div>
      </form>
    </div>
    
  </div>

  <!-- JavaScript -->
  <script src="<?php echo $base; ?>assets/js/app.js"></script>
</body>
</html>
