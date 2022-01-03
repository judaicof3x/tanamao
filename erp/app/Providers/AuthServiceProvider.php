<?php

namespace App\Providers;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('tenant_null', function (User $user) {
            $tenant = $user->tenant()->get();
            return ($user->is_customer AND empty($tenant[0]))
                ? Response::allow()
                : Response::deny('Você não tem permissão para acessar.');
        });

        Gate::define('tenant_active', function (User $user) {
            $tenant = $user->tenant()->get();
            return ($user->is_customer AND !empty($tenant[0]) AND $tenant[0]['status'] === 1)
                ? Response::allow()
                : Response::deny('Você não tem permissão para acessar.');
        });

        Gate::define('tenant_inactive', function (User $user) {
            $tenant = $user->tenant()->get();
            return ($user->is_customer AND !empty($tenant[0]) AND $tenant[0]['status'] === 0)
                ? Response::allow()
                : Response::deny('Você não tem permissão para acessar.');
        });

        Gate::define('subscription_null', function (User $user) {
            $tenant = $user->tenant()->get();
            $subs = $tenant[0]->subscriptions()->get()->toArray();

            return ($user->is_customer AND empty($subs))
                ? Response::allow()
                : Response::deny('Você não tem permissão para acessar.');
        });
    }
}
