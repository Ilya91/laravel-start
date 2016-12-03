<?php

namespace App\Providers;

use App\News;
use App\Policies\NewsPolicy;
use App\User;
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
        News::class => NewsPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
       /* $this->registerPolicies();

        Gate::define('add-post', function (User $user) {
            foreach ($user->roles as $role) {
                if($role->name == 'Admin'){
                    return true;
                }
            }
            return false;
        });

        Gate::define('update-post', function (User $user, $post) {
            foreach ($user->roles as $role) {
                if($role->name == 'Admin'){
                    if($user->id == $post->user_id){
                        return true;
                    }
                }
            }
            return false;
        });*/


    }
}
