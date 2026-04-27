# CodeIgniter 4 - Windows 11 Setup Guide

## Project Information
- **Framework**: CodeIgniter 4.7.2
- **PHP Version Required**: 8.2+ (currently running 8.4.16)
- **Composer Version**: 2.9.2+
- **Installation Date**: April 27, 2026

## Current Setup (macOS)
✅ CodeIgniter 4.7.2 installed successfully  
✅ PHP 8.4.16 (via Laravel Herd)  
✅ Composer 2.9.2  
✅ All dependencies installed  
✅ `.env` configuration created  

---

## Windows 11 Setup Instructions

### Using Laragon (Recommended)

#### 1. **Install Laragon**
   - Download from: https://laragon.org/download/
   - Install with default settings
   - Laragon includes PHP 8.2+ and Composer

#### 2. **Clone/Copy Project**
   ```bash
   # Copy this project folder to Laragon's www directory:
   C:\laragon\www\joki-1
   ```

#### 3. **Install Dependencies**
   ```bash
   cd C:\laragon\www\joki-1
   composer install
   ```

#### 4. **Start Laragon**
   - Open Laragon application
   - Click "Start All"
   - Access your project at: http://joki-1.test

---

### Using XAMPP

#### 1. **Install XAMPP**
   - Download from: https://www.apachefriends.org/
   - Choose version with PHP 8.2 or higher

#### 2. **Copy Project**
   ```bash
   # Copy to XAMPP htdocs:
   C:\xampp\htdocs\joki-1
   ```

#### 3. **Install Dependencies**
   ```bash
   cd C:\xampp\htdocs\joki-1
   composer install
   ```

#### 4. **Configure .env**
   ```
   app.baseURL = 'http://localhost/joki-1/'
   database.default.hostname = localhost
   database.default.username = root
   database.default.password = 
   database.default.port = 3306
   ```

#### 5. **Access Project**
   - Open http://localhost/joki-1

---

## Troubleshooting

### Issue: Composer not found
- Ensure PHP is in system PATH
- Verify PHP version: php --version

### Issue: Database connection failed  
- Ensure MySQL is running
- Check credentials in .env file

### Issue: 404 errors
- Verify .htaccess is in place
- Check web server rewrite rules
