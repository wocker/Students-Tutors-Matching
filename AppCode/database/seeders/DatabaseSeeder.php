<?php

namespace Database\Seeders;

use Database\Seeders\avel\grasha\LearningStyleRecommendedTechniqueSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            LearningStyleSeeder::class,
            PossibleAnswerSeeder::class,
            QuestionSeeder::class,
            QuestionTutorSeeder::class,
            LearningStyleCharacteristicSeeder::class,
            LearningStyleRecommendedTechniqueSeeder::class,
            AdminSeeder::class,
            ClusterSeeder::class,
            TutorClusterSeeder::class,
            StudentClusterSeeder::class,
            TeachingStylePreferenceSeeder::class,
        ]);
    }
}
