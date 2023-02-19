<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel 8 with fortify and sail
### How to 
* composer create-project laravel/laravel:^8.0 example-app
* cp .env.example .env
* php artisan sail:install
* 0,3,5,7
* code . (cambiar version de sail en el docker-compose.yml)
* ./vendor/bin/sail up
* ./vendor/bin/sail php artisan key:generate
* composer require laravel/fortify
```
------- Files created by fortify ----------
app/Actions/Fortify/CreateNewUser.php
app/Actions/Fortify/PasswordValidationRules.php
app/Actions/Fortify/ResetUserPassword.php
app/Actions/Fortify/UpdateUserPassword.php
app/Actions/Fortify/UpdateUserProfileInformation.php
app/fortify.php
app/Providers/FortifyServiceProvider.php
-------------------------------------------
```
* php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"
* ./vendor/bin/sail php artisan migrate

```
https://youtu.be/yULq_veWR04
https://youtu.be/_CpPRvZ_vlI
To do:
https://laravel.com/docs/8.x/fortify#password-confirmation
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
