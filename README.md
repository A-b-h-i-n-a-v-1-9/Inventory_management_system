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
   ```
3. Deploy to Server
Move the IMS/ folder to the htdocs/ directory if using XAMPP, or to your server’s root directory.

4. Database Setup
Import the provided .sql file (usually named ims.sql) into your MySQL database using phpMyAdmin or command line.

Update your database credentials in the file:
  ```bash
  includes/db.php
```
4. Access the Application
Open your browser and navigate to:
```bash
http://localhost/IMS
 ```

## 📝 Developer Notes
✔ Requires PHP 7.4+ and MySQL 5.7+

🔐 Make sure to secure includes/db.php in production environments

🎨 You can customize the design from assets/css/ folder
