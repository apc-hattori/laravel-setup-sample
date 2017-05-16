<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class LocalEnviromentServiceProvider extends ServiceProvider
{

    /**
     * List of Local Enviroment Providers
     * @var array
     */
    protected $localProviders = [
        \Barryvdh\Debugbar\ServiceProvider::class,
    ];

    /**
     * List of only Local Enviroment Facade Aliases
     * @var array
     */
    protected $facadeAliases = [
        'Debugbar' => \Barryvdh\Debugbar\Facade::class,
    ];

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->isLocal()) {
            $this->registerServiceProviders();
            $this->registerFacadeAliases();
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Loda local service providers
     */
    protected function registerServiceProviders()
    {
        foreach ($this->localProviders as $provider) {
            $this->app->register($provider);
        }
    }

    /**
     * Load additional Aliases
     * Base file Alias load is /config/app.php => aliases
     */
    protected function registerFacadeAliases()
    {
        $loader = AliasLoader::getInstance();
        foreach ($this->facadeAliases as $alias => $facade) {
            $loader->alias($alias, $facade);
        }
    }
}
