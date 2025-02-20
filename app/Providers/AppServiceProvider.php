<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    protected $policies = [
        // Mendaftarkan policy untuk model User
        User::class => UserPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();

        // Bisa menambahkan Gates secara manual, jika diperlukan
    }
}

