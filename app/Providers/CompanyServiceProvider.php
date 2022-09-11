<?php

namespace App\Providers;

use App\Models\Company\Department;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class CompanyServiceProvider extends ServiceProvider
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
        View::composer(['layouts.tab_panes.company_profile_pane'], function ($view) {
            $employee_count = User::query()->where('company_id', auth()->user()->company_id)->count();

            $department_count = Department::query()->where('company_id', auth()->user()->company_id)->count();

            $view->with([
                'employee_count' => $employee_count,
                'department_count' => $department_count
            ]);
        });
    }
}
