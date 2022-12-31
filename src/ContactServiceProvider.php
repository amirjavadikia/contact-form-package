<?php
namespace Amirjavadikia\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'contact');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->mergeConfigFrom(__DIR__ . '/config/contact.php', 'contact');
        $this->publishes([
            // Config
            __DIR__ . '/config/contact.php' => config_path('contact.php'),
            // Views
            __DIR__ . '/resources/views' => resource_path('views/vendor/contact'),
            // Assets
            __DIR__.'/resources/js' => public_path('vendor/package-name/js'),
            __DIR__.'/resources/css' => public_path('vendor/package-name/css'),
        ]);

    }


    public function register()
    {

    }
}
