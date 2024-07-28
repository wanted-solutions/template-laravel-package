<?php

namespace Wanted\Solutions\Laravel\Package;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {
    
    public function register(): void {
        /*
            Load service provider class
            $this->app->register(AnotherServiceProvider::class);
        */

        /*  
            Merge package default config values with the application level config
            $this->mergeConfigFrom(
                __DIR__ . '/../config/wantd-package.php', 'wntd-package'
            );
        */
    }

    public function boot(): void {
        /* 
            Load the routes file
            $this->loadRoutesFrom(__DIR__.'/../routes/routes.php');
        */

        /*
            Load and publish the views file with an vendor alias to allow simple customization
            $this->loadViewsFrom(__DIR__.'/../resources/views', 'wntd-package');
            $this->publishesMigrations([
                __DIR__.'/../resources/views' => resource_path('views/vendor/wntd-package'),
            ], [
                'wntd-packages', 'wntd-packages-views',
                'wntd-package', 'wntd-package-views'
            ]);
        */   
        
        /*
            Load and publish and registed the Blade components file
            Blade::component('wntd-package-component', Wanted\\Solutions\\Laravel\\Package\\Components::class); called wntd-package-component
            Blade::componentNamespace('Wanted\\Solutions\\Laravel\\Package\\Components', 'wntd-package'); -> called wntd-package::component
        */

        /*
            Load and publish the translations file
            $this->loadTranslationsFrom(__DIR__.'/../resources/translations', 'wntd-package');
            // load as JSON objects instread of php arrays
            $this->loadJsonTranslationsFrom(__DIR__.'/../resources/translations');
            $this->publishes([
                __DIR__.'/../resources/translations' => $this->app->langPath('vendor/wntd-package'),
            ], [
                'wntd-packages', 'wntd-packages-i18n',
                'wntd-package', 'wntd-package-i18n'
            ]);
        */

        /*
            Publish database migrations and give them actual timestamps
            $this->publishesMigrations([
                __DIR__.'/../database/migrations' => database_path('migrations'),
            ], [
                'wntd-packages', 'wntd-packages-migrations',
                'wntd-package', 'wntd-package-migrations'
            ]);
        */

        /*
            Publish default configuration file
            $this->publishes([
                __DIR__.'/../config/wntd-package.php' => config_path('wntd-package.php'),
            ], [
                'wntd-packages', 'wntd-packages-config',
                'wntd-package', 'wntd-package-config'
            ]);
        */

        /*
            $this->publishes([
                __DIR__.'/../public' => public_path('vendor/courier'),
            ], [
                'wntd-packages', 'wntd-packages-public-assets',
                'wntd-package', 'wntd-package-public-assets'
            ]);
        */

        /*
            Configure and register php artisan package commands
            \\Illuminate\Foundation\Console\AboutCommand::add('My package', fn () => ['Version' => '1.0.0']);
            if ($this->app->runningInConsole()) {
                $this->commands([
                    CommandOne::class,
                    CommandTwo::class,
                ]);
            }
        */
    }
}