<?php

namespace WechatWorkMiniProgramBundle\Tests\Command;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Tester\CommandTester;
use WechatWorkMiniProgramBundle\Command\TestCommand;

/**
 * TestCommand 单元测试
 */
class TestCommandTest extends TestCase
{
    private CommandTester $commandTester;

    protected function setUp(): void
    {
        $command = new TestCommand();

        $application = new Application();
        $application->add($command);

        $this->commandTester = new CommandTester($command);
    }

    /**
     * 测试命令执行
     */
    public function testExecute(): void
    {
        // 执行命令
        $statusCode = $this->commandTester->execute([]);

        // 检查返回状态码
        $this->assertEquals(Command::SUCCESS, $statusCode);

        // 检查输出内容
        $output = $this->commandTester->getDisplay();
        $this->assertStringContainsString('测试命令执行成功', $output);
    }
}
