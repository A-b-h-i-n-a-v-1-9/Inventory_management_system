# 📦 Inventory Management System (IMS)

A web-based inventory management system built with PHP and MySQL, allowing users to manage products efficiently.

![Dashboard Preview](assets/screenshorts/dash.png) <!-- REPLACE WITH ACTUAL SCREENSHOT PATH -->

## ✨ Features
- **Add Products** - Create new inventory items with details.
- **Edit Products** - Modify existing product information.
- **Delete Products** - Remove items from inventory.
- **Dashboard Overview** - View all products in a clean interface.
- **Modular Codebase** - Organized with reusable components.

---

## 🖥️ Screenshots

### Dashboard
<!-- PASTE DASHBOARD SCREENSHOT HERE -->
![Dashboard](assets/screenshorts/dash.png) <!-- EXAMPLE: Replace with actual path -->

### Add Product Form
<!-- PASTE ADD PRODUCT FORM SCREENSHOT HERE -->
![Dashboard](assets/screenshorts/add.png)
### Edit Product Interface
<!-- PASTE EDIT INTERFACE SCREENSHOT HERE -->
![Dashboard](assets/screenshorts/edit.png)
---

## 🛠️ Technologies
- **Backend**: PHP
- **Frontend**: HTML, CSS, JavaScript
- **Database**: MySQL
- **Server**: XAMPP/Apache

---

## 🚀 Installation
1. **Clone the repository**:
   ```bash
   git clone https://github.com/your-username/IMS.git 
bash
    Deploy to server:

        Move the IMS/ folder to htdocs (XAMPP) or your server root.

    Database Setup:

        Import the provided .sql file into MySQL.

        Configure includes/db.php with your credentials.

    Access:

        Visit http://localhost/IMS in your browser.
IMS/
├── index.php               # Main dashboard
├── add_product.php         # Add product form
├── edit_product.php        # Edit product form
├── delete_product.php      # Delete handler
├── includes/
│   ├── db.php              # Database config
│   ├── header.php          # Header template
│   └── footer.php          # Footer template
├── assets/
│   ├── css/                # Stylesheets
│   └── js/                 # JavaScript files
│   └── screenshots/        # Screenshots directory (create if missing)

📝 Notes

    Requires PHP 7.4+ and MySQL 5.7+.

    Secure your db.php file in production environments.

    Customize styles in assets/css/.

📜 License

MIT License - See LICENSE file (if available).
