# A simple package to add a Whatsapp widget to any laravel app

[![Latest Version on Packagist](https://img.shields.io/packagist/v/deadangroup/laravel-whatsapp-widget.svg?style=flat-square)](https://packagist.org/packages/deadangroup/laravel-whatsapp-widget)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/deadangroup/laravel-whatsapp-widget/run-tests?label=tests)](https://github.com/deadangroup/laravel-whatsapp-widget/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/deadangroup/laravel-whatsapp-widget/Check%20&%20fix%20styling?label=code%20style)](https://github.com/deadangroup/laravel-whatsapp-widget/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/deadangroup/laravel-whatsapp-widget.svg?style=flat-square)](https://packagist.org/packages/deadangroup/laravel-whatsapp-widget)

A simple package to add a Whatsapp widget to any laravel app

## Installation

You can install the package via composer:

```bash
composer require deadangroup/laravel-whatsapp-widget
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="DGL\LaravelWhatsappWidget\ModuleServiceProvider" --tag="laravel-whatsapp-widget-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage
Include the view on a blade view:

```php
@include('laravel-whatsapp-widget::widget')
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [James Ngugi](https://github.com/ngugijames)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
