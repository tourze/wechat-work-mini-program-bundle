<?php

namespace WechatWorkMiniProgramBundle\Tests\DependencyInjection;

use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use WechatWorkMiniProgramBundle\DependencyInjection\WechatWorkMiniProgramExtension;

/**
 * WechatWorkMiniProgramExtension 单元测试
 */
class WechatWorkMiniProgramExtensionTest extends TestCase
{
    /**
     * 测试加载服务配置
     */
    public function testLoad(): void
    {
        $extension = new WechatWorkMiniProgramExtension();
        $container = new ContainerBuilder();

        // 设置所需的参数
        $container->setParameter('kernel.bundles', []);

        // 确保 load 方法不会抛出异常
        $extension->load([], $container);

        // 验证服务配置已加载
        $this->assertTrue($container->has('WechatWorkMiniProgramBundle\Command\TestCommand'));
    }

    /**
     * 测试空配置情况
     */
    public function testLoadWithEmptyConfigs(): void
    {
        $extension = new WechatWorkMiniProgramExtension();
        $container = new ContainerBuilder();

        // 设置所需的参数
        $container->setParameter('kernel.bundles', []);

        // 确保使用空配置时不会抛出异常
        $extension->load([], $container);

        // 验证容器仍然有效
        $this->assertInstanceOf(ContainerBuilder::class, $container);
    }
}
