<?php
$this->extend('layouts/main');
$this->section('content');
?>

<!-- ======= Page Title ======= -->
<div class="pagetitle">
  <h1>Produk</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/'); ?>">Home</a></li>
      <li class="breadcrumb-item active">Produk</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<!-- ======= Produk Section ======= -->
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <!-- ======= Card ======= -->
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Produk</h5>
          <p>ini halaman produk</p>
        </div>
      </div><!-- End Card -->
    </div>
  </div>
</section><!-- End Produk Section -->

<?php $this->endSection(); ?>
