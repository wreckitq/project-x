# Project X
Most loved place for weekend projects


## Requirements
- PHP >= 7.4
- Laravel 7
- PostgreSQL 11.4

## Installation
- Clone repository
- copy .env.example to .env, sesuaikan isinya:
  - APP_URL
  - DB_XXX
- `composer install`
- `php artisan key:generate`
- `php artisan storage:link`
- `php artisan laravolt:link`
- `php artisan migrate:fresh --seed`

## How to launch application?
- `npm install` + `npm run watch`
- `php artisan serve` 
- atau gunakan web server favorit masing-masing 

## Knowing Issues
- ~~Turbolinks tidak berjalan dengan baik ketika aplikasi dijalankan menggunakan Browsersync (ketika menjalankan `npm run watch`).~~
    ~~https://github.com/turbolinks/turbolinks/issues/147~~

