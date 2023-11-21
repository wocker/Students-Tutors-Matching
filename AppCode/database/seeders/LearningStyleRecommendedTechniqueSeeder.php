<?php


namespace Database\Seeders;
use App\Models\LearningStyleRecommendedTechnique;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LearningStyleRecommendedTechniqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LearningStyleRecommendedTechnique::insert([

            // student

            [
                "learning_style_id"=>"1",
                "technique_es"=>"Valoro la autonomía en el aprendizaje",
                "technique_en"=>"I value autonomy in learning",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"1",
                "technique_es"=>"Me gusta descubrir por mí mismo.",
                "technique_en"=>"I like to discover for myself.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"1",
                "technique_es"=>"Suelo ser introspectivo.",
                "technique_en"=>"I tend to be introspective.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],

            // learning style 2

            [
                "learning_style_id"=>"2",
                "technique_es"=>"Puedo sentirme abrumado por los desafíos.",
                "technique_en"=>"I can feel overwhelmed by challenges.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"2",
                "technique_es"=>"A menudo postergo las tareas.",
                "technique_en"=>"I often postpone tasks.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"2",
                "technique_es"=>"Puedo ser indiferente o desinteresado.",
                "technique_en"=>"I can be indifferent or disinterested.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],


            // learning style 3

            [
                "learning_style_id"=>"3",
                "technique_es"=>"Formo grupos de estudio.",
                "technique_en"=>"I form study groups.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"3",
                "technique_es"=>"Realizo discusiones y debates sobre temas.",
                "technique_en"=>"I hold discussions and debates on topics.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"3",
                "technique_es"=>"Comparto y comparo notas con compañeros.",
                "technique_en"=>"I share and compare notes with classmates.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],



            // learning style 4

            [
                "learning_style_id"=>"4",
                "technique_es"=>"Necesito instrucciones claras.",
                "technique_en"=>"I need clear instructions.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"4",
                "technique_es"=>"Busco la aprobación de los tutores.",
                "technique_en"=>"I seek the approval of the tutors.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"4",
                "technique_es"=>"Puedo ser pasivo en mi aprendizaje.",
                "technique_en"=>"I can be passive in my learning.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],



            // learning style 5

            [
                "learning_style_id"=>"5",
                "technique_es"=>"Establezco metas claras para cada sesión de estudio.",
                "technique_en"=>"I set clear goals for each study session.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"5",
                "technique_es"=>"Uso tarjetas de memoria o flashcards para repasar.",
                "technique_en"=>"I use memory cards or flashcards to review.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"5",
                "technique_es"=>"Realizo simulacros de exámenes para evaluar mi progreso.",
                "technique_en"=>"I do exam drills to assess my progress.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],



            // learning style 6

            [
                "learning_style_id"=>"6",
                "technique_es"=>"Realizo ejercicios prácticos o simulaciones.",
                "technique_en"=>"I do practical exercises or simulations.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"6",
                "technique_es"=>"Relaciono el contenido con situaciones reales.",
                "technique_en"=>"I relate the content to real situations.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"6",
                "technique_es"=>"Uso técnicas de aprendizaje experiencial, como el aprendizaje basado en proyectos.",
                "technique_en"=>"I use experiential learning techniques, such as project-based learning.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],




            // tutor


            // learning style 7

            [
                "learning_style_id"=>"7",
                "technique_es"=>"Organizo sesiones donde los estudiantes pueden hacerme preguntas directamente.",
                "technique_en"=>"I organize sessions where students can ask me questions directly.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"7",
                "technique_es"=>"Realizo mini-conferencias para abordar temas específicos.",
                "technique_en"=>"I give mini-lectures to address specific topics.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"7",
                "technique_es"=>"Proporciono lecturas y recursos adicionales para que los estudiantes profundicen.",
                "technique_en"=>"I provide additional readings and resources for students to delve into.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],


            // learning style 8

            [
                "learning_style_id"=>"8",
                "technique_es"=>"Uso esquemas o guías de estudio para mantener a todos en la misma página.",
                "technique_en"=>"I use outlines or study guides to keep everyone on the same page.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"8",
                "technique_es"=>"Realizo pruebas o cuestionarios grupales para evaluar el progreso.",
                "technique_en"=>"I do group tests or quizzes to assess progress.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"8",
                "technique_es"=>"Mantengo un seguimiento estructurado de los temas que abordamos.",
                "technique_en"=>"I keep a structured track of the topics we address.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],


            // learning style 9

            [
                "learning_style_id"=>"9",
                "technique_es"=>"Fomento discusiones abiertas donde cada estudiante pueda compartir.",
                "technique_en"=>"I encourage open discussions where each student can share.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"9",
                "technique_es"=>"Propongo actividades de autoevaluación y reflexión.",
                "technique_en"=>"I propose self-assessment and reflection activities.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"9",
                "technique_es"=>"Realizo dinámicas de grupo para que todos compartan y aprendan juntos.",
                "technique_en"=>"I do group dynamics for everyone to share and learn together.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],



            // learning style 10

            [
                "learning_style_id"=>"10",
                "technique_es"=>"Propongo estudios de caso para que los discutan y analicen en grupo.",
                "technique_en"=>"I propose case studies for them to discuss and analyze in groups.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"10",
                "technique_es"=>"Fomento proyectos de investigación colaborativos.",
                "technique_en"=>"I encourage collaborative research projects.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"10",
                "technique_es"=>"Utilizo el aprendizaje basado en problemas para que busquen soluciones juntos.",
                "technique_en"=>"I use problem-based learning for them to seek solutions together.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],




            // learning style 11

            [
                "learning_style_id"=>"11",
                "technique_es"=>"Asigno roles específicos a cada miembro del grupo.",
                "technique_en"=>"I assign specific roles to each group member.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"11",
                "technique_es"=>"Propongo proyectos en los que ellos decidan el enfoque y resultados.",
                "technique_en"=>"I propose projects in which they decide the focus and results.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "learning_style_id"=>"11",
                "technique_es"=>"Fomento presentaciones grupales donde cada uno aporte desde su perspectiva.",
                "technique_en"=>"I encourage group presentations where each one contributes from their perspective.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],

        ]);
    }
}
