<?php

namespace App\Providers;

use App\Repositories\Interfaces\JurusanRepositoryInterface;
use App\Repositories\JurusanRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            JurusanRepositoryInterface::class,
            JurusanRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
