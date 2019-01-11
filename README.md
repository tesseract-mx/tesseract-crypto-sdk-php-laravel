# Tesseract Crypto SDK PHP Laravel

Package for laravel with support of Tesseract Crypto SDK PHP.

[![Build Status](https://travis-ci.org/00F100/array_dot.svg?branch=master)](https://travis-ci.org/00F100/array_dot) [![codecov](https://codecov.io/gh/00F100/array_dot/branch/master/graph/badge.svg)](https://codecov.io/gh/00F100/array_dot) [![Total Downloads](https://poser.pugx.org/00F100/array_dot/downloads)](https://packagist.org/packages/00F100/array_dot)

## How to install

Composer:

```sh
$ composer require tesseract/crypto-sdk-laravel
```

or add in composer.json

```json
    {
        "require": {
            "tesseract/crypto-sdk-laravel": "*"
        }
    }
```

If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php

```
    
    Tesseract\Illuminate\Support\ServiceProvider::class,

```
If you want use the facade, add this your facades in config/app.php

```php

    'CryptoSDK' => Tesseract\Illuminate\Support\Facade::class,

```

Copy the package config to your local config with the publish command:

```

    php artisan vendor:publish --provider="Tesseract\Illuminate\Support\ServiceProvider"

```

## How to use

```php
<?php
    
    
```