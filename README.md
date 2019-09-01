<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg">
<img src="https://www.highcharts.com/joomla/media/templates/highsoft_2015/images/logo.svg">
<img src="https://vuejs.org/images/logo.png" height="90"></p>

## About Laravel-Highcharts

This a simple implementation of Laravel Framework with Highchart Charting Library by using Vue.JS as Front End Framework.

### Features
- SOLID Coding best practices followed
- Highchart's Line Chart used
- Sample data is getting seed from CSV directly


## Technology stack
- Laravel : 5.8
- Vue.js as Front End
- Highchart as charting library
- flynsarmy/csv-seeder: ^1.0

## Installation
####clone
- git clone https://github.com/nteej/laravel-highchart.git
####dependency injection
- composer install
####Setup
- setup .env file DB configs according to environment
- php artisan migrate --seed
- php artisan  key:generate
####Launch
- php artisan serve

##Route List

- home
- login
- logout
- register

## References
CSV Import
composer package flynsarmy/csv-seeder

Repository Pattern 
https://www.larashout.com/how-to-use-repository-pattern-in-laravel


## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
