<?php

namespace Database\Seeders;

use App\Models\StudentCluster;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentClusterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        StudentCluster::insert([
            [
                "cluster_id"=>1,
                "learning_style_id"=>4,
            ],
            [
                "cluster_id"=>1,
                "learning_style_id"=>6,
            ],
            [
                "cluster_id"=>1,
                "learning_style_id"=>5,
            ],



            [
                "cluster_id"=>2,
                "learning_style_id"=>6,
            ],
            [
                "cluster_id"=>2,
                "learning_style_id"=>4,
            ],
            [
                "cluster_id"=>2,
                "learning_style_id"=>5,
            ],



            [
                "cluster_id"=>3,
                "learning_style_id"=>3,
            ],
            [
                "cluster_id"=>3,
                "learning_style_id"=>6,
            ],
            [
                "cluster_id"=>3,
                "learning_style_id"=>1,
            ],



            [
                "cluster_id"=>4,
                "learning_style_id"=>1,
            ],
            [
                "cluster_id"=>4,
                "learning_style_id"=>3,
            ],
            [
                "cluster_id"=>4,
                "learning_style_id"=>6,
            ],


        ]);
    }
}
