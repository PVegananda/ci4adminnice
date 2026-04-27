# NiceAdmin Layout Integration Guide

## Overview

This CodeIgniter 4 project has been integrated with the **NiceAdmin Bootstrap template**. The template has been sliced into reusable components and follows the MVC pattern.

## Folder Structure

```
app/Views/
├── layouts/
│   └── main.php              # Main layout template wrapper
├── components/
│   ├── header.php            # Top navigation header
│   ├── sidebar.php           # Left sidebar navigation
│   └── footer.php            # Footer component
├── v_home.php                # Home page view
├── v_kerajang.php            # Shopping cart view
├── v_produk.php              # Products view
├── dashboard.php             # Dashboard example
└── layout.php                # Layout reference file

public/
└── assets/                   # NiceAdmin template assets
    ├── css/                  # Stylesheets
    ├── js/                   # JavaScripts
    ├── vendor/               # Third-party libraries (Bootstrap, icons, etc.)
    └── img/                  # Images and icons
```

## How to Use the Layout

### 1. Extending the Main Layout

In your view files, use the `extend()` method to wrap your content with the main layout:

```php
<?php
$this->extend('layouts/main');
$this->section('content');
?>

<!-- Your page content here -->

<?php $this->endSection(); ?>
```

### 2. Setting Dynamic Page Title

Pass the title to your controller before rendering the view:

```php
// In your controller
return view('your_view', [
    'title' => 'Your Page Title - NiceAdmin'
]);
```

The title will be displayed in the browser tab and can be used in the page header.

### 3. Structure of a Complete View

```php
<?php
$this->extend('layouts/main');
$this->section('content');
?>

<!-- Page Title with Breadcrumb -->
<div class="pagetitle">
  <h1>Page Title</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('/'); ?>">Home</a></li>
      <li class="breadcrumb-item active">Current Page</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<!-- Page Content -->
<section class="section">
  <div class="row">
    <div class="col-lg-8">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card Title</h5>
          <p>Card content goes here</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $this->endSection(); ?>
```

## Components

### Header Component (`components/header.php`)
- Logo and brand
- Search bar
- Notifications dropdown
- Messages dropdown
- User profile dropdown
- Responsive toggle for sidebar

### Sidebar Component (`components/sidebar.php`)
- Main navigation menu
- Collapsible menu items
- Icons from Bootstrap Icons
- Page links

### Footer Component (`components/footer.php`)
- Copyright information
- Credits

## Available Bootstrap Classes

The template uses Bootstrap 5.2.3. Some commonly used classes:

- Grid: `.container`, `.row`, `.col-*`
- Cards: `.card`, `.card-body`, `.card-title`
- Alerts: `.alert`, `.alert-primary`, `.alert-danger`, etc.
- Buttons: `.btn`, `.btn-primary`, `.btn-secondary`, etc.
- Badges: `.badge`, `.badge-primary`, `.badge-danger`, etc.
- Breadcrumb: `.breadcrumb`, `.breadcrumb-item`
- Dropdowns: `.dropdown`, `.dropdown-menu`, `.dropdown-item`

## Using Base URL in Views

Always use `base_url()` helper for internal links and asset paths:

```php
<!-- Links -->
<a href="<?= base_url('controller/action'); ?>">Link</a>

<!-- Images -->
<img src="<?= base_url('assets/img/image.png'); ?>" alt="Image">

<!-- Forms -->
<form action="<?= base_url('controller/method'); ?>" method="POST">
```

## Icons

The template includes several icon libraries:
- **Bootstrap Icons** (`.bi` class)
- **Boxicons** (`.bx` class)
- **Remix Icons** (`.ri` class)

Example usage:
```html
<i class="bi bi-grid"></i>     <!-- Dashboard icon -->
<i class="bi bi-bell"></i>     <!-- Notification bell -->
<i class="bi bi-person"></i>   <!-- User profile icon -->
<i class="bi bi-search"></i>   <!-- Search icon -->
```

## Customization

### Changing Colors and Styles

Edit `public/assets/css/style.css` or `public/assets/scss/style.scss` (if using SCSS).

### Modifying Navigation Menu

Edit `app/Views/components/sidebar.php` to add or remove menu items.

### Adding Global Variables

In your controller, pass variables to all views:

```php
return view('your_view', [
    'title' => 'Page Title',
    'additionalCSS' => '<link rel="stylesheet" href="' . base_url('assets/custom.css') . '">',
    'additionalJS' => '<script src="' . base_url('assets/custom.js') . '"></script>'
]);
```

Then use them in your layout:
```php
<?= isset($additionalCSS) ? $additionalCSS : ''; ?>
<?= isset($additionalJS) ? $additionalJS : ''; ?>
```

## Example Views

- **dashboard.php** - Full dashboard with cards and charts
- **v_home.php** - Simple home page
- **v_produk.php** - Products listing page
- **v_kerajang.php** - Shopping cart page

## Responsive Design

The template is fully responsive and works on:
- Desktop
- Tablets
- Mobile devices

Use Bootstrap's responsive classes (`.d-none`, `.d-lg-block`, etc.) for responsive behavior.

## Asset Files Included

- **CSS:** Bootstrap, Bootstrap Icons, Boxicons, Remix Icons, Quill Editor, Chart.js, Simple DataTables
- **JavaScript:** Bootstrap Bundle, ApexCharts, Chart.js, ECharts, Quill, Simple DataTables, TinyMCE
- **Images:** Logo, user profiles, sample images

## Troubleshooting

### Assets Not Loading
- Ensure `public/assets/` folder exists
- Check `app/Config/App.php` and verify `$baseURL` is correct
- Clear browser cache

### Layout Not Applied
- Verify you're using `$this->extend('layouts/main');` in your view
- Check that `$this->section('content');` and `$this->endSection();` are properly placed

### Links Not Working
- Use `base_url()` helper for all internal links
- Check CodeIgniter routing configuration in `app/Config/Routes.php`

## Resources

- [CodeIgniter 4 Documentation](https://codeigniter.com/user_guide/)
- [Bootstrap 5 Documentation](https://getbootstrap.com/docs/)
- [NiceAdmin Template](https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/)

---

**Last Updated:** 2026-04-27
**Template Version:** NiceAdmin Bootstrap v5.2.3
**CodeIgniter Version:** 4.7+
