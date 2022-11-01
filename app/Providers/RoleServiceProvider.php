<?php

namespace App\Providers;

use App\Models\Role;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class RoleServiceProvider extends ServiceProvider
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
        View::composer(['layouts.tab_panes.roles_pane'], function ($view) {
            $role_count = Role::all()->count();

//            $department_count = Department::query()->where('company_id', auth()->user()->company_id)->count();

            $view->with([
                'role_count' => $role_count,
            ]);
        });
    }
}
