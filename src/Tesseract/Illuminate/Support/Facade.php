<?php namespace Tesseract\Illuminate\Support;

use Tesseract\Crypto\SDK\CryptoSDK;

/**
 * Class Facade
 * @package Tesseract\Illuminate\Support
 */
class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return CryptoSDK::class;
    }
}
