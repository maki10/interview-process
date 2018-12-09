<?php

namespace App\Providers;

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
        'App\User' => 'App\Policies\UserPolicy',
        'App\Office' => 'App\Policies\OfficePolicy',
        'App\Interview' => 'App\Policies\InterviewPolicy',
        'App\WorkingHour' => 'App\Policies\WorkingHourPolicy',
        'App\InterviewType' => 'App\Policies\InterviewTypePolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
