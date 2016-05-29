<?php

namespace Picklewagon\RequestLogger;

use Illuminate\Support\ServiceProvider;
use Picklewagon\RequestLogger\Http\Middleware\LogRequest;

class LumenServiceProvider extends ServiceProvider
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
        $this->app->middleware([LogRequest::class]);
    }
}
