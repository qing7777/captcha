<?php

use Hyperf\Utils\ApplicationContext;
use Qing7777\Captcha\CaptchaInterface;

if (!function_exists('captcha')) {

    /**
     * @param string $config
     * @param bool $api
     * @return mixed
     */
    function captcha($config = 'default', $api = false)
    {
        $CaptchaBuilder = ApplicationContext::getContainer()->get(CaptchaInterface::class);

        if (ob_get_contents()) {
            ob_clean();
        }

        return $CaptchaBuilder->create($config, $api);
    }
}


if (!function_exists('captcha_src')) {
    /**
     * @param string $config
     * @return string
     */
    function captcha_src($config = 'default')
    {
        $CaptchaBuilder = ApplicationContext::getContainer()->get(CaptchaInterface::class);

        return $CaptchaBuilder->src($config);
    }
}

if (!function_exists('captcha_img')) {

    /**
     * @param string $config
     * @return mixed
     */
    function captcha_img($config = 'default')
    {
        $CaptchaBuilder = ApplicationContext::getContainer()->get(CaptchaInterface::class);

        return $CaptchaBuilder->img($config);
    }
}

if (!function_exists('captcha_check')) {
    /**
     * @param $value
     * @return bool
     */
    function captcha_check($value)
    {
        $CaptchaBuilder = ApplicationContext::getContainer()->get(CaptchaInterface::class);

        return $CaptchaBuilder->check($value);
    }
}

if (!function_exists('captcha_api_check')) {
    /**
     * @param $value
     * @param $key
     * @return bool
     */
    function captcha_api_check($value, $key)
    {
        $CaptchaBuilder = ApplicationContext::getContainer()->get(CaptchaInterface::class);

        return $CaptchaBuilder->check_api($value, $key);
    }
}
