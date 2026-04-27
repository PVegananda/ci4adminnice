# 🚀 Replit Deployment Guide

## Step-by-Step Instructions

### STEP 1: Initialize Git Repository (Local)

Run these commands in your terminal:

```bash
cd /Users/pvegananda/Dev/05-Workspaces/02-Templates/code-igniter/ci4adminnice
git init
git add .
git commit -m "CodeIgniter 4 Admin Dashboard - Toko"
git branch -M main
```

### STEP 2: Create GitHub Repository

1. Go to [github.com](https://github.com) and login
2. Click the **"+"** icon → **"New repository"**
3. Repository name: `ci4-admin-dashboard` (or any name you like)
4. **DO NOT** initialize with README (you already have one)
5. Click **"Create repository"**

### STEP 3: Push Code to GitHub

After creating the repository, copy the commands GitHub shows you. It will be something like:

```bash
git remote add origin https://github.com/YOUR_USERNAME/ci4-admin-dashboard.git
git push -u origin main
```

Run these exact commands in your terminal.

### STEP 4: Create Replit Project

1. Go to [replit.com](https://replit.com)
2. Click **"Create"** button (top left)
3. Select **"Import from GitHub"**
4. Paste your GitHub repository URL: `https://github.com/YOUR_USERNAME/ci4-admin-dashboard`
5. Click **"Import from GitHub"**
6. Wait for Replit to import and setup (30 seconds - 1 minute)

### STEP 5: Run on Replit

1. Click the **"Run"** button (top center)
2. Replit will start the PHP development server
3. Wait for the message: `Listening on http://0.0.0.0:8080`
4. A browser tab will open with your app's URL (something like: `https://ci4-admin-dashboard.YOUR_USERNAME.repl.co`)

### STEP 6: Test the Demo

1. Click on the URL shown in the preview (or click the "Open in new tab" icon)
2. You'll see the CodeIgniter welcome page (or it may redirect to /login)
3. Go to `/login` in the URL bar
4. Login with:
   - Username: `april`
   - Password: `123`
5. ✅ You should see the dashboard!

---

## 📌 Important Notes

### Free Tier Limits on Replit

- ✅ Runs 24/7 (with a small sleep mode after inactivity)
- ✅ Free hosting for up to 5 projects
- ✅ 512MB memory
- ✅ Perfect for demo purposes
- ⚠️ If inactive for 1 hour, project goes to sleep (wakes up when you visit)

### How to Avoid Sleep Mode

If you want the project to stay awake:
1. Upgrade to Replit Hacker ($7/month) - optional
2. Or ping it with a simple uptime bot (free alternative)

### Sharing Your Demo

Once deployed, share this URL:
```
https://ci4-admin-dashboard.YOUR_USERNAME.repl.co/login
```

Demo credentials:
- Username: `april`
- Password: `123`

---

## 🔧 Making Updates

If you make changes locally and want to update on Replit:

1. Make changes in VS Code
2. Commit to Git:
   ```bash
   git add .
   git commit -m "Your change description"
   git push origin main
   ```
3. Go to Replit and click the refresh icon
4. Click **"Run"** again
5. ✅ Your changes are live!

---

## 🐛 Troubleshooting

### Problem: "Cannot find ../bootstrap"
- **Solution:** Make sure you committed the entire folder including `vendor/`. Delete `.replit` cache and click Run again.

### Problem: "Base URL is not set"
- **Solution:** The `.env` file needs the correct base URL. Replit generates a URL automatically - no manual setup needed.

### Problem: "Port 8080 already in use"
- **Solution:** Click the Stop button, wait 5 seconds, then click Run again.

---

## 📝 Summary

✅ README.md - Updated with Toko info  
✅ .replit - Configured for CodeIgniter 4  
✅ .gitignore - Already exists  
✅ You're ready to deploy!

**Next:** Follow STEP 1 above in your terminal 🚀
