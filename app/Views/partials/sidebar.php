<?php
$uri = uri_string();
?>

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <!-- ======= Sidebar Nav ======= -->
  <ul class="sidebar-nav" id="sidebar-nav">

    <!-- ======= Home Nav ======= -->
    <li class="nav-item">
      <a class="nav-link <?php echo ($uri == '' || $uri == '/') ? '' : 'collapsed'; ?>" href="<?= base_url('/'); ?>">
        <i class="bi bi-grid"></i>
        <span>Home</span>
      </a>
    </li><!-- End Home Nav -->

    <!-- ======= Keranjang Nav ======= -->
    <li class="nav-item">
      <a class="nav-link <?php echo ($uri == 'keranjang') ? '' : 'collapsed'; ?>" href="<?= base_url('keranjang'); ?>">
        <i class="bi bi-cart-check"></i>
        <span>Keranjang</span>
      </a>
    </li><!-- End Keranjang Nav -->

    <!-- ======= Produk Nav ======= -->
    <?php if (session()->get('role') == 'admin') { ?>
    <li class="nav-item">
      <a class="nav-link <?php echo ($uri == 'produk') ? '' : 'collapsed'; ?>" href="<?= base_url('produk'); ?>">
        <i class="bi bi-receipt"></i>
        <span>Produk</span>
      </a>
    </li><!-- End Produk Nav -->
    <?php } ?>

    <!-- ======= Profile Nav ======= -->
    <li class="nav-item">
      <a class="nav-link <?php echo ($uri == 'profile') ? '' : 'collapsed'; ?>" href="<?= base_url('profile'); ?>">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li><!-- End Profile Nav -->

  </ul><!-- End Sidebar Nav -->

</aside><!-- End Sidebar -->
