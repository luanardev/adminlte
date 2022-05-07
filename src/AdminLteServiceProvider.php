<?php

namespace Luanardev\AdminLte;

use Illuminate\Support\ServiceProvider;

class AdminLteServiceProvider extends ServiceProvider
{
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerCommands();
        $this->registerViews();
        $this->registerComponents();     
    }


    /**
     * Register the package's artisan commands.
     *
     * @return void
     */
    private function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                AdminLteCommand::class,
            ]);
        }
    }

    /**
     * Load the package views.
     *
     * @return void
     */
    private function registerViews()
    {
        $viewsPath = FileHelper::getPackagePath('resources/views');
        $this->loadViewsFrom($viewsPath, 'adminlte');
    }

    /**
     * Load the blade view components.
     *
     * @return void
     */
    private function registerComponents()
    {
        // Support of x-components is only available for Laravel >= 7.x
        // versions. So, we check if we can load components.

        $canLoadComponents = method_exists(
            'Illuminate\Support\ServiceProvider',
            'loadViewComponentsAs'
        );

        if (! $canLoadComponents) {
            return;
        }

        // Load all the blade-x components.
        $components = AdminLteComponents::getComponents();

        $this->loadViewComponentsAs('adminlte', $components);
    }

    
}
