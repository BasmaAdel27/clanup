<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\Discussion' => 'App\Policies\DiscussionPolicy',
        'App\Models\DiscussionComment' => 'App\Policies\DiscussionCommentPolicy',
        'App\Models\Event' => 'App\Policies\EventPolicy',
        'App\Models\Group' => 'App\Policies\GroupPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
    }
}
