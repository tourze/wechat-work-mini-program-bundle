<?php

declare(strict_types=1);

namespace WechatWorkMiniProgramBundle\Tests\Command;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\RunTestsInSeparateProcesses;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Tester\CommandTester;
use Tourze\PHPUnitSymfonyKernelTest\AbstractCommandTestCase;
use WechatWorkMiniProgramBundle\Command\TestCommand;

/**
 * TestCommand 单元测试
 *
 * @internal
 */
#[CoversClass(TestCommand::class)]
#[RunTestsInSeparateProcesses]
final class TestCommandTest extends AbstractCommandTestCase
{
    protected function onSetUp(): void
    {
        // Command测试不需要特殊设置
    }

    protected function getCommandTester(): CommandTester
    {
        $command = self::getService(TestCommand::class);

        return new CommandTester($command);
    }

    /**
     * 测试命令执行
     */
    public function testExecute(): void
    {
        $commandTester = $this->getCommandTester();

        // 执行命令
        $statusCode = $commandTester->execute([]);

        // 检查返回状态码
        $this->assertEquals(Command::SUCCESS, $statusCode);

        // 检查输出内容
        $output = $commandTester->getDisplay();
        $this->assertStringContainsString('测试命令执行成功', $output);
    }
}
