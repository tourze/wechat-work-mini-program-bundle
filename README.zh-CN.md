# 企业微信小程序 Bundle

一个用于企业微信小程序的 Symfony Bundle。

## 安装

```bash
composer require tourze/wechat-work-mini-program-bundle
```

## 使用

### 注册 Bundle

在 `config/bundles.php` 中添加：

```php
return [
    // ...
    WechatWorkMiniProgramBundle\WechatWorkMiniProgramBundle::class => ['all' => true],
];
```

## 功能

### Code2Session

用于使用临时登录凭证 code 获取用户信息。

相关事件类: `WechatWorkMiniProgramBundle\Event\CodeToSessionEvent`

## 单元测试

运行单元测试：

```bash
./vendor/bin/phpunit packages/wechat-work-mini-program-bundle/tests
```

## 待完善

1. 完善 `CodeToSessionEvent` 类，建议添加以下方法：
   - 构造函数参数: `__construct(string $code, string $corpid, string $agentid)`
   - `getCode()`: 获取临时登录凭证
   - `getCorpid()`: 获取企业ID
   - `getAgentid()`: 获取应用ID
   - `setResponseData(array $data)`: 设置响应数据
   - `getResponseData()`: 获取响应数据
   - `isSuccess()`: 判断请求是否成功
   - `getErrorMessage()`: 获取错误信息

## 使用方法

待补充

## 配置

待补充

## 示例

待补充

## 参考文档

- [示例链接](https://example.com)
