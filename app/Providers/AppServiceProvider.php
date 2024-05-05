<?php

namespace App\Providers;

use App\Repositry\ClientRepositry;
use App\Repositry\ClientRepositryI;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

use App\Repositry\RoomRepositryI;
use App\Repositry\RoomRepositry;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Schema::defaultStringLength(191);
        $this->app->bind(RoomRepositryI::class,RoomRepositry::class);
        $this->app->bind(ClientRepositryI::class,ClientRepositry::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
