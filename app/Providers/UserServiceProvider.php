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
            $user_count = User::all()->count();

//            $department_count = Department::query()->where('company_id', auth()->user()->company_id)->count();

            $view->with([
                'user_count' => $user_count,
            ]);
        });
    }
}
