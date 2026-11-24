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
<body>

  <!-- Topbar -->
  <header class="topbar">
    <!-- Tombol menu (hanya tampil di mobile) -->
    <button class="btn-menu" id="btn-menu" aria-label="Menu">
      <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </button>
    
    <div class="topbar-judul">Kasir &amp; Stok</div>

    <!-- Tanggal di tengah topbar -->
    <div class="tanggal-tengah" id="tanggal-tengah"></div>
    
    <div class="topbar-kanan">
      <!-- Jam real-time -->
      <div class="tanggal-jam" id="tanggal-jam"></div>
      
      <!-- Info user -->
      <div class="topbar-user">Kasir</div>
    </div>
  </header>

  <!-- Overlay untuk drawer mobile -->
  <div id="overlay"></div>

  <!-- Wrapper layout -->
  <div class="layout">
