<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\AdminRole;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         // Create an admin with a specific role
         $admin1 = Admin::create([
            'name' => 'Admin 1',
            'email' => 'admin1@example.com',
            'password' => Hash::make('password'),
        ]);
        $adminRole1 = AdminRole::where('name', 'Super Admin')->first();
        $admin1->adminRole()->associate($adminRole1);
        $admin1->save();

        // Create another admin with a different role
        $admin2 = Admin::create([
            'name' => 'Admin 2',
            'email' => 'admin2@example.com',
            'password' => Hash::make('password'),
        ]);
        $adminRole2 = AdminRole::where('name', 'Editor')->first();
        $admin2->adminRole()->associate($adminRole2);
        $admin2->save();

        // You can add more admins with different roles as needed
    }
}
