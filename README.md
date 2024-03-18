## Laravel 8 Travel Blog

Welcome to the Travel Blog Laravel project! This is a web application built using the Laravel framework, aimed at providing users with a shared travel experience and travel guide.

•	Author: Jianfeng Han(SD2A)  <br>
•	Student Number: D00251825<br>

## Reference
This tech blog is referenced from this github repository

This repository is linked to this youtube video where I show you how to create a complete blog in Laravel 8 using best practices.

• Author: Code With Dary
• Twitter: @codewithdary
• Instagram: @codewithdary

## Technologies / Programming Languages Used
•	Laravel 8 <br>
•	JavaScript<br>
•	Tailwind CSS <br>
•	MySQL<br>
•	PHP<br>


## Installation

To run the Travel Blog Laravel project on your local machine, follow these steps:

## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>

## Usage <br>
Setting up your development environment on your local machine: <br>
```
git clone git@github.com:codewithdary/laravel-8-complete-blog.git
cd laravel-8-complete-blog
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```

## Before starting <br>
Create a database <br>
```
mysql
create database laravelblog;
exit;
```

Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

Migrate the tables
```
php artisan migrate
```

## Features

- **User Authentication**: Secure user registration and authentication system.
- **Blog**: Create, read, update, and delete blog posts.
- **Search**: Search for specific destinations or topics within the blog.
- **Social Sharing**: Share blog posts on various social media platforms.
- **Interactive Maps**: Explore interactive maps featuring popular destinations.


## ScreenShots:





## Contact
For any questions, suggestions, or conspiracy theories you'd like to share, feel free to reach out to us at:
Email: (d00251825@student.dkit.ie)

## Contributing
Do not hesitate to contribute to the project by adapting or adding features ! Bug reports or pull requests are welcome.
