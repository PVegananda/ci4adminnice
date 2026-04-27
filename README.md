# Toko Admin Dashboard

A clean, responsive admin dashboard built with **CodeIgniter 4** and **Bootstrap 5**. Perfect for e-commerce or admin panel projects.

## 🚀 Live Demo

**Username:** `april`  
**Password:** `123`

---

## ✨ Features

- 🔐 **Session-based Authentication** - Secure login system
- 👤 **User Profile Page** - Display user information from session
- 📱 **Responsive Design** - Mobile-friendly NiceAdmin template
- 🎨 **Bootstrap 5** - Modern UI components
- 🔒 **Route Protection** - Auth filter for protected pages
- 👨‍💼 **Role-based Access** - Admin-only menu items

---

## 📋 Menu Items

| Item | Role | Description |
|------|------|-------------|
| Home | All | Dashboard home page |
| Keranjang | All | Shopping cart page |
| Produk | Admin Only | Products management |
| Profile | All | User profile & session data |

---

## 🛠️ Tech Stack

- **Backend:** CodeIgniter 4.7+ (PHP 8.2+)
- **Frontend:** Bootstrap 5.2.3
- **Database:** Optional (currently using static auth)
- **Session:** CodeIgniter Session Library

---

## 🔧 Installation (Local)

### Prerequisites
- PHP 8.2+
- Composer
- XAMPP or similar

### Steps

1. **Clone the repository**
   ```bash
   git clone <your-repo-url>
   cd ci4adminnice
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Copy environment file**
   ```bash
   cp env .env
   ```

4. **Set base URL** (edit `.env`)
   ```
   app.baseURL = 'http://localhost:8080/'
   ```

5. **Start the server**
   ```bash
   php spark serve
   ```

6. **Access the app**
   - Open http://localhost:8080/login
   - Login with: `april` / `123`

---

## 📄 File Structure

```
app/
├── Controllers/
│   ├── AuthController.php      # Login/Logout logic
│   └── Home.php                # Main dashboard
├── Filters/
│   └── Auth.php                # Route protection filter
└── Views/
    ├── layouts/
    │   ├── main.php            # Main layout (with sidebar)
    │   └── layout_clear.php     # Login page layout
    ├── partials/
    │   ├── header.php           # Top navigation
    │   ├── sidebar.php          # Left navigation menu
    │   └── footer.php           # Page footer
    ├── v_login.php              # Login form
    └── v_profile.php            # User profile page
```

---

## 🔑 Default Credentials

| Username | Password | Role |
|----------|----------|------|
| april | 123 | admin |

**⚠️ For production:** Replace static credentials with database authentication.

---

## 🚀 Deploy to Replit

### 1. Push to GitHub

```bash
cd /path/to/ci4adminnice
git init
git add .
git commit -m "CodeIgniter 4 Admin Dashboard"
git branch -M main
git remote add origin https://github.com/YOUR_USERNAME/ci4adminnice.git
git push -u origin main
```

### 2. Create Replit Project

1. Go to [replit.com](https://replit.com)
2. Click **"Create"** → **"Import from GitHub"**
3. Select your repository (`YOUR_USERNAME/ci4adminnice`)
4. Replit auto-configures PHP
5. Click **"Run"** to start the server
6. Share the generated URL!

### 3. First Run on Replit

- Navigate to `/login`
- Login: `april` / `123`
- Start using the dashboard!

---

## 📝 Notes

- **Sessions:** CodeIgniter 4 sessions work on Replit (stored in `writable/session/`)
- **Database:** Currently uses static credentials. To use a database on Replit:
  - Add MySQL service in Replit
  - Update `Config/Database.php`
  - Create migration for users table
- **Environment:** Production mode is recommended for Replit deployment

---

## 📞 Support

For issues or questions:
1. Check the [CodeIgniter 4 Documentation](https://codeigniter.com)
2. Review the code comments in `app/Controllers/AuthController.php`
3. Check `Config/Filters.php` for route protection setup

---

**Made with ❤️ using CodeIgniter 4**

## Server Requirements

PHP version 8.2 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - The end of life date for PHP 8.1 was December 31, 2025.
> - If you are still using below PHP 8.2, you should upgrade immediately.
> - The end of life date for PHP 8.2 will be December 31, 2026.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
