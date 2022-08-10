<?php

namespace App\Providers;

use App\Interfaces\TodoRepositoryContract;
use App\Repositories\TodoRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(TodoRepositoryContract::class, TodoRepository::class);
    }
}
