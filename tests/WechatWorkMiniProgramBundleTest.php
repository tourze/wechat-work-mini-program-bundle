<?php

declare(strict_types=1);

namespace WechatWorkMiniProgramBundle\Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\RunTestsInSeparateProcesses;
use Tourze\PHPUnitSymfonyKernelTest\AbstractBundleTestCase;
use WechatWorkMiniProgramBundle\WechatWorkMiniProgramBundle;

/**
 * @internal
 */
#[CoversClass(WechatWorkMiniProgramBundle::class)]
#[RunTestsInSeparateProcesses]
final class WechatWorkMiniProgramBundleTest extends AbstractBundleTestCase
{
}
