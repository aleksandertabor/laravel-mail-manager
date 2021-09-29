<?php

namespace AleksanderTabor\MailManager;

use AleksanderTabor\MailManager\Commands\MailManagerCommand;
use Illuminate\Support\ServiceProvider;

class MailManagerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/mail-manager.php' => config_path('mail-manager.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/mail-manager'),
            ], 'views');

            $this->commands([
                MailManagerCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'mail-manager');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/mail-manager.php', 'mail-manager');
    }
}
