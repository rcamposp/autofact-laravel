## Instalation

- cp .env-example .env
- docker-compose exec --user laradock workspace bash
- composer install
- php artisan key:generate


## Setup DB
- docker-compose exec mysql mysql -uroot -proot
- create database data;
- grant all on root.* to 'data'@'localhost' identified by 'root';
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=data
DB_USERNAME=root
DB_PASSWORD=root
```
- docker-compose exec --user laradock workspace php artisan migrate