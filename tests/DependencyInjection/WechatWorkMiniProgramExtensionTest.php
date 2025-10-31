<?php

declare(strict_types=1);

namespace WechatWorkMiniProgramBundle\Tests\DependencyInjection;

use PHPUnit\Framework\Attributes\CoversClass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Tourze\PHPUnitSymfonyUnitTest\AbstractDependencyInjectionExtensionTestCase;
use WechatWorkMiniProgramBundle\DependencyInjection\WechatWorkMiniProgramExtension;

/**
 * WechatWorkMiniProgramExtension 单元测试
 *
 * @internal
 */
#[CoversClass(WechatWorkMiniProgramExtension::class)]
final class WechatWorkMiniProgramExtensionTest extends AbstractDependencyInjectionExtensionTestCase
{
    /**
     * 测试空配置情况
     */
    public function testLoadWithEmptyConfigs(): void
    {
        $container = new ContainerBuilder();

        // 设置所需的参数
        $container->setParameter('kernel.bundles', []);
        $container->setParameter('kernel.environment', 'test');

        // 确保使用空配置时不会抛出异常
        (new WechatWorkMiniProgramExtension())->load([], $container);

        // 验证容器仍然有效
        $this->assertInstanceOf(ContainerBuilder::class, $container);
    }
}
