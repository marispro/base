<?php

namespace MarisPro\Base\Providers;

use Illuminate\Support\ServiceProvider;
use MarisPro\Base\Commands\MigrateAuto;

class BaseServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MigrateAuto::class
            ]);
        }

        $this->loadRoutesFrom(__DIR__ . '/../routes.php');

        $this->loadViewsFrom(__DIR__ . '/../../views', 'laravel-livewire-forms');
    }

    public function register()
    {

    }
}
