<?php
$this->extend('layouts/main');
$this->section('content');
?>

<div class="pagetitle">
  <h1>Error 404</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/'); ?>">Home</a></li>
      <li class="breadcrumb-item active">Error 404</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Error 404</h5>
          <p>Page not found</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $this->endSection(); ?>
