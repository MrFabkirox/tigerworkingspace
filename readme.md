
https://getcomposer.org/download/
https://laravel.com/docs/5.7/installation

    1  sudo apt-get update
    2  sudo apt-get upgrade
    3  php --version
    4  sudo apt install php7.2-cli
    5  php -m
    6  sudo apt install php-mbstring
    7  sudo apt install php-xml
    8  php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    9  php -r "if (hash_file('SHA384', 'composer-setup.php') === 
   10  '93b54496392c062774670ac18b134c3b3a95e5a5e5c8f1a9f115f203b75bf9a129d5daa8ba6a13e2cc8a1da0806388a8') 
   11  { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
   10  php composer-setup.php
   11  php -r "unlink('composer-setup.php');"
   12  composer global require laravel/installer
   13  php composer.phar global require laravel/installer
   14  sudo apt install composer
   15  composer global require laravel/installer
   16  php -v
   17  sudo apt-get install php7.2-zip
   18  composer global require laravel/installer
   20  composer create-project --prefer-dist laravel/laravel tigerworkingspace
   22  cd tigerworkingspace
   23  php artisan serve

 http://localhost:8000/

php artisan --version
Laravel Framework 5.7.12

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

