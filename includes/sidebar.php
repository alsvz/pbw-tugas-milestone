<!-- Sidebar / Menu navigasi -->
<aside id="sidebar">
  <nav>
    <ul class="menu">
      <!-- Dashboard -->
      <li class="menu-item <?php echo ($menu_aktif === 'dashboard') ? 'aktif' : ''; ?>">
        <a href="<?php echo $base; ?>dashboard.php">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
          </svg>
          Dashboard
        </a>
      </li>
      
      <!-- Produk -->
      <li class="menu-item <?php echo ($menu_aktif === 'produk') ? 'aktif' : ''; ?>">
        <a href="<?php echo $base; ?>pages/produk/produk.php">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
          </svg>
          Produk
        </a>
      </li>
      
      <!-- Kategori -->
      <li class="menu-item <?php echo ($menu_aktif === 'kategori') ? 'aktif' : ''; ?>">
        <a href="<?php echo $base; ?>pages/kategori/kategori.php">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
          </svg>
          Kategori
        </a>
      </li>
      
      <!-- Transaksi -->
      <li class="menu-item <?php echo ($menu_aktif === 'transaksi') ? 'aktif' : ''; ?>">
        <a href="<?php echo $base; ?>pages/transaksi/transaksi.php">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
          </svg>
          Transaksi
        </a>
      </li>
      
      <!-- Logout -->
      <li class="menu-item">
        <a href="<?php echo $base; ?>logout.php">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
          </svg>
          Logout
        </a>
      </li>
    </ul>
  </nav>
</aside>
