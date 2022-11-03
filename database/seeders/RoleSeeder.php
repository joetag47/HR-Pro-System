<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class  RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleSuperAdmin = Role::create(['name' => 'superadmin']);
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleBusiness = Role::create(['name' => 'business']);
        $roleUser = Role::create(['name' => 'user']);

        $permissions = [
//          Create superadmin
            'superadmin.create',
            'superadmin.view',
            'superadmin.delete',
            'superadmin.edit',

//          Create admin
            'admin.create',
            'admin.view',
            'admin.delete',
            'admin.edit',

//          Create business
            'business.create',
            'business.view',
            'business.delete',
            'business.edit',

//            Create user
            'user.create',
            'user.view',
            'user.delete',
            'user.edit'
        ];

#=================================== CREATE AND ASSIGN PERMISSIONS =============================================#
        for ($i = 0; $i < count($permissions); $i++){
//            Create permission
            $permission = Permission::create(['name'=>$permissions[$i]]);
            $roleSuperAdmin->givePermissionTo($permission);
            $permission->assignRole($roleAdmin);
        }
    }
}
