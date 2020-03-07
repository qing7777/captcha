<?php

declare(strict_types=1);

/**
 * @link     https://www.qing7260.cn
 * @author   qing7260
 * @contact  qing7260@outlook.com
 */

namespace Qing7777\Captcha;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                CaptchaInterface::class => Captcha::class,
            ],
            'scan' => [
                'paths' => [
                    __DIR__,
                ],
            ],
            'publish' => [
                [
                    'id' => 'captcha',
                    'description' => 'captcha',
                    'source' => __DIR__ . '/../publish/captcha.php',
                    'destination' => BASE_PATH . '/config/autoload/captcha.php',
                ],
            ],
        ];
    }
}
