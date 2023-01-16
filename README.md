<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About BookApp

PRI adalah aplikasi pengelolaan rawat inap dan pemeriksaan pasien sederhana yang masih dalam tahap pengembangan. Aplikasi ini dikembangan menggunakan framework Laravel.

## Installation

1. `composer install --ignore-platform-req=php` untuk menginstall dependencies PHP
2. `npm install` untuk menginstall dependencies NodeJS
3. `cp .env.example .env` untuk membuat file `.env`
4. `php artisan key:generate` untuk menggenerate `APP_KEY`
5. Create, Migrate, dan Seed data terlebih dahulu<br>
    ```
    Create Database : buat database sesuai dengan isi `DB_DATABASE .env`
    Migrate Table : php artisan migrate
    Seed Data : php artisan db:seed
    ```
6. `php artisan serve` untuk menjalankan server

## Demo
| Home Page | Dashboard Page |
| --- | --- |
[![Home Page](/public/screens/s1.png)](/public/screens/s1.png)  | [![Dashboard Page](/public/screens/s2.png)](/public/screens/s2.png)

| Login | Register |
| --- | --- |
[![Login](/public/screens/s3.png)](/public/screens/s3.png)  | [![Register](/public/screens/s4.png)](/public/screens/s4.png)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).