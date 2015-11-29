# Alga-Web
The web application component for the [alga-app](https://github.com/kellyrose0902/alga-app).

Part of an ongoing [UW-Parkside Software Engineering I](http://green.uwp.edu/departments/computer.science/courses/csci475.cfm) project.

## Production Prerequisites

This app uses the [Laravel](http://laravel.com/) framework and the following system requirements must be satisfied:

* PHP >= 5.5.9
* OpenSSL PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension

In addition to the requirements above, you will also need to have [Composer](https://getcomposer.org/) installed on your local system and production system.

The installation procedures below are for **development** purposes only.

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

### Install Node.js

Using `n` as our node version management:

```
curl -L http://git.io/n-install | bash
```

Now simply run:

```
n latest
```

The latest version of Node.js will be installed. It's that simple.

### Install Gulp
After installing Node.js, install Gulp.js:

```
npm install --global gulp
```

### Build
We're now ready to start developing. Assuming you have `git` already installed on your system (you should):

```
git clone https://github.com/ciscoo/alga-web.git
cd alga-web
composer install
npm install
```

Now we're going to need to set up the `.env` configuration file. An example of one is included by default. Either make a copy or rename it to `.env` and set the fields accordingly,
mainly the databases fields. You'll need to generate `APP_KEY` with the following:

```
php artisan key:generate
```

Finally, run the application:

```
php artisan serve
```

Open your browser to `http://localhost:8888`

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

Documentation for how this app is set up will be added later.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)