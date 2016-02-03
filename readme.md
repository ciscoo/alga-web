# Alga-Web
The web application component for the [alga-app](https://github.com/kellyrose0902/alga-app).

Part of an ongoing [UW-Parkside Software Engineering I](http://green.uwp.edu/departments/computer.science/courses/csci475.cfm) project.

## Prerequisites

This app uses the [Laravel](http://laravel.com/) framework and the following system requirements must be satisfied:

* PHP >= 5.5.9
* OpenSSL PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension

In addition to the requirements above, you will also need to have [Composer](https://getcomposer.org/) installed on your local system and production system.

## Production Installation - Linux
The following will get you deployed on a Debian based Linux server. These instructions work best on a managed server rather a shared web host.

### Install Apache
Follow your distributions guide to install Apache.

### Install MySQL
Follow your distributions guide to install MySQL.

### Install PHP
Use the latest available version of PHP as a matter of principle.
```
$ sudo add-apt-repository ppa:ondrej/php
$ sudo apt-get update
$ sudo apt-get install php7.0
```

### Install Alga-Web
You will need `git`, `Node.js`, `Bower`, `Composer`, and `Gulp.js` installed on your system.

First retrieve the `master` branch of the project and place outside your web root:

```
$ cd /var/www
$ wget https://github.com/ciscoo/alga-web.git
```

Change directory into the folder and run the following commands that will install and compile the needed dependencies.

```
$ composer install
$ npm install
$ bower install
$ gulp
```

### Configuration
You will find a `.env.example` file, rename or make a copy to `.env`. Edit the environment variables accordingly, take note of the `DB_DATABASE`. You will need to make sure the `DB_DATABASE` matches the database name in your database.

Ensure `APP_ENV` is set to `production` and `APP_DEBUG` is set to `false`.

***Note***: If you do not configure the `MAIL_*`, Laravel will throw an exception if you try to use it's emailing features.

Generate the `APP_KEY` with the follow: `php artisan key:generate`.

### Fix Permissions
Laravel needs permission to be able to write to its storage folder:

 ```
$ sudo chown -R www-data: app/storage
$ sudo chmod -R 755 app/storage
```

### Document Root
Finally, set the document root for the domain or subdomain where the app is deployed:

```
DocumentRoot /var/www/project/public
<Directory /var/www/project/public>
```

## Development Installation - Linux
The following will get you up and running any Debian based linux. If you do not want to alter your system, then consider installing [Homestead](https://laravel.com/docs/5.2/homestead), Laravel's vagrant box.

### Install PHP
Use the latest available version of PHP as a matter of principle.
```
$ sudo add-apt-repository ppa:ondrej/php
$ sudo apt-get update
$ sudo apt-get install php7.0-cli
```
Note we are installing `php7.0-cli` and **not** `php7.0` as we do not need Apache. As of PHP 5.4.0, the CLI SAPI provides a built-in web server that is suitable for devlopement purposes.

### Install Composer

```
$ curl -sS https://getcomposer.org/installer | php
$ sudo mv composer.phar /usr/local/bin/composer
```

### Install Node.js

Using `n` as our node version management:

```
$ curl -L http://git.io/n-install | bash
```

Now simply run:

```
$ n latest
```

The latest version of Node.js will be installed. It's that simple.

### Install Gulp
After installing Node.js, install Gulp.js:

```
$ npm install --global gulp
```

### Build
We're now ready to start developing. Assuming you have `git` already installed on your system (you should):

```
$ git clone https://github.com/ciscoo/alga-web.git
$ cd alga-web
$ composer install
$ npm install
$ gulp
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

Open your browser to `http://localhost:8000`

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
