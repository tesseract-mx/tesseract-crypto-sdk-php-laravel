<?php namespace Tesseract\Illuminate\Support;

use Tesseract\Crypto\SDK\CryptoSDK;
use Tesseract\Crypto\SDK\Options\Config;
use Tesseract\Crypto\SDK\Options\HttpClientConfig;

/**
 * Class ServiceProvider
 * @package Tesseract\Illuminate\Support
 */
class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $configPath = __DIR__ . '/../../../../config/tesseract.php';
        $this->mergeConfigFrom($configPath, 'tesseract');

        $this->app->singleton(CryptoSDK::class, function (){

            $baseUrl = config(Config::BASE_URL);
            $accessKeyId = config(Config::ACCESS_KEY_ID);
            $secretAccessKey = config(Config::SECRET_ACCESS_KEY);
            $debug = config(Config::DEBUG);
            $timeout = config(Config::TIMEOUT);

            $config = new HttpClientConfig($baseUrl, $accessKeyId, $secretAccessKey, $debug, $timeout);

            return new CryptoSDK($config);
        });

    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $configPath = __DIR__ . '/../../../../config/tesseract.php';
        $this->publishes([$configPath => $this->getConfigPath()], 'config');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [CryptoSDK::class];
    }


    /**
     * Get the config path
     *
     * @return string
     */
    protected function getConfigPath()
    {
        return config_path('tesseract.php');
    }

    /**
     * Publish the config file
     *
     * @param  string $configPath
     */
    protected function publishConfig($configPath)
    {
        $this->publishes([$configPath => config_path('tesseract.php')], 'config');
    }

}
