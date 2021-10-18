# West Acton Assessment

## Installation

Project requires PHP 7.3+ or above to run.
Framework used: Laravel v8.0
Database: MySQL

Setup environment file.

Copy .env file if it does not exist
```sh
cp .env.example .env
```

Setup database connection inside the .env file
```sh
DB_DATABASE=westacton
DB_USERNAME=<mysql_username>
DB_PASSWORD=<mysql_password>
```

**Make sure the DB_DATABASE value is an existing database

Install the dependencies and devDependencies and start the server.

```sh
composer install
npm install
npm run dev
php artisan key:generate
php artisan migrate
php artisan serve
```

Open browser
```sh
http://127.0.0.1:8000
```