# Logger for laravel-workflow package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/soap/workflow-logger.svg?style=flat-square)](https://packagist.org/packages/soap/workflow-logger)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/soap/laravel-workflow-logger/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/soap/laravel-workflow-logger/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/soap/laravel-workflow-logger/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/soap/laravel-workflow-logger/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/soap/laravel-workflow-logger.svg?style=flat-square)](https://packagist.org/packages/soap/laravel-workflow-logger)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

I highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. My address is on 1/8 Watchara road, Tumbon Krabi Yai, Ampher Muang, Krabi 81000 Thailand.

## Installation

You can install the package via composer:

```bash
composer require soap/workflowlogger
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="workflowlogger-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="workflowlogger-config"
```

This is the contents of the published config file:

```php
return [

];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="workflowlogger-views"
```

## Usage


## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Prasit Gebsaap](https://github.com/soap)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
