<?php

declare(strict_types=1);

namespace WechatWorkMiniProgramBundle\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\Attribute\Autoconfigure;

/**
 * 测试命令
 */
#[AsCommand(name: self::NAME, description: '测试命令')]
#[Autoconfigure(public: true)]
class TestCommand extends Command
{
    public const NAME = 'wechat-work:test';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('测试命令执行成功');

        return Command::SUCCESS;
    }
}
