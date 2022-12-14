# laravel-portofolio

## Demo
https://laravel-portofolio.it-97.com/

    username : admin@gmail.com
    password : password

## Requirements
* PHP >= 7.4.3
* Laravel >= 8.0
* MySQL >= 5.7

# Getting started

## Installation
Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)

Clone the repository

    git clone https://github.com/antocloud02/laravel-portofolio.git

Switch to the repo folder

    cd laravel-portofolio

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

To make these files accessible from the web, you should create a symbolic link from `public/storage` to `storage/app/public`

    php artisan storage:link

Migrate and Seed Database`

    php artisan migrate --seed

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000
