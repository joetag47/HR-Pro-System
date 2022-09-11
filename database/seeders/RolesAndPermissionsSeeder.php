<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

//        User Model
        $userPermission1 = Permission::create(['name' => 'create:user', 'description' => 'create user']);
        $userPermission2 = Permission::create(['name' => 'read:user', 'description' => 'read user']);
        $userPermission3 = Permission::create(['name' => 'update:user', 'description' => 'update user']);
        $userPermission4 = Permission::create(['name' => 'delete:user', 'description' => 'delete user']);

//        Role Model
        $rolePermission1 = Permission::create(['name' => 'create:role', 'description' => 'create role']);
        $rolePermission2 = Permission::create(['name' => 'read:role', 'description' => 'read role']);
        $rolePermission3 = Permission::create(['name' => 'update:role', 'description' => 'update role']);
        $rolePermission4 = Permission::create(['name' => 'delete:role', 'description' => 'delete role']);

//        Permission Model
        $permission1 = Permission::create(['name' => 'create:permission', 'description' => 'create permission']);
        $permission2 = Permission::create(['name' => 'read:permission', 'description' => 'read permission']);
        $permission3 = Permission::create(['name' => 'update:permission', 'description' => 'update permission']);
        $permission4 = Permission::create(['name' => 'delete:permission', 'description' => 'delete permission']);

//        Admin Model
        $adminPermission1 = Permission::create(['name' => 'create:admin', 'description' => 'create admin']);
        $adminPermission2 = Permission::create(['name' => 'read:admin', 'description' => 'read admin']);

        $superAdminRole = Role::create(['name' => 'super-admin']);
        $adminRole = Role::create(['name' => 'admin']);
        $moderatorRole = Role::create(['name' => 'moderator']);
        $developerRole = Role::create(['name' => 'developer']);
        $userRole = Role::create(['name' => 'user']);

//        Syncing superadmin permissions to db
        $superAdminRole->syncPermissions([
            $userPermission1,
            $userPermission2,
            $userPermission3,
            $userPermission4,
            $rolePermission1,
            $rolePermission2,
            $rolePermission3,
            $rolePermission4,
            $permission1,
            $permission2,
            $permission3,
            $permission4,
            $adminPermission1,
            $adminPermission2,
        ]);

//        Syncing admin permissions to db
        $adminRole->syncPermissions([
            $userPermission1,
            $userPermission2,
            $userPermission3,
            $userPermission4,
            $rolePermission1,
            $rolePermission2,
            $rolePermission3,
            $rolePermission4,
            $permission1,
            $permission2,
            $permission3,
            $permission4,
            $adminPermission1,
            $adminPermission2,
        ]);

//        Syncing permissions for moderator
        $moderatorRole->syncPermissions([
            $userPermission2,
            $rolePermission2,
            $permission2,
            $adminPermission1,
        ]);

//        Sync developer role to db
        $developerRole->syncPermissions([
            $adminPermission1,
        ]);

//        Create superadmin
        $superAdmin = user::create([
            'name' => 'super admin',
            'is_admin' => 1,
            'email' => 'superman@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

//        Create admin
        $admin = user::create([
            'name' => 'admin',
            'is_admin' => 1,
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

//        Create moderator
        $moderator = user::create([
            'name' => 'moderator',
            'is_admin' => 1,
            'email' => 'moderator@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

//        Create developer
        $developer = user::create([
            'name' => 'developer',
            'is_admin' => 1,
            'email' => 'developer@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

//        Create user
        $user = user::create([
            'name' => 'user',
            'is_admin' => 0,
            'email' => 'user@user.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        $superAdmin->syncRoles([$superAdminRole])->syncPermissions([
           $userPermission1,
           $userPermission2,
           $userPermission3,
           $userPermission4,
           $rolePermission1,
           $rolePermission2,
           $rolePermission3,
           $rolePermission4,
           $permission1,
           $permission2,
           $permission3,
           $permission4,
           $adminPermission1,
           $adminPermission2,
        ]);

        $admin->syncRoles([$adminRole])->syncPermissions([
            $userPermission1,
            $userPermission2,
            $userPermission3,
            $userPermission4,
            $rolePermission4,
            $rolePermission3,
            $rolePermission2,
            $rolePermission1,
            $permission1,
            $permission2,
            $permission3,
            $permission4,
            $userPermission1,
        ]);

        $moderator->syncROles($moderatorRole)->syncPermissions([
            $userPermission2,
            $rolePermission2,
            $adminPermission1,
        ]);

        $developer->syncRoles($developerRole)->syncPermissions([
            $adminPermission1,
        ]);

        $user->syncRoles($userRole);

    }
}
