# 企业微信小程序 Bundle

[English](README.md) | [中文](README.zh-CN.md)

[![Latest Version](https://img.shields.io/packagist/v/tourze/wechat-work-mini-program-bundle.svg?style=flat-square)](https://packagist.org/packages/tourze/wechat-work-mini-program-bundle)
[![PHP Version Require](https://img.shields.io/packagist/php-v/tourze/wechat-work-mini-program-bundle.svg?style=flat-square)](https://packagist.org/packages/tourze/wechat-work-mini-program-bundle)
[![License](https://img.shields.io/packagist/l/tourze/wechat-work-mini-program-bundle.svg?style=flat-square)](https://packagist.org/packages/tourze/wechat-work-mini-program-bundle)
[![Total Downloads](https://img.shields.io/packagist/dt/tourze/wechat-work-mini-program-bundle.svg?style=flat-square)](https://packagist.org/packages/tourze/wechat-work-mini-program-bundle)
[![Code Coverage](https://img.shields.io/codecov/c/github/tourze/wechat-work-mini-program-bundle.svg?style=flat-square)](https://codecov.io/gh/tourze/wechat-work-mini-program-bundle)

一个用于企业微信小程序集成的 Symfony Bundle。该 Bundle 提供了管理企业微信小程序认证和用户交互的工具和事件系统。

## 系统要求

- PHP 8.1 或更高版本
- Symfony 7.3 或更高版本

## 安装

```bash
composer require tourze/wechat-work-mini-program-bundle
```

## 快速开始

### 1. 注册 Bundle

在 `config/bundles.php` 中添加：

```php
return [
    // ...
    WechatWorkMiniProgramBundle\WechatWorkMiniProgramBundle::class => ['all' => true],
];
```

### 2. 基本用法

```php
<?php

use WechatWorkMiniProgramBundle\Event\CodeToSessionEvent;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

// 调度 code to session 事件
$event = new CodeToSessionEvent();
$dispatcher->dispatch($event);
```

## 功能特性

- **Code2Session 集成**: 处理企业微信小程序认证流程
- **事件系统**: 内置事件调度器处理认证事件
- **控制台命令**: 测试和调试命令
- **Symfony 集成**: 与 Symfony 应用程序无缝集成
- **PHP 8.1+ 支持**: 现代 PHP 特性和严格类型
- **测试覆盖**: 使用 PHPUnit 的完整测试套件

## API 参考

### 事件

#### CodeToSessionEvent

```php
use WechatWorkMiniProgramBundle\Event\CodeToSessionEvent;

// 处理企业微信小程序认证的基本事件
$event = new CodeToSessionEvent();
```

*注意：此事件类目前功能较为简单，未来版本可能会扩展处理认证参数和响应数据的方法。*

### 命令

#### 测试命令

```bash
php bin/console wechat-work:test
```

此命令用于测试 Bundle 功能并验证是否正确安装。

## 开发

### 运行测试

```bash
# 运行所有测试
./vendor/bin/phpunit packages/wechat-work-mini-program-bundle/tests

# 带覆盖率运行
./vendor/bin/phpunit packages/wechat-work-mini-program-bundle/tests --coverage-text
```

### 代码质量

```bash
# PHPStan 分析
php -d memory_limit=2G ./vendor/bin/phpstan analyse packages/wechat-work-mini-program-bundle
```

## 贡献

欢迎贡献！请随时提交 Pull Request。

## 许可证

MIT 许可证。详情请参见 [License File](LICENSE)。

## 参考资料

- [企业微信小程序开发文档](https://developer.work.weixin.qq.com/document/path/92423)
- [Symfony Bundle 最佳实践](https://symfony.com/doc/current/bundles/best_practices.html)
