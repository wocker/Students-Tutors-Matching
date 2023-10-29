<?php

namespace Database\Seeders;

use App\Models\Cluster;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClusterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cluster::insert([
            [
                "name"=>"Cluster 1",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "name"=>"Cluster 2",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "name"=>"Cluster 3",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "name"=>"Cluster 4",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
        ]);
    }
}
