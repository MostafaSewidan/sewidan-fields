<?php
namespace MyVendor\SewidanField;
use Illuminate\Support\ServiceProvider;
class SewidanFieldServiceProvider extends ServiceProvider {

    public function boot() {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'sewidanfield');
    }

    public function register()
    {
    }
}