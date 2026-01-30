# Colab Template Theme

A lightweight, production-ready **custom child theme of Hello Elementor** used as a starter template for Colab / client projects.

## ✨ Features

- Child theme of **Hello Elementor**
- Clean global CSS architecture
- Custom JS hook (`assets/js/main.js`)
- CSS variables (design tokens)
- Accessibility-friendly defaults
- GitHub-friendly & reusable

## 📦 Requirements

- WordPress 6.0+
- PHP 8.0+
- Hello Elementor theme

## 🚀 Installation

### Option 1: WordPress Admin
1. Download this repo as ZIP
2. Go to **Appearance → Themes → Upload Theme**
3. Upload and activate

### Option 2: Manual / SFTP
Upload the theme folder directly to your server using **SFTP / FTP**.
Target directory:
wp-content/themes/colab-template-theme

Steps:
1. Connect to your server using SFTP
2. Navigate to: wp-content/themes/
3. Upload the entire `colab-template-theme` folder
4. Go to **WordPress Admin → Appearance → Themes**
5. Activate **Colab Template Theme**
   
> Recommended for development, staging, and production environments.

---

## 🧩 Development Notes

- **Global CSS** lives in `style.css`
- **Global JS** lives in `assets/js/main.js`
- Page-level styling should be handled in **Elementor**
- Prefer CSS variables over hardcoded values
- Keep this theme clean — avoid page-specific logic

---
