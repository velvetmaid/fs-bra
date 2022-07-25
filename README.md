<h1 align="center">LE CASA BONITA</h1>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="public/images/logo/le-casa-bonita.png" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About La Casa Bonita

Le Casa Bonita is a website-based company profile using laravel framework.

### Laravel
- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).
Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Install

- Run : $ git clone https://github.com/camieuxgoofy/cp-bra.git
- Go to the folder application using $ cd 'YOUR PATH DIRECTORY' command on your cmd or terminal
- Run : $ composer install on your cmd or terminal
- Copy .env.example file to .env on the root folder. You can type $ copy .env.example .env if using command prompt Windows or $ cp .env.example .env if using terminal Ubuntu
- Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
- Run : $ php artisan key:generate
- Run : $ php artisan migrate
- Run : $ php artisan serve

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
