# Alga-Web
The web application component for the [alga-app](https://github.com/kellyrose0902/alga-app).

Part of an ongoing [UW-Parkside Software Engineering I](http://green.uwp.edu/departments/computer.science/courses/csci475.cfm) project.

## Prerequisites

This app uses the [Lumen](http://lumen.laravel.com/) framework and the following system requirements must be satisfied:

* PHP >= 5.5.9
* OpenSSL PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension

In addition to the requirements above, you will also need to have [Composer](https://getcomposer.org/) installed on your local system and production system.

## Installation

Lumen supports [Vagrant](https://www.vagrantup.com/) and has an official pre-packaged box called [Homestead](http://laravel.com/docs/5.1/homestead).
Following the link for more information. The following will get you up and running any Debian based linux flavor.

1. $ git clone https://github.com/ciscoo/alga-web.git
2. $ composer install
3. $ php -S localhost:8888 -t ./public
