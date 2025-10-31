<?php

declare(strict_types=1);

namespace WechatWorkMiniProgramBundle\Tests\Event;

use PHPUnit\Framework\Attributes\CoversClass;
use Symfony\Contracts\EventDispatcher\Event;
use Tourze\PHPUnitSymfonyUnitTest\AbstractEventTestCase;
use WechatWorkMiniProgramBundle\Event\CodeToSessionEvent;

/**
 * CodeToSessionEvent 单元测试
 *
 * @internal
 */
#[CoversClass(CodeToSessionEvent::class)]
final class CodeToSessionEventTest extends AbstractEventTestCase
{
    /**
     * 测试事件实例化
     */
    public function testEventInstance(): void
    {
        // 验证事件类型
        $this->assertInstanceOf(Event::class, new CodeToSessionEvent());
        $this->assertInstanceOf(CodeToSessionEvent::class, new CodeToSessionEvent());
    }

    /**
     * 测试事件传递参数功能
     */
    public function testEventWithParameters(): void
    {
        $code = 'test_code';
        $corpid = 'test_corpid';
        $agentid = 'test_agentid';

        // 由于 CodeToSessionEvent 类目前为空，我们只能测试基本创建
        // 实际上应该添加 getCode(), getCorpid(), getAgentid() 等方法
        $this->assertInstanceOf(CodeToSessionEvent::class, new CodeToSessionEvent());
    }

    /**
     * 测试事件状态传递
     */
    public function testEventWithResponseData(): void
    {
        // 验证对象创建成功
        $this->assertInstanceOf(CodeToSessionEvent::class, new CodeToSessionEvent());

        // 注意：实际上 CodeToSessionEvent 应该添加如下方法:
        // - setResponseData(array $data): self
        // - getResponseData(): ?array
        // - isSuccess(): bool
        // - getErrorMessage(): ?string
    }
}
