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

            [
                'group_name' => 'superadmin',
                'permissions' => [
//                    Create superadmin
                    'superadmin.create',
                    'superadmin.view',
                    'superadmin.delete',
                    'superadmin.edit',
                ]
            ],

            [
                'group_name' => 'admin',
                'permissions' => [
//                    Create admin
                    'admin.create',
                    'admin.view',
                    'admin.delete',
                    'admin.edit',
                ]
            ],

            [
                'group_name' => 'business',
                'permissions' => [
                    'business.create',
                    'business.view',
                    'business.delete',
                    'business.edit',
                ]
            ],

            [
                'group_name' => 'user',
                'permissions' => [
                    'user.create',
                    'user.view',
                    'user.delete',
                    'user.edit',
                ]
            ],

            [
                'group_name' => 'employee',
                'permissions' => [
                    'employee.create',
                    'employee.view',
                    'employee.delete',
                    'employee.edit',
                ]
            ],

            [
                'group_name' => 'department',
                'permissions' => [
                    'department.create',
                    'department.view',
                    'department.delete',
                    'department.edit',
                ]
            ],

            [
                'group_name' => 'company',
                'permissions' => [
                    'company.create',
                    'company.view',
                    'company.delete',
                    'company.edit',
                ]
            ],
        ];

#=================================== CREATE AND ASSIGN PERMISSIONS =============================================#
        for ($i = 0; $i < count($permissions); $i++){
            $permissionGroup = $permissions[$i]['group_name'];
            for ($j = 0; $j < count($permissions[$i]['permissions']); $j++){
//                Create permission
                $permission = Permission::create(['name'=>$permissions[$i]['permissions'][$j], 'group_name' => $permissionGroup]);
                $roleSuperAdmin->givePermissionTo($permission);
                $permission->assignRole($roleAdmin);
            }
        }
    }
}
