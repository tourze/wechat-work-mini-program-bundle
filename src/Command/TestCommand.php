<?php

namespace WechatWorkMiniProgramBundle\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * 测试命令
 */
#[AsCommand(name: 'wechat-work:test', description: '测试命令')]
class TestCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('测试命令执行成功');
        return Command::SUCCESS;
    }
} 