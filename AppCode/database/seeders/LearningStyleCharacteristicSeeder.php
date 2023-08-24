<?php

namespace Database\Seeders;

use App\Models\LearningStyleCharacteristic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LearningStyleCharacteristicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // disable foreign key check
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        LearningStyleCharacteristic::truncate();
        // enable foreign key check
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


        LearningStyleCharacteristic::insert([
            // style id 1=Independiente
            [
                "learning_style_id"=>"1",
                "characteristic_es"=>"Valoro la autonomía en el aprendizaje.",
                "characteristic_en"=>"I value autonomy in learning.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"1",
                "characteristic_es"=>"Me gusta descubrir por mí mismo.",
                "characteristic_en"=>"I like to discover for myself.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"1",
                "characteristic_es"=>"Suelo ser introspectivo.",
                "characteristic_en"=>"I tend to be introspective.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],


            // style id 2=Evitativo
            [
                "learning_style_id"=>"2",
                "characteristic_es"=>"Puedo sentirme abrumado por los desafíos.",
                "characteristic_en"=>"I can feel overwhelmed by challenges.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"2",
                "characteristic_es"=>"A menudo postergo las tareas.",
                "characteristic_en"=>"I often postpone tasks.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"2",
                "characteristic_es"=>"Puedo ser indiferente o desinteresado.",
                "characteristic_en"=>"I can be indifferent or disinterested.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],


            // Learning style id 3=•	Colaborativo
            [
                "learning_style_id"=>"3",
                "characteristic_es"=>"Aprendo a través de la interacción.",
                "characteristic_en"=>"I learn through interaction.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"3",
                "characteristic_es"=>"Valoro las opiniones de los demás.",
                "characteristic_en"=>"I value the opinions of others.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"3",
                "characteristic_es"=>"Soy un buen oyente.",
                "characteristic_en"=>"I am a good listener.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],


            // Learning style id 4=Dependiente
            [
                "learning_style_id"=>"4",
                "characteristic_es"=>"Necesito instrucciones claras.",
                "characteristic_en"=>"I need clear instructions.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"4",
                "characteristic_es"=>"Busco la aprobación de los tutores.",
                "characteristic_en"=>"I seek the approval of the tutors.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"4",
                "characteristic_es"=>"Puedo ser pasivo en mi aprendizaje.",
                "characteristic_en"=>"I can be passive in my learning.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],


            // Learning style id 4=Competitivo
            [
                "learning_style_id"=>"5",
                "characteristic_es"=>"Estoy orientado a logros.",
                "characteristic_en"=>"I am achievement oriented.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"5",
                "characteristic_es"=>"Busco reconocimiento.",
                "characteristic_en"=>"I seek recognition.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"5",
                "characteristic_es"=>"Puedo ser argumentativo.",
                "characteristic_en"=>"I can be argumentative.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],




            // Learning style id 6=Participativo
            [
                "learning_style_id"=>"6",
                "characteristic_es"=>"Aprendo haciendo.",
                "characteristic_en"=>"I learn by doing.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"6",
                "characteristic_es"=>"Busco aplicar lo aprendido.",
                "characteristic_en"=>"I seek to apply what I have learned.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"6",
                "characteristic_es"=>"Soy activo y dinámico.",
                "characteristic_en"=>"I am active and dynamic.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],



            // tutor

              // Learning style id 7
              [
                "learning_style_id"=>"7",
                "characteristic_es"=>"Tengo respuestas a las preguntas y dudas de mis estudiantes.",
                "characteristic_en"=>"I have answers to my students' questions and doubts.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"7",
                "characteristic_es"=>"Me esfuerzo por transmitir mi conocimiento de manera clara y concisa.",
                "characteristic_en"=>"I strive to convey my knowledge in a clear and concise manner.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],


              // Learning style id 8
              [
                "learning_style_id"=>"8",
                "characteristic_es"=>"Siempre sigo un temario o plan preestablecido.",
                "characteristic_en"=>"I always follow a pre-established agenda or plan.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"8",
                "characteristic_es"=>"Me aseguro de que cada sesión esté bien organizada y estructurada.",
                "characteristic_en"=>"I make sure that each session is well organized and structured.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],


            // Learning style id 9
            [
                "learning_style_id"=>"9",
                "characteristic_es"=>"Valoro y considero las experiencias y sentimientos de mis estudiantes.",
                "characteristic_en"=>"I value and consider the experiences and feelings of my students.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"9",
                "characteristic_es"=>"Busco que cada uno desarrolle sus habilidades personales y académicas.",
                "characteristic_en"=>"I seek that each one develops their personal and academic skills.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],


            // Learning style id 10
            [
                "learning_style_id"=>"10",
                "characteristic_es"=>"Ayudo a los estudiantes a encontrar sus propias respuestas.",
                "characteristic_en"=>"I help students find their own answers.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"10",
                "characteristic_es"=>"Estoy allí para guiarlos, no para darles todas las respuestas.",
                "characteristic_en"=>"I am there to guide them, not to give them all the answers.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],


            // Learning style id 11
            [
                "learning_style_id"=>"11",
                "characteristic_es"=>"Delego responsabilidades y tareas a los estudiantes.",
                "characteristic_en"=>"I delegate responsibilities and tasks to students.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"11",
                "characteristic_es"=>"Creo en la autonomía y capacidad de cada uno.",
                "characteristic_en"=>"I believe in the autonomy and ability of each one.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],



        ]);
    }
}
