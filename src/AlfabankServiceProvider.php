<?php

namespace Davidnadejdin\LaravelAlfabank;

use Davidnadejdin\AlfabankClient\Client;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class AlfabankServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/alfabank.php',
            'alfabank'
        );

        App::bind('laravelalphabank', static function () {
            return new Client(Config::get('alfabank'));
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/alfabank.php' => config_path('alfabank.php'),
        ], 'config');
    }
}
