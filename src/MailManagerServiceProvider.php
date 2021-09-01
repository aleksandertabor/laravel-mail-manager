<?php

namespace AleksanderTabor\MailManager;

use Illuminate\Support\ServiceProvider;

class MailManagerServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/mail-manager.php', 'mail-manager');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/mail-manager.php' => config_path('mail-manager.php'),
        ], 'config');
    }
}
