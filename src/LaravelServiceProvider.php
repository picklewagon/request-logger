<?php

namespace Picklewagon\RequestLogger;

use Illuminate\Support\ServiceProvider;
use Picklewagon\RequestLogger\Http\Middleware\LogRequest;

class LaravelServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['router']->middleware('LogRequest', LogRequest::class);
    }
}
