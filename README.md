<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Belajar Dasar Laravel

Pemahaman awal di dalam pembelajaran laravel, yaitu:

- Cara penggunaan blade template engine di laravel.
- Cara penggunaan routes.
- Cara membuat controller dengan menggunakan terminal laravel.
- Melakukan migrasi database.

## Langkah - Langkah Instalasi Awal Laravel 
```
composer create-project laravel/laravel:^10.0 example-app
```
"example-app" ubah menjadi nama projek yang diinginkan.
## Langkah untuk Menjalankan Laravel
```
php artisan serve
```
## Langkah untuk migrasi database
```
php artisan migrate
```
## Langkah untuk Membuat File Controller
```
php artisan make:controller <NamaController>
```
Isi nama controller sesuai kebutuhan dan perhatikan huruf besar kecil di dalam nama controller yang sudah di buat.

## Contoh Blade Template Sederhana
```
@section('nama_variabel')
@endsection()

@yield('nama_variable')
```
