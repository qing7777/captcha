<?php

declare(strict_types=1);

/**
 * @link     https://www.qing7260.cn
 * @author   qing7260
 * @contact  qing7260@outlook.com
 */

namespace Qing7777\Captcha;



interface CaptchaInterface
{

    /**
     * @param string $config
     * @param bool $api
     * @return mixed
     */
    public function create($config = 'default', $api = false);


    /**
     * @param string $config
     * @return mixed
     */
    public function src($config = null);


    /**
     * Generate captcha image html tag
     *
     * @param null $config
     * @param array $attrs HTML attributes supplied to the image tag where key is the attribute
     * and the value is the attribute value
     * @return string
     */
    public function img($config = null, $attrs = []);

    /**
     * Captcha check
     *
     * @param $value
     * @return bool
     */
    public function check($value);


    /**
     * Captcha check
     *
     * @param $value
     * @param $key
     * @return bool
     */
    public function check_api($value, $key);
}
