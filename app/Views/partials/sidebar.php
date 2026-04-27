<?php
$uri = service('request')->getUri()->getPath();
function isActive($path) {
  $currentUri = service('request')->getUri()->getPath();
  return strpos($currentUri, $path) !== false;
}
?>

<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link <?= ($uri === '/' || $uri === '') ? '' : 'collapsed'; ?>" href="<?= base_url('/'); ?>">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link <?= isActive('/produk') ? '' : 'collapsed'; ?>" href="<?= base_url('/produk'); ?>">
        <i class="bi bi-bag"></i>
        <span>Produk</span>
      </a>
    </li><!-- End Produk Nav -->

    <li class="nav-item">
      <a class="nav-link <?= isActive('/keranjang') ? '' : 'collapsed'; ?>" href="<?= base_url('/keranjang'); ?>">
        <i class="bi bi-cart"></i>
        <span>Keranjang</span>
      </a>
    </li><!-- End Keranjang Nav -->

    <li class="nav-item">
      <a class="nav-link <?= isActive('/components') ? '' : 'collapsed'; ?>" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse <?= isActive('/components') ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?= base_url('/components/alerts'); ?>" class="<?= isActive('/components/alerts') ? 'active' : ''; ?>">
            <i class="bi bi-circle"></i><span>Alerts</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('/components/accordion'); ?>" class="<?= isActive('/components/accordion') ? 'active' : ''; ?>">
            <i class="bi bi-circle"></i><span>Accordion</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Badges</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Breadcrumbs</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Buttons</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Cards</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Carousel</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>List group</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Modal</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Tabs</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Pagination</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Progress</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Spinners</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Tooltips</span>
          </a>
        </li>
      </ul>
    </li><!-- End Components Nav -->

    <li class="nav-item">
      <a class="nav-link <?= isActive('/forms') ? '' : 'collapsed'; ?>" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse <?= isActive('/forms') ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?= base_url('/forms/elements'); ?>" class="<?= isActive('/forms/elements') ? 'active' : ''; ?>">
            <i class="bi bi-circle"></i><span>Form Elements</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('/forms/layouts'); ?>" class="<?= isActive('/forms/layouts') ? 'active' : ''; ?>">
            <i class="bi bi-circle"></i><span>Form Layouts</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Form Editors</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Form Validation</span>
          </a>
        </li>
      </ul>
    </li><!-- End Forms Nav -->

    <li class="nav-item">
      <a class="nav-link <?= isActive('/tables') ? '' : 'collapsed'; ?>" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse <?= isActive('/tables') ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?= base_url('/tables/general'); ?>" class="<?= isActive('/tables/general') ? 'active' : ''; ?>">
            <i class="bi bi-circle"></i><span>General Tables</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('/tables/data'); ?>" class="<?= isActive('/tables/data') ? 'active' : ''; ?>">
            <i class="bi bi-circle"></i><span>Data Tables</span>
          </a>
        </li>
      </ul>
    </li><!-- End Tables Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Chart.js</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>ApexCharts</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>ECharts</span>
          </a>
        </li>
      </ul>
    </li><!-- End Charts Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Remix Icons</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>Boxicons</span>
          </a>
        </li>
      </ul>
    </li><!-- End Icons Nav -->

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <a class="nav-link <?= isActive('/profile') ? '' : 'collapsed'; ?>" href="<?= base_url('/profile'); ?>">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
      <a class="nav-link <?= isActive('/faq') ? '' : 'collapsed'; ?>" href="<?= base_url('/faq'); ?>">
        <i class="bi bi-question-circle"></i>
        <span>F.A.Q</span>
      </a>
    </li><!-- End F.A.Q Page Nav -->

    <li class="nav-item">
      <a class="nav-link <?= isActive('/contact') ? '' : 'collapsed'; ?>" href="<?= base_url('/contact'); ?>">
        <i class="bi bi-envelope"></i>
        <span>Contact</span>
      </a>
    </li><!-- End Contact Page Nav -->

    <li class="nav-item">
      <a class="nav-link <?= isActive('/register') ? '' : 'collapsed'; ?>" href="<?= base_url('/register'); ?>">
        <i class="bi bi-card-list"></i>
        <span>Register</span>
      </a>
    </li><!-- End Register Page Nav -->

    <li class="nav-item">
      <a class="nav-link <?= isActive('/login') ? '' : 'collapsed'; ?>" href="<?= base_url('/login'); ?>">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Login</span>
      </a>
    </li><!-- End Login Page Nav -->

    <li class="nav-item">
      <a class="nav-link <?= isActive('/error-404') ? '' : 'collapsed'; ?>" href="<?= base_url('/error-404'); ?>">
        <i class="bi bi-dash-circle"></i>
        <span>Error 404</span>
      </a>
    </li><!-- End Error 404 Page Nav -->

    <li class="nav-item">
      <a class="nav-link <?= isActive('/blank') ? '' : 'collapsed'; ?>" href="<?= base_url('/blank'); ?>">
        <i class="bi bi-file-earmark"></i>
        <span>Blank</span>
      </a>
    </li><!-- End Blank Page Nav -->

  </ul>

</aside><!-- End Sidebar-->
