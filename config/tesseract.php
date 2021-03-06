<?php

return [

    'crypto' => [
        /*
        |--------------------------------------------------------------------------
        | Default Base URL
        |--------------------------------------------------------------------------
        |
        */
        'baseUrl' => env('TESSERACT_CRYPTO_API_BASE_URL', 'http://localhost'),

        /*
        |--------------------------------------------------------------------------
        | Default Access Key ID
        |--------------------------------------------------------------------------
        */
        'access_key_id' => env('TESSERACT_CRYPTO_API_ACCESS_KEY_ID', 'guest'),

        /*
        |--------------------------------------------------------------------------
        | Default Secret Access Key
        |--------------------------------------------------------------------------
        */
        'secret_access_key' => env('TESSERACT_CRYPTO_API_SECRET_ACCESS_KEY', 'guest'),

        /*
        |--------------------------------------------------------------------------
        | Default Timeout
        |--------------------------------------------------------------------------
        |
         */
        'timeout' => env('TESSERACT_CRYPTO_API_TIMEOUT', 5.000),

        /*
        |--------------------------------------------------------------------------
        | Default Debug
        |--------------------------------------------------------------------------
        |
         */
        'debug' => env('TESSERACT_CRYPTO_API_DEBUG', false),
    ]

];
