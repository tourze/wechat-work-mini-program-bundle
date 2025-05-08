<?php

namespace WechatWorkMiniProgramBundle\Tests\Integration;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\HttpKernel\KernelInterface;
use WechatWorkMiniProgramBundle\WechatWorkMiniProgramBundle;

/**
 * Bundle 集成测试
 */
class BundleIntegrationTest extends KernelTestCase
{
    protected static function getKernelClass(): string
    {
        return IntegrationTestKernel::class;
    }

    /**
     * 测试 Bundle 在内核中正确注册
     */
    public function testBundleRegistration(): void
    {
        self::bootKernel();
        $kernel = self::$kernel;

        // 验证内核实例
        $this->assertInstanceOf(KernelInterface::class, $kernel);

        // 检查 Bundle 是否已注册
        $bundles = $kernel->getBundles();
        $wechatWorkBundleFound = false;

        foreach ($bundles as $bundle) {
            if ($bundle instanceof WechatWorkMiniProgramBundle) {
                $wechatWorkBundleFound = true;
                break;
            }
        }

        $this->assertTrue($wechatWorkBundleFound, 'WechatWorkMiniProgramBundle 未正确注册');
    }

    /**
     * 测试容器是否可用
     */
    public function testContainerAvailability(): void
    {
        self::bootKernel();
        $container = self::getContainer();

        // 验证容器实例
        $this->assertNotNull($container);
        $this->assertTrue($container->has('kernel'));
    }
}
