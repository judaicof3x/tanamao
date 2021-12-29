<?php

namespace App\Providers;

use App\Models\Supervisao\Planos\Detail;
use App\Models\Supervisao\Planos\Plan;
use App\Observers\Supervisao\Planos\DetailObserver;
use App\Observers\Supervisao\Planos\PlanObserver;
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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Detail::observe(DetailObserver::class);
        Plan::observe(PlanObserver::class);
    }
}
