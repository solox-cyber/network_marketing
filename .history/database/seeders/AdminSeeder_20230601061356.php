<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create an admin with a specific role
        $admin1 = Admin::create([
            'name' => 'Admin 1',
            'email' => 'admin1@example.com',
            'password' => Hash::make('password'),
        ]);
        $adminRole1 = AdminRole::where('name', 'Role 1')->first();
        $admin1->adminRole()->associate($adminRole1);
        $admin1->save();

        // Create another admin with a different role
        $admin2 = Admin::create([
            'name' => 'Admin 2',
            'email' => 'admin2@example.com',
            'password' => Hash::make('password'),
        ]);
        $adminRole2 = AdminRole::where('name', 'Role 2')->first();
        $admin2->adminRole()->associate($adminRole2);
        $admin2->save();

        // You can add more admins with different roles as needed
    }
}
In this example, we assume you have an AdminRole model with a relationship to the Admin model.

Update the DatabaseSeeder.php file located in the database/seeders directory and call the AdminSeeder class inside the run() method:
php
Copy code
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            // Other seeders if any
        ]);
    }
}
Finally, run the database seeder command to populate the database with the admin users:
bash
Copy code
php artisan db:seed
Make sure you have defined the admin_roles table and its corresponding model, AdminRole, with the necessary relationships.

This way, when you run the seeder, it will create admin users with different roles in the database.







}
