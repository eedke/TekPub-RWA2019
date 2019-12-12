<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $waiterRole = Role::where('name', 'waiter')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678')
        ]);

        $waiter = User::create([
            'name' => 'Waiter User',
            'email' => 'waiter@waiter.com',
            'password' => Hash::make('12345678')
        ]);

        $user = User::create([
            'name' => 'Generic User',
            'email' => 'user@user.com',
            'password' => Hash::make('12345678')
        ]);

        $admin->roles()->attach($adminRole);
        $waiter->roles()->attach($waiterRole);
        $user->roles()->attach($userRole);
    }
}
