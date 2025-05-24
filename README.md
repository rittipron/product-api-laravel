<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# 🛠️ Product API - Laravel 10 + Passport

A secure and scalable Laravel API for product data. Built with OAuth2 via Laravel Passport and auto-documented via Swagger.

## 📦 Stack

- Laravel 12
- Passport (OAuth2)
- Swagger (via `l5-swagger`)
- Seeded User via `UserSeeder`

## 📌 Features

- OAuth2 token issuance (client_credentials / password)
- Get product by SKU
- Swagger auto-generated docs
- Easy-to-use seeder for testing

## 🚀 Getting Started

1. Install dependencies
- composer install

2. Setup .env
- DB_... (ตาม database ของคุณ)

3. Migrate & Seed
- php artisan migrate --seed

4. Install Passport
-  php artisan passport:install

## 🔐 OAuth2 Flow (Password Grant)

### 🌱 Default Seeder User:
{
  "email": "test@example.com",
  "password": "password"
}

### Get Token
POST /oauth/token
Content-Type: application/x-www-form-urlencoded

{
  "grant_type": "password",
  "client_id": "<your_client_id>",
  "client_secret": "<your_client_secret>",
  "username": "test@example.com",
  "password": "password",
  "scope": "*"
}

## 🧾 Swagger Docs
http://127.0.0.1:8000/api/documentation
