<?php
$this->extend('layouts/main');
$this->section('content');
?>

<div class="pagetitle">
  <h1>Form Elements</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/'); ?>">Home</a></li>
      <li class="breadcrumb-item active">Form Elements</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Form Elements</h5>
          <p>Add content here</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $this->endSection(); ?>
