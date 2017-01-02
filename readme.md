[![StyleCI](https://styleci.io/repos/48767861/shield?branch=master)](https://styleci.io/repos/48767861) [![PPM Compatible](https://raw.githubusercontent.com/php-pm/ppm-badge/master/ppm-badge.png)](https://github.com/php-pm/php-pm)

## INNOVATE Ecommerce Framework, Currently 0.1.5



### Introduction

INNOVATE Ecommerce provides you with an E-commerce framework on top of laravel framework.

The package follows the FIG standards PSR-1, PSR-2, and PSR-4 to ensure a high level of interoperability between shared PHP code. At the moment the package is not unit tested, but is planned to be covered later down the road.

### Requirements
---------------------

- You must have at list PHP 5.6 installed on your machine
- And also For now you have to install both git and composer on your system
  You will find [Composer here](https://getcomposer.org) and
                [Git here](https://git-scm.com/)  then follow the instructions there to install on your specific machine
                
### Optional
-------------------------

- If you want a better page load and overall improvement in speed , the Framework comes with redis implementation out of the box.
  You can get Redis from [Redis Here] (http://redis.io/) follow instruction there.
  
  For windows users you also have Redis Desktop [redisdesktop here ] (http://redisdesktop.com/download)
  
  `Remember you first have to install Redis to work with redis desktop`
  
  Then you should set  CACHE_DRIVER on .env file to redis and 
  Fill this three with your redis info in .env file
  
      REDIS_HOST=127.0.0.1   <--- change it if you are not on localhost
      REDIS_PASSWORD=
      REDIS_PORT=6379


### Quick Installation
------------------------

Begin by creating a new project using the composer create commande

```
composer create-project mikimaine/ecommerce yourprojectname
```
This will install all the required packages to your system including Laravel

After that rename example.env to .env and fill your database credentials.

Then use this commands to install the database tables and there seed data

#### Generate Application key
```php
php artisan key:generate
```

#### Migration
```php
 php artisan migrate
```

#### Seed the database
```php
 php artisan db:seed
```

And that's it ! Start building awesome E-commerce applications for your business

Documentation
-------------

I will release a user friendly documentation and screen cast soon

### Issues

If you come across any issues please [report them here](https://github.com/mikimaine/ecommerce.git).

### Contributing

Thank you for considering contributing to the INNOVATE Ecommerce Framework project! Please feel free to make any pull requests, or e-mail me a feature request you would like to see in the future to Miki Maine at mikias.amdu@gmail.com.

### Security Vulnerabilities

If you discover a security vulnerability within this framework, please send an e-mail to Miki Maine at mikias.amdu@gmail.com, or create a pull request if possible. All security vulnerabilities will be promptly addressed. 

### License

The INNOVATE Ecommerce framework is open-sourced software licensed under the MIT license
