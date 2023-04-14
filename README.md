[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)

# Vehicle Price Calculator App

## Description

This is an application that will allow a buyer to calculate the total price of a vehicle at a car auction, with their fees respectively.

This app was built in: [Laravel](https://github.com/laravel/laravel) framework

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### \* Requirements

What things you need to install the software and how to install them.

- [PHP](https://www.php.net/downloads) >= 8.1
- [Composer](https://getcomposer.org/download/) >= 2.5.5

### Important

- Make sure to have "curl", "fileinfo", "mbstring", "openssl" and "pdo_mysql" PHP extensions installed or had removed the " ; " from the beginning of these extensions in php.ini file located where you installed your PHP. Without this, the laravel installation with composer will fail.

## Setup

#### Clone this project in SSH or method of preference.

```bash
# For example, with the Terminal in a directory of preference:

$ git clone git@github.com:jacksonr20/bid-calculation-test.git

$ cd bid-calculation-test/

$ composer require

$ cp .env.example .env # Set the same MySQL variables as your system.

#If it is not automatically generated
$ php artisan key:generate
```

## Running the app: Local environment

```bash
# development
$ php artisan serve
```

## How it works

- You must have installed Postman, ThunderClient or related program to make the HTTP Requests respectively.

- To make a request select the _POST_ method, then, put the same URL that appears once you run the server with: `$ php artisan serve`. And in the _routes/api.php_ of the project, you will notice that the url path to request is the `'/calculate-vehicle-price'`. It normally look like this:

- `http://127.0.0.1:8000/api/calculate-vehicle-price` if you did not changed the default PORT in the environment variables of the .env.

- Now, in Postman or related go to _Body_ and select `'raw'` or `'form-data'`. Here you should enter the required information of the test:
- 1. There is a field to enter the vehicle base price (a number)
- 2. There is a field to specify the vehicle type (Common or Luxury)

## Test

```bash
# unit tests
$ php artisan test

# feature test
$ php artisan test --calculateVehicleTotalPriceTest=Feature --stop-on-failure
```

## Support

- Author - [Jackson Rodriguez](https://github.com/jacksonr20)
- Gmail - [jackson.rodriguezf@gmail.com](mailto:jackson.rodriguezf@gmail.com)

## License

Vehicle Price Calculator App is [MIT licensed](https://opensource.org/license/mit/).
