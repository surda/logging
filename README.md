# Logging
-----
[![Licence](https://img.shields.io/packagist/l/surda/logging.svg?style=flat-square)](https://packagist.org/packages/surda/logging)
[![Latest stable](https://img.shields.io/packagist/v/surda/logging.svg?style=flat-square)](https://packagist.org/packages/surda/logging)
[![PHPStan](https://img.shields.io/badge/PHPStan-enabled-brightgreen.svg?style=flat)](https://github.com/phpstan/phpstan)

## Installation

The recommended way to is via Composer:

```
composer require surda/logging
```

## Guzzle Logger

```php
$stack = \GuzzleHttp\HandlerStack::create();
$stack->push(
    \GuzzleHttp\Middleware::log(
        new \Surda\Logging\TracyGuzzleLogger(),
        new \GuzzleHttp\MessageFormatter('{request} - {response}')
    )
);

$client = new \GuzzleHttp\Client([
    'handler' => $stack,
    ...
]);
```
