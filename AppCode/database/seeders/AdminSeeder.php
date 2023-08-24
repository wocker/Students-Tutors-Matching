<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $user =  User::updateOrCreate([
            "email"=>"jbatista@ayudinga.org"
        ],[
            "email" => "jbatista@ayudinga.org",
            "name" => "jbatista",
            "position" => "Presidente y Fundador",
            "password" => bcrypt("temp1234"),
        ]);
        $user->assignRole("admin");



        $user =  User::updateOrCreate([
            "email"=>"keving@ayudinga.org"
        ],[
            "email" => "keving@ayudinga.org",
            "name" => "keving",
            "position" => "Director de Tecnología e Investigación Educativa",
            "password" => bcrypt("temp1234"),
        ]);
        $user->assignRole("admin");


        $user =  User::updateOrCreate([
            "email"=>"rriley@ayudinga.org"
        ],[
            "email" => "rriley@ayudinga.org",
            "name" => "rriley",
            "position" => "Director de Contenidos",
            "password" => bcrypt("temp1234"),
        ]);
        $user->assignRole("admin");



        $user =  User::updateOrCreate([
            "email"=>"lvergara@ayudinga.org"
        ],[
            "email" => "lvergara@ayudinga.org",
            "name" => "lvergara",
            "position" => "Director de Voluntariado",
            "password" => bcrypt("temp1234"),
        ]);
        $user->assignRole("admin");



        $user =  User::updateOrCreate([
            "email"=>"mgonzalez@ayudinga.org"
        ],[
            "email" => "mgonzalez@ayudinga.org",
            "name" => "mgonzalez",
            "position" => "Analista Curricular",
            "password" => bcrypt("temp1234"),
        ]);
        $user->assignRole("admin");
    }
}
