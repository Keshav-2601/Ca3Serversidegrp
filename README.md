# Dublin Tourist Attractions - Laravel Application

This is a Laravel application developed for showcasing tourist attractions in Dublin. It provides a platform for users to explore, create, update, and delete their own Dublin destinations.

## Features

- **Guest Login**: Visitors can browse the site without needing to register or log in.
- **CRUD Operations by Registered Users**: Registered users have the ability to create, read, update, and delete their own Dublin destinations.
- **Admin Privileges**: In addition to the CRUD operations, admins have the ability to add more hotels, a feature not available to registered users.

## Authors

- **Keshav Verma**
    - *Features Implemented*:
    - Making all Database for project and seeding data into it
    - Creating all the Models- Hotel,Images,Destinations.
    - Making Authenticationa and Authorization part for the application.(Use laravel Breeze for this Reference: https://laravel.com/docs/11.x/starter-kits#laravel-breeze)
    - Making Home page,Adminpage,Guest page for the application
    - Making addhotelPage for the admin.
    - Design the home page,edit page,create page,login page & register page using css(by creating css files)
    - Controllers:Auth controllers.
    - Dividing the application into 3 different layers one for guest,one for Admin, one for registered users.
      

- **Mohamad Ashik**
    - *Features Implemented*: [Add the features you implemented here]

## Requirements

- PHP 7.3 or higher
- Node 12.13.0 or higher

## Getting Started

Setting up your development environment on your local machine:

```bash
git clone git@github.com:Keshav-2601/ca3Serversidegrp.git
cd laravel-8-complete-blog
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve

##Before starting, create a database:

mysql
create database laravelblog;
exit;

Setup your database credentials in the .env file:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=d00253307blog1
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}


#Built With
Laravel - The web framework used
[Any other technologies used in the project]
License
This project is licensed under the [License Name] - see the LICENSE.md file for details
