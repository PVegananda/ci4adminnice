<?php
$this->extend('layouts/main');
$this->section('content');
?>

<!-- ======= Page Title ======= -->
<div class="pagetitle">
  <h1>Keranjang</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/'); ?>">Home</a></li>
      <li class="breadcrumb-item active">Keranjang</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<!-- ======= Keranjang Section ======= -->
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <!-- ======= Card ======= -->
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Keranjang (Shopping Cart)</h5>
          <p>ini halaman keranjang</p>
        </div>
      </div><!-- End Card -->
    </div>
  </div>
</section><!-- End Keranjang Section -->

<?php $this->endSection(); ?>
