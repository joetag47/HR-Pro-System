<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <50; $i++){
            $user = User::query()->create([
               'name' => "Bkantwi {$i}",
                'email' => "bkantwi{$i}@test.com",
                'is_admin' => 0,
                'email_verified_at' => now(),
                'password' => bcrypt('password'), // password
                'remember_token' => Str::random(10),
            ]);

//            5 because the user role id I created is 5

            $role = Role::where('id', 5)->first();

            $user->syncRoles($role);
        }
    }
}
