<?php

namespace Atnic\SBAdmin2\Providers;

use Atnic\SBAdmin2\Console\Commands\SBAdmin2MakeCommand;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/sb-admin-2.php' => config_path('sb-admin-2.php'),
        ], 'config');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'sb-admin-2');
        $this->publishes([
            __DIR__.'/../../resources/views' => resource_path('views/vendor/sb-admin-2')
        ], 'views');
        if ($this->app->runningInConsole()) {
            $this->commands([
                SBAdmin2MakeCommand::class,
            ]);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/sb-admin-2.php', 'sb-admin-2'
        );
    }
}
