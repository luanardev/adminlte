# Laravel AdminLTE


This package provides an easy way to quickly set up [AdminLTE v3](https://adminlte.io/themes/v3/) with [Laravel](https://laravel.com/) (8 or higher). It has no requirements and dependencies besides **Laravel**, so you can start building your admin panel immediately. The package provides a [blade template](https://laravel.com/docs/8.x/blade) that you can extend and advanced menu configuration possibilities. Also, and optionally, the package includes a set of **AdminLTE** styled authentication views that you can use in replacement of the ones that are provided by the [laravel/ui](https://github.com/laravel/ui) authentication scaffolding.


## Documentation

All documentation is available on the [Wiki Pages](https://github.com/jeroennoten/Laravel-AdminLTE/wiki), we encourage you to read it. If you are new start with the [Installation Guide](https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Installation). To update the package consult the [Updating Guide](https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Updating).


## Requirements

The current package requirements are:

- Laravel >= 8.x
- PHP >= 7.2

## Installation


Run a command,

`composer require luanardev/adminlte`

## Usage

Run command,

To generate both Auth and Theme assets,

`php artisan adminlte:install`

To install just Auth scaffold,

`php artisan adminlte:install --auth`

To install just Theme assets,

`php artisan adminlte:install --theme`

And then run,

`npm install admin-lte --save`

Then run,

`npm install && npm run dev`

Or for production,

`npm install && npm run prod`
