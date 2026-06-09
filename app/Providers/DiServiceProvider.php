<?php

namespace App\Providers;

use App\Repositories\Interfaces\KingdomRepositoryInterface;
use App\Repositories\Interfaces\OrganizationRepositoryInterface;
use App\Repositories\KingdomRepository;
use App\Repositories\OrganizationRepository;
use App\Services\Interfaces\KingdomServiceInterface;
use App\Services\Interfaces\OrganizationServiceInterface;
use App\Services\KingdomService;
use App\Services\OrganizationService;
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
        $this->app->bind(OrganizationServiceInterface::class, OrganizationService::class);
    }

    public function registerRepositories(): void
    {
        $this->app->bind(KingdomRepositoryInterface::class, KingdomRepository::class);
        $this->app->bind(OrganizationRepositoryInterface::class, OrganizationRepository::class);
    }
}
