## Instalation

Clone project to your local machine.

Create database file in laravel_folder/database/database.sqlite for local development.

Rename .env.example to .env

Edit .env file.

Delete this strings:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

And add this one:

DB_CONNECTION=sqlite
DB_FOREIGN_KEYS=true

I'm using https://laradock.io/ to develop projects locally.

Clone laradock to your project folder: git clone https://github.com/laradock/laradock.git

Go to the laradock folder and run in the terminal: docker-compose up -d nginx mysql phpmyadmin redis workspace

Then run:

1. docker-compose exec workspace bash

2. composer install

3. php artisan key:generate

4. php artisan migrate:refresh

Check http://localhost/

Link to the project on heroku https://goschool2022.herokuapp.com

Enjoy)