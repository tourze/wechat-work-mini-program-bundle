# WeChat Work Mini Program Bundle

[English](README.md) | [中文](README.zh-CN.md)

[![Latest Version](https://img.shields.io/packagist/v/tourze/wechat-work-mini-program-bundle.svg?style=flat-square)](https://packagist.org/packages/tourze/wechat-work-mini-program-bundle)
[![PHP Version Require](https://img.shields.io/packagist/php-v/tourze/wechat-work-mini-program-bundle.svg?style=flat-square)](https://packagist.org/packages/tourze/wechat-work-mini-program-bundle)
[![License](https://img.shields.io/packagist/l/tourze/wechat-work-mini-program-bundle.svg?style=flat-square)](https://packagist.org/packages/tourze/wechat-work-mini-program-bundle)
[![Total Downloads](https://img.shields.io/packagist/dt/tourze/wechat-work-mini-program-bundle.svg?style=flat-square)](https://packagist.org/packages/tourze/wechat-work-mini-program-bundle)
[![Code Coverage](https://img.shields.io/codecov/c/github/tourze/wechat-work-mini-program-bundle.svg?style=flat-square)](https://codecov.io/gh/tourze/wechat-work-mini-program-bundle)

A Symfony Bundle for WeChat Work Mini Program integration. This bundle provides tools and event system for managing WeChat Work Mini Program authentication and user interactions.

## Requirements

- PHP 8.1 or higher
- Symfony 7.3 or higher

## Installation

```bash
composer require tourze/wechat-work-mini-program-bundle
```

## Quick Start

### 1. Register Bundle

Add the bundle to `config/bundles.php`:

```php
return [
    // ...
    WechatWorkMiniProgramBundle\WechatWorkMiniProgramBundle::class => ['all' => true],
];
```

### 2. Basic Usage

```php
<?php

use WechatWorkMiniProgramBundle\Event\CodeToSessionEvent;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

// Dispatch code to session event
$event = new CodeToSessionEvent();
$dispatcher->dispatch($event);
```

## Features

- **Code2Session Integration**: Handle WeChat Work Mini Program authentication flow
- **Event System**: Built-in event dispatcher for handling authentication events
- **Console Commands**: Testing and debugging commands
- **Symfony Integration**: Seamless integration with Symfony applications
- **PHP 8.1+ Support**: Modern PHP features and strict typing
- **Test Coverage**: Comprehensive test suite with PHPUnit

## API Reference

### Events

#### CodeToSessionEvent

```php
use WechatWorkMiniProgramBundle\Event\CodeToSessionEvent;

// Basic event for handling WeChat Work Mini Program authentication
$event = new CodeToSessionEvent();
```

*Note: This event class is currently minimal and may be extended in future versions with methods for handling authentication parameters and response data.*

### Commands

#### Test Command

```bash
php bin/console wechat-work:test
```

This command is used for testing the bundle functionality and verifying proper installation.

## Development

### Running Tests

```bash
# Run all tests
./vendor/bin/phpunit packages/wechat-work-mini-program-bundle/tests

# Run with coverage
./vendor/bin/phpunit packages/wechat-work-mini-program-bundle/tests --coverage-text
```

### Code Quality

```bash
# PHPStan analysis
php -d memory_limit=2G ./vendor/bin/phpstan analyse packages/wechat-work-mini-program-bundle
```

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

## References

- [WeChat Work Mini Program Documentation](https://developer.work.weixin.qq.com/document/path/92423)
- [Symfony Bundle Best Practices](https://symfony.com/doc/current/bundles/best_practices.html)
