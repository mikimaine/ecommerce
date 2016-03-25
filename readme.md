## INNOVATE Ecommerce Framework, Currently 0.0.1



### Introduction

INNOVATE Ecommerce provides you with an E-commerce framework on top of laravel framework.

The package follows the FIG standards PSR-1, PSR-2, and PSR-4 to ensure a high level of interoperability between shared PHP code. At the moment the package is not unit tested, but is planned to be covered later down the road.

### Requirements
---------------------

- You must have at list PHP 5.6 installed on your machine
- And also For now you have to install both git and composer on your system
  You will find [Composer here](https://getcomposer.org) and
                [Git here](https://git-scm.com/)  then follow the instructions there to install on your specific machine


### Quick Installation
------------------------

Begin by cloning the Framework to ur directory. Go to your server public directory and enter this commands

```
git clone https://github.com/mikimaine/ecommerce.git
```
Once the framework get cloned to your desktop, simply run composer install from the project root directory

```
composer install
```
This will install all the required packages to your system including Laravel

After that rename example.env to .env and fill your database credentials.

Then use this commands to install the database tables and there seed data

#### Generate Application key
```php
php innovate key:generate
```

#### Migration
```php
 php innovate migrate
```

#### Seed the database
```php
 php innovate db:seed
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
