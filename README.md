<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## How To Install JobFinder App

JobFinder helps you discover the right career path by connecting you with top employers and tailored opportunities that match your skills and goals. Whether you’re starting fresh or advancing your career, we make the job search faster, easier, and more rewarding.

1. Clone the repository
   ```
      git clone https://github.com/Cybeles-Eos/jobfinder.git
   ```
2. Install backend dependencies
   ```
      composer install
   ```
3. Install frontend dependencies (if applicable)
   ```
      npm install
   ```
4. Copy environment file
   ```
      cp .env.example .env
   ```
5. Generate application key
   ```
      php artisan key:generate
   ```
6. Set up your database in .env, then run migrations
   ```
      php artisan migrate --seed
   ```   
7. Build frontend assets
   ```
      npm run dev
   ```   
8. Serve the application
   ```
      php artisan serve
   ```   
Visit [127.0.0.1](http://127.0.0.1:8000) port.
