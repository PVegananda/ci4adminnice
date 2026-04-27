# CodeIgniter 4 - Quick Start Guide

## ✅ Installation Complete!

**Version**: CodeIgniter 4.7.2  
**PHP**: 8.2+ required (Running 8.4.16)  
**Status**: Ready for development on macOS and Windows 11

---

## 🚀 Get Started (macOS)

```bash
# Navigate to project directory
cd /Users/pvegananda/Dev/05-Workspaces/02-Templates/code-igniter/joki-1

# Start development server
php spark serve

# Open in browser: http://localhost:8080
```

---

## 💻 Windows Setup Instructions

See **WINDOWS_SETUP.md** for detailed Windows 11 setup with:
- Laragon installation and configuration
- XAMPP alternative setup
- Database configuration
- Troubleshooting guide

---

## 📁 Key Directories

- **app/** - Your application code (Controllers, Models, Views, Config)
- **public/** - Web root (index.php, assets)
- **writable/** - Logs, cache, sessions (ensure permissions are correct)
- **tests/** - Unit tests with PHPUnit
- **vendor/** - Composer dependencies

---

## 🔧 Common Commands

```bash
# Show all available commands
php spark list

# Create a new controller
php spark make:controller Home

# Create a new model
php spark make:model User

# Create a migration
php spark make:migration CreateUsersTable

# Run migrations
php spark migrate

# Run tests
composer test

# Clear cache
php spark cache:clear
```

---

## 📋 Configuration

The `.env` file has been created with development settings:
- Base URL: `http://localhost:8080/`
- Database: MySQL (localhost, port 3306)
- Environment: development

**For production**, change `CI_ENVIRONMENT` to `production` in `.env`

---

## 📚 Documentation

- **CodeIgniter Official Docs**: https://codeigniter.com/user_guide/
- **GitHub Repository**: https://github.com/codeigniter4/CodeIgniter4

---

## ⚙️ System Requirements

✅ PHP 8.2+ (8.4 recommended)  
✅ Composer 2.7+  
✅ MySQL 5.7+ or MariaDB 10.2+  
✅ Web server (Apache/Nginx)  

---

## 🎯 Next Steps

1. **Review Configuration**: Check `app/Config/` files
2. **Create Database**: Set up MySQL database (see WINDOWS_SETUP.md)
3. **Build First Feature**: Create a controller and view
4. **Add Migrations**: Manage database schema
5. **Write Tests**: Ensure code quality

---

Happy coding! 🎉
