## Laravel 8 Travel Blog

Welcome to the Travel Blog Laravel project! This is a web application built using the Laravel framework, aimed at providing users with a shared travel experience and travel guide.

•	Author: Jianfeng Han(SD2A)  <br>
•	Student NUmber: D00251825<br>

## Features

- **User Authentication**: Secure user registration and authentication system.
- **Blog**: Create, read, update, and delete blog posts.
- **Search**: Search for specific destinations or topics within the blog.
- **Social Sharing**: Share blog posts on various social media platforms.
- **Interactive Maps**: Explore interactive maps featuring popular destinations.

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

<img width="1512" alt="Screenshot 2024-03-18 at 02 09 03" src="https://github.com/EricHanJf/PhpCA1Blog/assets/119952942/e7ec3681-88b1-492d-ad92-ea804eaaa30c">

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

## Contributing
Do not hesitate to contribute to the project by adapting or adding features ! Bug reports or pull requests are welcome.
