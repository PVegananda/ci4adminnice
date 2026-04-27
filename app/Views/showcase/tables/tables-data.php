<?php
$this->extend('layouts/main');
$this->section('content');
?>

<div class="pagetitle">
  <h1>Data Tables</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/'); ?>">Home</a></li>
      <li class="breadcrumb-item active">Data Tables</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Employee Data</h5>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th><b>#</b></th>
                <th>Name</th>
                <th>Position</th>
                <th>Age</th>
                <th>Start Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Brandon Jacob</td>
                <td>Designer</td>
                <td>28</td>
                <td>2016-05-25</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Bridie Kessler</td>
                <td>Developer</td>
                <td>35</td>
                <td>2014-12-05</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Ashleigh Langosh</td>
                <td>Finance</td>
                <td>45</td>
                <td>2011-08-12</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Angus Grady</td>
                <td>HR</td>
                <td>34</td>
                <td>2012-06-11</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Raheem Lehner</td>
                <td>Dynamic Division Officer</td>
                <td>47</td>
                <td>2011-04-19</td>
              </tr>
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>
    </div>
  </div>
</section>

<?php $this->endSection(); ?>
