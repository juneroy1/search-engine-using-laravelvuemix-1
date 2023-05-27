<?php

namespace App\Providers;

use App\Contracts\UserRepositoryInterface;
use App\Contracts\ColorRepositoryInterface;


use App\Contracts\UserServiceInterface;
use App\Contracts\ColorServiceInterface;
use App\Repositories\EloquentUserRepository;
use App\Repositories\EloquentColorRepository;


use App\Services\UserService;
use App\Services\ColorService;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(UserRepositoryInterface::class, EloquentUserRepository::class);
        $this->app->bind(UserServiceInterface::class, UserService::class);

        $this->app->bind(ColorRepositoryInterface::class, EloquentColorRepository::class);
        $this->app->bind(ColorServiceInterface::class, ColorService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
