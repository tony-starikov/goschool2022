## Instalation

Clone the project to your local machine: git clone https://github.com/tony-starikov/goschool2022.git

Create database.sqlite file in project_folder/database/ for local development.

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

Check instructions https://laradock.io/getting-started/

Start laradock

Then run:

1. docker-compose exec workspace bash

2. composer install

3. php artisan key:generate

4. php artisan migrate:refresh

Check http://localhost/

Link to the project on heroku https://goschool2022.herokuapp.com

Enjoy)