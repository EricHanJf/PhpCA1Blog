## Laravel 8 Travel Blog

Welcome to the Travel Blog Laravel project! This is a web application built using the Laravel framework, aimed at providing users with a shared travel experience and travel guide.

•	Author: Jianfeng Han(SD2A)  <br>
•	Student Number: D00251825<br>

## Reference

This tech blog is referenced from [this GitHub repository](https://github.com/example-repo).

This repository is linked to [this YouTube video](https://www.youtube.com/watch?v=your-video-id) where I show you how to create a complete blog in Laravel 8 using best practices.

- **Author:** Code With Dary
- **Twitter:** [@codewithdary](https://twitter.com/codewithdary)
- **Instagram:** [@codewithdary](https://instagram.com/codewithdary)

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
<img width="1512" alt="Screenshot 2024-03-18 at 02 09 03" src="https://github.com/EricHanJf/PhpCA1Blog/assets/119952942/3cd25625-0b56-4159-8a1f-5b32b7e2ec0d">
<img width="1512" alt="Screenshot 2024-03-18 at 02 10 14" src="https://github.com/EricHanJf/PhpCA1Blog/assets/119952942/c0295210-1f6a-4acd-b193-779d0c90aed7">
<img width="1512" alt="Screenshot 2024-03-18 at 02 10 01" src="https://github.com/EricHanJf/PhpCA1Blog/assets/119952942/ce660b1e-5a5f-49e7-8762-2faf1de4cce5">
<img width="1512" alt="Screenshot 2024-03-01 at 22 55 22" src="https://github.com/EricHanJf/PhpCA1Blog/assets/119952942/de5680e3-3b9a-45ec-8f34-4b9f04347470">
<img width="1512" alt="Screenshot 2024-03-18 at 02 09 40" src="https://github.com/EricHanJf/PhpCA1Blog/assets/119952942/e6ef83c4-c408-42c2-b003-0826eefdf8af">
<img width="1512" alt="Screenshot 2024-03-18 at 02 09 34" src="https://github.com/EricHanJf/PhpCA1Blog/assets/119952942/762496dc-1752-4a0d-8927-3fdf91ef3462">
<img width="1512" alt="Screenshot 2024-03-18 at 02 10 30" src="https://github.com/EricHanJf/PhpCA1Blog/assets/119952942/100454b9-bdfb-4838-a0df-096e468b023b">
<img width="1512" alt="Screenshot 2024-03-18 at 02 11 01" src="https://github.com/EricHanJf/PhpCA1Blog/assets/119952942/7fa3ce4f-985b-4e9b-bb43-d374e5021b89">
<img width="1512" alt="Screenshot 2024-03-18 at 02 11 20" src="https://github.com/EricHanJf/PhpCA1Blog/assets/119952942/3ae2ccf3-c52c-4cb7-9920-e88e46dd5067">
<img width="1512" alt="Screenshot 2024-03-18 at 02 11 30" src="https://github.com/EricHanJf/PhpCA1Blog/assets/119952942/34f7ff54-1da9-4f40-ab5b-0af82f968243">




## Contact
For any questions, suggestions, or conspiracy theories you'd like to share, feel free to reach out to us at:
Email: (d00251825@student.dkit.ie)

## Contributing
Do not hesitate to contribute to the project by adapting or adding features ! Bug reports or pull requests are welcome.
