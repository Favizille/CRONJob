<?php

namespace App\Providers;

use App\Services\PositionService;
use Illuminate\Support\ServiceProvider;
use App\Console\Commands\ExpireStalePositions;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('position-service', function ($app) {
            return new PositionService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         if ($this->app->runningInConsole()) {
        $this->commands([
            ExpireStalePositions::class,
        ]);
    }
    }
}
