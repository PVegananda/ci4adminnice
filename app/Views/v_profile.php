<?php
$this->extend('layouts/main');
$this->section('content');
?>

<!-- ======= Page Title ======= -->
<div class="pagetitle">
  <h1>Profile</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/'); ?>">Home</a></li>
      <li class="breadcrumb-item active">Profile</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<!-- ======= Profile Section ======= -->
<section class="section">
  <div class="row">
    <div class="col-lg-8">

      <!-- ======= Profile Card ======= -->
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Profile Information</h5>

          <!-- ======= Profile Details ======= -->
          <div class="row mb-3">
            <div class="col-lg-3 col-md-4 label">Username</div>
            <div class="col-lg-9 col-md-8"><?= session()->get('username'); ?></div>
          </div>

          <div class="row mb-3">
            <div class="col-lg-3 col-md-4 label">Role</div>
            <div class="col-lg-9 col-md-8">
              <?php if (session()->get('role') == 'admin') { ?>
                <span class="badge bg-danger"><?= strtoupper(session()->get('role')); ?></span>
              <?php } else { ?>
                <span class="badge bg-secondary"><?= strtoupper(session()->get('role')); ?></span>
              <?php } ?>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-lg-3 col-md-4 label">Email</div>
            <div class="col-lg-9 col-md-8">
              <a href="mailto:user@example.com" style="color: #4154f1;">user@example.com</a>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-lg-3 col-md-4 label">Login Time</div>
            <div class="col-lg-9 col-md-8"><?= date('Y-m-d H:i:s'); ?></div>
          </div>

          <div class="row mb-3">
            <div class="col-lg-3 col-md-4 label">Status</div>
            <div class="col-lg-9 col-md-8">
              <span class="badge bg-success">Sudah Login</span>
            </div>
          </div>
          <!-- End Profile Details -->

        </div>
      </div><!-- End Profile Card -->

    </div>
  </div>
</section><!-- End Profile Section -->

<?php $this->endSection(); ?>
