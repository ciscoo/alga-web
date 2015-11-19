# Alga-Web
The web application component for the [alga-app](https://github.com/kellyrose0902/alga-app).

Part of an ongoing [UW-Parkside Software Engineering I](http://green.uwp.edu/departments/computer.science/courses/csci475.cfm) project.

## Production Prerequisites

This app uses the [Lumen](http://lumen.laravel.com/) framework and the following system requirements must be satisfied:

* PHP >= 5.5.9
* OpenSSL PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension

In addition to the requirements above, you will also need to have [Composer](https://getcomposer.org/) installed on your local system and production system.

The installation precedures below are for **development** purposes only.

## Installation - Linux
The following will get you up and running any Debian based linux. If you do not want to alter your system, then see the Vagrant installation section.

### Install PHP
Use the latest available version of PHP as a matter of principle.
```
sudo add-apt-repository ppa:ondrej/php5-5.6
sudo apt-get update
sudo apt-get install php5-cli
```
Note we are installing `php-cli` and **not** `php5`, we do not need Apache. As of PHP 5.4.0, the CLI SAPI provides a built-in web server that is suitable for devlopement purposes.

### Install Composer

```
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
```

### Build
We're now ready to start developing.

```
git clone https://github.com/ciscoo/alga-web.git
cd alga-web
composer install
php artisan serve
```

Open your browser to `http://localhost:8888`
