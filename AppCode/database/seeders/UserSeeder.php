<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::firstOrCreate(
            [
                "email" => "admin@m.com",
            ],
            [
                "name" => "admin",
                "email" => "admin@m.com",
                "password" => bcrypt("password"),
            ]
        );

        $admin->assignRole("admin");

        $user = User::firstOrCreate(
            [
                "email" => "user@m.com",
            ],
            [
                "name" => "user",
                "email" => "user@m.com",
                "password" => bcrypt("password"),
            ]
        );

        $user->assignRole("user");
    }
}
