<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin= Role::firstOrCreate(['name' => 'admin'],[
            "name" => "admin",
        ]);

        $user= Role::firstOrCreate(['name' => 'user'],[
            "name" => "user",
        ]);

        $student= Role::firstOrCreate(['name' => 'student'],[
            "name" => "student",
        ]);

        $tutor= Role::firstOrCreate(['name' => 'tutor'],[
            "name" => "tutor",
        ]);
    }
}
