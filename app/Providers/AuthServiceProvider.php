<?php

namespace App\Providers;

use App\Permission;
use App\Product;
use function foo\func;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Product::class => 'App\Policies\ProductPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

//        Gate::define('Edit_products', function($user){
//                return $user->hasRole()
//        });

        foreach ($this->getPermissions() as $permission){
            Gate::define($permission->name, function ($user) use ($permission){
                return $user->hasRole($permission->roles);
            });
        }
        
    }

    public function getPermissions()
    {
        return Permission::with('roles')->get();
    }
}
