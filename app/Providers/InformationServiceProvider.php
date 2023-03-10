<?php

namespace App\Providers;

use Config;
use App\Models\Information;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class InformationServiceProvider extends ServiceProvider
{
    /**
     * @var bool
     */
    protected $defer = false;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('information', function ($app) {
            return new Information();
        });
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Information', Information::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // only use the Informations package if the Information table is present in the database
        if (!\App::runningInConsole() && count(Schema::getColumnListing('information'))) {
            $informations = Information::all();
            foreach ($informations as $key => $information)
            {
                Config::set('information.'.$information->key, $information->value);
            }
        }
    }
}
