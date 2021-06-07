<?php
namespace SewidanField;
use Illuminate\Support\ServiceProvider;
class SewidanFieldServiceProvider extends ServiceProvider {

    public function boot() {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'fields');
        $this->publishes([
            __DIR__.'/../config/field.php' => config_path('field.php'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/field.php', 'field'
        );
    }
}