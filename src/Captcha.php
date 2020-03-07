<?php

declare(strict_types=1);

/**
 * @link     https://www.qing7260.cn
 * @author   qing7260
 * @contact  qing7260@outlook.com
 */

namespace Qing7777\Captcha;

use Hyperf\Contract\ConfigInterface;
use Psr\Container\ContainerInterface;

/**
 * @link     https://www.qing7260.cn
 * @author   qing7260
 * @contact  qing7260@outlook.com
 */

class Captcha
{
    public function __invoke(ContainerInterface $container)
    {
        $config = $container->get(ConfigInterface::class);

        return make(CaptchaBuilder::class);
    }
}