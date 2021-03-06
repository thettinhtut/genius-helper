<?php

namespace genius;

use Arcanedev\Support\PackageServiceProvider;
use Genius\Providers\CommandsServiceProvider;
use Genius\Contacts\GeniusInterface;
use Genius\Services\GeniusService;

/**
 * Class     Genius Service Provider
 *
 * @package  Htinlynn\Genius
 * @author   HtinLynn <htinlin01@gmail.com>
 */
class GeniusServiceProvider extends PackageServiceProvider
{
    /* -----------------------------------------------------------------
     |  Properties
     | -----------------------------------------------------------------
     */

    /**
     * Package name.
     *
     * @var string
     */
    protected $package = 'genius';

    /**
     *
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            GeniusInterface::class
        ];
    }

    /**
     *
     */
    public function register()
    {
        parent::register();
        $this->registerConfig();
        $this->registerGeniusService();
        $this->registerAliases();
        $this->registerConsoleServiceProvider(CommandsServiceProvider::class);
    }


    /* -----------------------------------------------------------------
     |  Other Methods
     | -----------------------------------------------------------------
     */

    /**
     * Register the log data class.
     */
    private function registerGeniusService()
    {
        //Bind Important Interfaces
        $this->singleton(
            GeniusInterface::class,
            GeniusService::class
        );

        // Registering the Facade
        if ($facade = $this->config()->get('genius.facade')) {
            $this->alias($facade, Facades\Genius::class);
        }
    }
}

