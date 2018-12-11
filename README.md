<p align="center"><a href="https://symfony.com" target="_blank">
    <img src="https://symfony.com/logos/symfony_black_02.svg">
</a></p>

Symfony 4 starter kit
=====================

I created a starter kit for Symfony 4 to show how to use [WebpackEncore][1], [User manager][2], [User Auth][3], [User security][4]
and so on (such as Fixtures (Faker), GuardAuthenticator, Security:checker, RememberIn, Translations, Commands ...),
following the recommended best practices.
User auth is based on Symfony form login authentication.

Requirements
------------

  * Php ^7.2.*   http://php.net/manual/fr/install.php;
  * Composer    https://getcomposer.org/download/;
  
Installation
------------

1 . Clone the current repository.

2 . Edit file .env with credential of database.


3 .a. Execute commands below into your working folder to install the project :

```bash
$ composer install
$ composer update
$ composer update
$ bin/console doctrine:schema:update 
$ bin/console fos:user:create --super-admin
$ bin/console server:run
```

Personal routes
-----
- `{SERVER_HOST}/`
- `{SERVER_HOST}/login`
- `{SERVER_HOST}/logout`
- `{SERVER_HOST}/register`


Screenshot
-----
.......Coming soon



11/12/2018 iannacone.alessandro@gmail.com
