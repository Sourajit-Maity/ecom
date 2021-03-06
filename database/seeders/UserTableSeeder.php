<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdminUser= User::create([
            'first_name' => "Admin",
            'last_name' => "Admin",
            'email' => "admin@admin.com",
            'password' => "11111111",
            'is_admin'=>'1',
            'active'=>true
        ]);
        $superAdminUser->assignRole('SUPER-ADMIN');
        $User= User::create([
            'first_name' => "User",
            'last_name' => "User",
            'email' => "user@user.com",
            'password' => "11111111",
            'active'=>true
        ]);
        $User->assignRole('CLIENT');
        User::factory(50)->create()->each(function ($user) {
            $user->assignRole('CLIENT');
        });
    }
}
