<?php

namespace App\Providers;

use App\Repositories\Interfaces\KingdomRepositoryInterface;
use App\Repositories\KingdomRepository;
use App\Services\Interfaces\KingdomServiceInterface;
use App\Services\KingdomService;
use Illuminate\Support\ServiceProvider;

class DiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->registerServices();
        $this->registerRepositories();
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }

    public function registerServices(): void
    {
        $this->app->bind(KingdomServiceInterface::class, KingdomService::class);
    }

    public function registerRepositories(): void
    {
        $this->app->bind(KingdomRepositoryInterface::class, KingdomRepository::class);
    }
}
