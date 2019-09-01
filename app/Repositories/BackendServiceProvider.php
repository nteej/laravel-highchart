<?php
/**
 *
 * Sprii, Dubai, United Arab Emirates
 * @category    Sprii
 * @author      Sprii Team <technical@sprii.com>
 * Copyright (c) 2017.  Sprii. (http://www.sprii.com)
 *
 */
namespace App\Repositories;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
        'App\Repositories\OnboardRepositoryInterface',
        'App\Repositories\OnboardRepository'
    );
    }
}