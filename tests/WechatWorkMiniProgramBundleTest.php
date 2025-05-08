<?php

namespace WechatWorkMiniProgramBundle\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use WechatWorkMiniProgramBundle\WechatWorkMiniProgramBundle;

/**
 * WechatWorkMiniProgramBundle 单元测试
 */
class WechatWorkMiniProgramBundleTest extends TestCase
{
    /**
     * 测试 Bundle 实例化
     */
    public function testBundleInstance(): void
    {
        $bundle = new WechatWorkMiniProgramBundle();

        // 验证 Bundle 实例类型
        $this->assertInstanceOf(Bundle::class, $bundle);
        $this->assertInstanceOf(WechatWorkMiniProgramBundle::class, $bundle);
    }
}
