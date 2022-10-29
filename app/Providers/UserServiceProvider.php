<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['layouts.tab_panes.user_management_pane'], function ($view) {
            $user_count = User::query()->where('email', auth()->user()->email)->count();


            $view->with([
                'user_count' => $user_count,
            ]);
        });
    }
}
