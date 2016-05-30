# A request logger for Laravel 5 and Lumen

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.

## Install

You can pull in the package via composer:

``` bash
$ composer require picklewagon/request-logger
```

Next up, the service provider must be registered:

```php
// Laravel5: config/app.php
'providers' => [
    ...
    Picklewagon\RequestLogger\LaravelServiceProvider::class,
];
```

or, if you are using Lumen:

```php
// Lumen: bootstrap/app.php
$app->register(Picklewagon\RequestLogger\LumenServiceProvider::class);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Security

If you discover any security related issues, please email josh@picklewagon.com instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
