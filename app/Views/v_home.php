<?php
$this->extend('layouts/main');
$this->section('content');
?>

<div class="pagetitle">
  <h1>Home</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/'); ?>">Dashboard</a></li>
      <li class="breadcrumb-item active">Home</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-8">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Welcome to NiceAdmin</h5>
          <p>This is your home page. Customize it with your content.</p>
          <p>Use <code>$this->extend('layouts/main');</code> to extend the layout in your views.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $this->endSection(); ?>
