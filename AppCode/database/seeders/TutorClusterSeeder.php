<?php

namespace Database\Seeders;

use App\Models\TutorCluster;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TutorClusterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TutorCluster::insert([
            [
                "cluster_id"=>1,
                "learning_style_id"=>7,
            ],
            [
                "cluster_id"=>1,
                "learning_style_id"=>8,
            ],



            [
                "cluster_id"=>2,
                "learning_style_id"=>9,
            ],
            [
                "cluster_id"=>2,
                "learning_style_id"=>7,
            ],
            [
                "cluster_id"=>2,
                "learning_style_id"=>8,
            ],



            [
                "cluster_id"=>3,
                "learning_style_id"=>10,
            ],
            [
                "cluster_id"=>3,
                "learning_style_id"=>9,
            ],
            [
                "cluster_id"=>3,
                "learning_style_id"=>7,
            ],



            [
                "cluster_id"=>4,
                "learning_style_id"=>11,
            ],
            [
                "cluster_id"=>4,
                "learning_style_id"=>10,
            ],
            [
                "cluster_id"=>4,
                "learning_style_id"=>7,
            ],


        ]);
    }
}
