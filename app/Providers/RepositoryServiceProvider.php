<?php

namespace App\Providers;

use App\Interfaces\JenisHewanRepositoryInterface;
use App\Repositories\JenisHewanRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            JenisHewanRepositoryInterface::class,
            JenisHewanRepository::class
        );
        
        // Bind other repositories here
    }

    public function boot(): void
    {
        //
    }
}