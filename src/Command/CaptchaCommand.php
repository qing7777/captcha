<?php

declare(strict_types=1);

/**
 * @link     https://www.qing7260.cn
 * @author   qing7260
 * @contact  qing7260@outlook.com
 */

namespace Qing7777\Captcha\Command;

use Hyperf\Command\Annotation\Command;
use Hyperf\Command\Command as HyperfCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

/**
 * @Command
 */
class CaptchaCommand extends HyperfCommand
{
    /**
     * 执行的命令行
     *
     * @var string
     */
    protected $name = 'captcha:publish';

    public function handle()
    {
        // 从 $input 获取 config 参数
        $argument = $this->input->getOption('config');
        if ($argument) {
            $this->copySource(__DIR__ . '/../../publish/captcha.php', BASE_PATH . '/config/autoload/captcha.php');
            $this->line('The captcha configuration file has been generated', 'info');
        }
    }

    protected function getOptions()
    {
        return [
            ['config', NULL, InputOption::VALUE_NONE, 'Publish the configuration for captcha']
        ];
    }

    /**
     * 复制文件到指定的目录中
     * @param $copySource
     * @param $toSource
     */
    protected function copySource($copySource, $toSource)
    {
        copy($copySource, $toSource);
    }
}