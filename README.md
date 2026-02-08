# 🚪 Door Accessories E-commerce System
**A specialized e-commerce solution for manufacturing and selling door hardware.**

This is a full-stack web application built with **Laravel**. It provides a complete workflow for a door accessories factory to showcase their products, manage orders, and handle customer transactions.

---

## 🌟 Key Features
- **Product Management:** Complete CRUD system for door handles, hinges, locks, and more.
- **Admin Dashboard:** Secure area for the factory owner to manage inventory and view sales.
- **Shopping Cart:** Smooth user experience for adding and managing selected items.
- **Authentication & Security:** Built-in middleware to protect admin routes and user data.
- **Production-Ready Assets:** CSS and JS are pre-compiled (no need for `npm` installation).

---

## 🛠 Tech Stack
- **Backend:** PHP 8.x & Laravel 11/10
- **Frontend:** Blade Templates & Tailwind CSS
- **Database:** MySQL

---

## 🚀 Installation & Setup

To get this project running locally, follow these steps:

### 1. Clone the repository
git clone 
cd YOUR_REPO_NAME
### 2. Install PHP Dependencies
Bash
composer install
### 3. Environment Configuration
Copy .env.example to .env.
Create a new database in your local server (XAMPP/Laragon).
Update the DB_DATABASE, DB_USERNAME, and DB_PASSWORD in your .env file.
### 4. Database & App Key
Bash
php artisan key:generate
php artisan migrate --seed
5. Running the Application
Since the assets are already built in the public/build folder, you don't need to run npm. Just start the PHP server:
Bash
php artisan serve
Visit http://127.0.0.1:8000 in your browser.

📧 Contact
Created by [Ahmed Yasser] – feel free to reach out!

LinkedIn: [(https://www.linkedin.com/in/ahmed-yasser-8ab8a9337/)]

Email: ahmedeno543@gmail.com
