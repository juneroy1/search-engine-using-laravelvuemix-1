<?php

namespace App\Providers;

use App\Contracts\Animal\AnimalRepositoryInterface;
use App\Contracts\Animal\AnimalServiceInterface;
use App\Contracts\Animal\MovieRepositoryInterface;
use App\Contracts\Animal\MovieServiceInterface;
use App\Contracts\UserRepositoryInterface;
use App\Contracts\Color\ColorRepositoryInterface;


use App\Contracts\UserServiceInterface;
use App\Contracts\Color\ColorServiceInterface;
use App\Repositories\EloquentAnimalRepository;
use App\Repositories\EloquentMovieRepository;
use App\Repositories\EloquentUserRepository;
use App\Repositories\EloquentColorRepository;


use App\Services\AnimalService;
use App\Services\MovieService;
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

        $this->app->bind(AnimalRepositoryInterface::class, EloquentAnimalRepository::class);
        $this->app->bind(AnimalServiceInterface::class, AnimalService::class);

        $this->app->bind(MovieRepositoryInterface::class, EloquentMovieRepository::class);
        $this->app->bind(MovieServiceInterface::class, MovieService::class);

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
