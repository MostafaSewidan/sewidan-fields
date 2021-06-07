<?php
namespace SewidanField;
use Illuminate\Support\ServiceProvider;
class SewidanFieldServiceProvider extends ServiceProvider {

    public function boot() {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'fields');
        $this->publishes([
            __DIR__.'/../config/filed.php' => config_path('filed.php'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/filed.php', 'filed'
        );
    }
}