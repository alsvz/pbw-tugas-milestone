<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: dashboard.php');
    exit;
}

// Daftar akun sementara — akan diganti tabel users di Milestone 4
$daftar_akun = [
    ['id' => 1, 'username' => 'bos', 'password' => 'bos123', 'nama' => 'Bos'],
    ['id' => 2, 'username' => 'kasir', 'password' => 'kasir123', 'nama' => 'Kasir'],
];

// Meniru pola materi dosen: function menerima parameter, foreach, if/AND, return
function cekLogin($user, $pass) {
    global $daftar_akun;
    foreach ($daftar_akun as $akun) {
        if ($user == $akun['username'] AND $pass == $akun['password']) {
            return $akun;
        }
    }
    return false;
}

$pesan_error   = '';
$pesan_sukses  = '';
$username_input = '';

if (isset($_GET['logout']) && $_GET['logout'] === '1') {
    $pesan_sukses = 'Anda berhasil keluar';
}

// Meniru pola materi dosen: pemrosesan hanya berjalan jika method POST
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username_input = trim($_POST['username'] ?? '');
    $password_input = $_POST['password'] ?? '';

    // var_dump($_POST); // aktifkan untuk debug

    if ($username_input === '' OR $password_input === '') {
        $pesan_error = 'Username dan password wajib diisi';
    } else {
        $hasil = cekLogin($username_input, $password_input);
        if ($hasil !== false) {
            session_regenerate_id(true);
            $_SESSION['user_id']  = $hasil['id'];
            $_SESSION['username'] = $hasil['username'];
            $_SESSION['nama']     = $hasil['nama'];
            $_SESSION['flash']    = 'Selamat datang, ' . $hasil['nama'] . '!';
            header('Location: dashboard.php');
            exit;
        } else {
            $pesan_error = 'Username atau password salah';
        }
    }
}

$base  = '';
$judul = 'Login';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $judul; ?> - StokFlow</title>
  
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
      
      <h1>Selamat datang di StokFlow</h1>
      <p>Sistem kasir dan manajemen stok sederhana untuk toko Anda. Kelola produk, kategori, dan transaksi dengan mudah.</p>
    </div>
    
    <!-- Panel kanan: form login -->
    <div class="login-panel-kanan">
      <form id="form-login" class="login-form" method="post" action="">
        <h2>Selamat datang kembali</h2>
        <p class="login-subtitle">Masuk untuk mengelola toko Anda</p>
        
        <!-- Pesan sukses setelah logout -->
        <?php if (!empty($pesan_sukses)): ?>
        <div class="login-pesan-error" id="login-sukses" style="background:#d1fae5;color:#065f46;border-color:#a7f3d0;">
            <?php echo htmlspecialchars($pesan_sukses); ?>
        </div>
        <?php endif; ?>

        <!-- Pesan error (tampil jika ada kesalahan login) -->
        <?php if (!empty($pesan_error)): ?>
        <div class="login-pesan-error" id="login-error">
            <?php echo htmlspecialchars($pesan_error); ?>
        </div>
        <?php endif; ?>
        
        <!-- Field username -->
        <div class="field">
          <label class="field-label" for="username">Username</label>
          <input class="field-input" type="text" id="username" name="username" placeholder="Masukkan username" autocomplete="username" value="<?php echo htmlspecialchars($username_input); ?>">
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
        
        <!-- Tombol Masuk -->
        <button type="submit" class="btn btn-utama login-btn-submit">Masuk</button>
      </form>
    </div>
    
  </div>

  <!-- JavaScript -->
  <script src="<?php echo $base; ?>assets/js/app.js"></script>
</body>
</html>
