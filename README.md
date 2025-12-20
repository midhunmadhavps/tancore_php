📦 Tanore Project Setup Guide
🛠 Requirements
    PHP: 8.2.12
    Composer: 2.8.9
    MySQL: 5.7+ / 8.0
    Web Server: Apache / Nginx (XAMPP)

📥 Install Dependencies
    composer require vlucas/phpdotenv

⚙️ Project Structure
    tanore/
    │
    ├── config/
    │   ├── createtables.php   # Creates database & tables
    │
    ├── controller/
    │   ├── create_user.php    # Creates admin user
    │
    ├── vendor/
    ├── .env
    ├── composer.json
    └── README.md

🗄️ Database Setup
    Step 1: Create Database & Tables
        Run the following file once:
        php tanore/config/createtables.php

👤 Create Admin User
    Step 2: Create User

    1. Open the file:
        tanore/controller/create_user.php
    2. Rename the username and password inside the file:
        $username = "admin";
        $password = "admin@123";

    3. Run the file:
        php tanore/controller/create_user.php
        
🧹 Security Notice (IMPORTANT)
    After creating the user:
    ❗ DELETE this file immediately
    tanore/controller/create_user.php
    This is required for security reasons.