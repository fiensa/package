<?php

namespace Simplexi\Greetr;

use Illuminate\Support\ServiceProvider;

class GreetrServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // dd(__DIR__.'/routes/web.php');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
    public function register()
    {
        
    }
}
