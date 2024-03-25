<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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

         /* define an administrator user role */
        Gate::define('isAdmin', function($user) {
            return $user->role == 'admin';
        });
   
        /* define an author user role */
        Gate::define('isDoctor', function($user) {
             return $user->role == 'doctor';
        });
   
        /* define a user role */
        Gate::define('isPatient', function($user) {
            return $user->role == 'patient';
        });

        Gate::define('isAdmin|isDoctor', function($user) {
            return $user->role == 'admin' || $user->role == 'doctor';
        });

        Gate::define('isPatient|isDoctor', function($user) {
            return $user->role == 'patient' || $user->role == 'doctor';
        });
        
        Gate::define('isAdmin|isDoctor|isPatient', function($user) {
            return $user->role == 'admin' || $user->role == 'doctor'|| $user->role == 'patient';
        });

        Gate::define('isAdmin|isPatient', function($user) {
            return $user->role == 'admin' || $user->role == 'patient';
        });
    }
}
