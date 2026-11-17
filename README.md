Pharmacy Management System

A web-based Pharmacy Management System developed using Laravel and PHP to manage pharmacy operations.

About the Project

The Pharmacy Management System is a web application designed to help manage pharmacy-related information, including medicines, customers, and sales.

Technologies Used

PHP

Laravel

MySQL

HTML

CSS

JavaScript

Features

Medicine Management

Customer Management

Sales Management

User Login and Authentication

Note: Include only features that are implemented and working in your application.

Project Structure

pharmacy-management/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
└── tests/

Installation and Setup

Clone the repository:

git clone https://github.com/Shifara12/pharmacy-management-system.git

Navigate to the project folder:

cd pharmacy-management-system

Install PHP dependencies:

composer install

Create your environment file:

cp .env.example .env

Generate the application key:

php artisan key:generate

Configure your database settings in the .env file.

Run database migrations:

php artisan migrate

Start the Laravel development server:

php artisan serve

Open http://127.0.0.1:8000 in your browser.

Author

Fathima Shifara

GitHub: Shifara12

License

This project is created for educational and learning purposes.
