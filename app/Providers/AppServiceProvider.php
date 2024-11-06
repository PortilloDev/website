<?php

namespace App\Providers;

use App\Service\LeadsService\LeadsRegisterService;
use App\Service\LeadsService\LeadsRegisterServiceInterface;
use App\Service\NeswletterService\NewsletterService;
use App\Service\NeswletterService\NewsletterServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(NewsletterServiceInterface::class, NewsletterService::class);
        $this->app->bind(LeadsRegisterServiceInterface::class, LeadsRegisterService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
