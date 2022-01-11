<?php

namespace A3324438aaa\Captcha\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \a3324438aaa\Captcha\Captcha
 */
class Captcha extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'captcha';
    }
}
