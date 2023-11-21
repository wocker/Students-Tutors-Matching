<?php

namespace Database\Seeders;

use App\Models\LearningStyle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LearningStyleSeeder extends Seeder
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
        // truncate table
        LearningStyle::truncate();
        // enable foreign key check
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        LearningStyle::insert([
            [
                "style_en" => "Independent",
                "style_es" => "Independiente",
                "type" => "student",
                "info_es"=>"Te gusta pensar por ti mismo. Eres autónomo y confiado en tu aprendizaje. Decides lo que es importante y lo que no lo es, y te gusta trabajar de manera solitaria. Evitas el trabajo en equipo.",
                "info_en"=>"You like to think for yourself. You are autonomous and confident in your learning. You decide what is important and what is not, and you like to work alone. You avoid teamwork.",
                "image"=>"media/students/Independiente.png",
                "description_es"=>"Prefiero trabajar solo y establecer mi propio ritmo de aprendizaje.",
                "description_en"=>"I prefer to work alone and set my own pace of learning.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "style_es"=>"Evitativo",
                "style_en"=>"Evitativo",
                "type"=>"student",
                "image"=>"media/students/evitativo.png",
                "info_es"=>"No manifiestas entusiasmo en clase. No participas y te mantienes aislado. Eres apático y desinteresado en las actividades escolares. No te gusta estar mucho tiempo en el aula.",
                "info_en"=>"You do not show enthusiasm in class. You do not participate and you keep yourself isolated. You are apathetic and uninterested in school activities. You don't like to spend a lot of time in the classroom.",
                "description_es"=>"A menudo evito participar activamente en el proceso de aprendizaje.",
                "description_en"=>"I often avoid actively participating in the learning process.",
                "created_at"=>now(),
                "updated_at"=>now()
            ],
            [
                "style_es" => "Colaborativo",
                "style_en" => "Collaborative",
                "type" => "student",
                "info_es"=>"Te gusta aprender compartiendo ideas y talentos. Gustas de trabajar con tus compañeros y con tus profesores.",
                "info_en"=>"You like to learn by sharing ideas and talents. You like to work with your classmates and with your teachers.",
                "description_es"=>"Aprendo mejor trabajando con otros y valoro el trabajo en equipo y la interacción.",
                "description_en"=>"I learn best by working with others and value teamwork and interaction.",
                "created_at" => now(),
                "updated_at" => now(),
                "image"=>"media/students/colaborativo.png"
            ],

            [
                "style_es"=>"Dependiente",
                "style_en"=>"Dependiente",
                "type"=>"student",
                "info_es"=>"Manifiestas poca curiosidad intelectual y aprendes solo lo que tienes que aprender. Visualizas a los profesores y a tus compañeros como figuras de guía o autoridad para realizar tus actividades.",
                "info_en"=>"You show little intellectual curiosity and learn only what you have to learn. You visualize teachers and your classmates as guiding or authoritative figures to carry out your activities.",
                "description_es"=>"Busco una estructura clara y directrices específicas.",
                "description_en"=>"I look for a clear structure and specific guidelines.",
                "created_at"=>now(),
                "updated_at"=>now(),
                "image"=>"media/students/dependiente.png"
            ],
            [
                "style_es"=>"Competitivo",
                "style_en"=>"Competitive",
                "type"=>"student",
                "info_es"=>"Estudias para demostrar tu supremacía en términos de aprovechamiento o calificación. Te gusta ser el centro de atención y recibir reconocimiento de tus logros.",
                "info_en"=>"You study to demonstrate your supremacy in terms of performance or grade. You like to be the center of attention and receive recognition for your achievements.",
                "description_es"=>"Quiero ser el mejor y aprender para superar a los demás.",
                "description_en"=>"I want to be the best and learn to outperform others.",
                "created_at"=>now(),
                "updated_at"=>now(),
                "image"=>"media/students/competitivo.png"
            ],
            [
                "style_es"=>"Participativo",
                "style_en"=>"Participative",
                "type"=>"student",
                "info_es"=>"Eres un buen elemento en clase, disfrutas la sesión y procuras estar al pendiente la mayor parte del tiempo. Tienes mucha disposición para el trabajo escolar.",
                "info_en"=>"You are a good element in class, you enjoy the session and try to be aware most of the time. You are very willing to do school work.",
                "description_es"=>"Busco aprender a través de experiencias directas y prácticas.",
                "description_en"=>"I seek to learn through direct and practical experiences.",
                "created_at"=>now(),
                "updated_at"=>now(),
                "image"=>"media/students/participativo.png"
            ],

            // tutor
            [
                "style_es"=>"Experto",
                "style_en"=>"Expert",
                "type"=>"tutor",
                "info_es"=>"Eres tutor que posee el conocimiento y la experiencia que los estudiantes requieren. Mantienes tu estatus entre tus estudiantes porque dominas los detalles de la disciplina que impartes. Además, retas a tus estudiantes mediante la competencia entre ellos y partes del supuesto de que tus pupilos necesitan ser preparados por alguien como tú.",
                "info_en"=>"You are a tutor who possesses the knowledge and experience that students require. You maintain your status among your students because you master the details of the discipline you teach. In addition, you challenge your students through competition between them and you assume that your pupils need to be prepared by someone like you.",
                "description_es"=>"Como experto, soy una fuente confiable de información y conocimiento en mi área.",
                "description_en"=>"As an expert, I am a reliable source of information and knowledge in my area.",
                "created_at"=>now(),
                "updated_at"=>now(),
                "image"=>"media/tutors/experto.png"
            ],
            [
                "style_es"=>"Autoridad Formal",
                "style_en"=>"Formal Authority",
                "type"=>"tutor",
                "info_es"=>"Te refieres al tutor que mantiene su estatus entre los estudiantes por su conocimiento y, desde luego, dentro de la escuela. Ofreces retroalimentación eficaz a los estudiantes basada en los objetivos del curso, tus expectativas y mediante los reglamentos institucionales. Cuidas mucho la normatividad correcta y aceptable dentro de la escuela y ofreces un conocimiento estructurado a tus pupilos.",
                "info_en"=>"You refer to the tutor who maintains his status among the students for his knowledge and, of course, within the school. You offer effective feedback to students based on course objectives, your expectations and through institutional regulations. You take great care of the correct and acceptable regulations within the school and offer structured knowledge to your pupils.",
                "description_es"=>"Como Autoridad Formal, valoro la estructura y sigo un plan detallado en mis tutorías.",
                "description_en"=>"As a Formal Authority, I value structure and follow a detailed plan in my tutorials.",
                "created_at"=>now(),
                "updated_at"=>now(),
                "image"=>"media/tutors/autoridad_formal.png",
            ],
            [
                "style_es"=>"Modelo Personal",
                "style_en"=>"Personal Model",
                "type"=>"tutor",
                "info_es"=>"Eres el tutor que cree ser el “ejemplo para tus estudiantes” y que por medio de tu propio desempeño les muestras a ellos las formas adecuadas para pensar y comportarse. Eres meticuloso y ordenado, y por medio de tu persona motivas a tus pupilos a emular tu propio comportamiento.",
                "info_en"=>"You are the tutor who believes to be the “example for your students” and that through your own performance you show them the appropriate ways to think and behave. You are meticulous and orderly, and through your person you motivate your pupils to emulate your own behavior.",
                "description_es"=>"Como tutor personal, me enfoco en el crecimiento individual de cada estudiante.",
                "description_en"=>"As a personal tutor, I focus on the individual growth of each student.",
                "created_at"=>now(),
                "updated_at"=>now(),
                "image"=>"media/tutors/modelo_personal.png",
            ],
            [
                "style_es"=>"Facilitador",
                "style_en"=>"Facilitator",
                "type"=>"tutor",
                "info_es"=>"Eres aquel tutor que guía a los estudiantes hacia el aprendizaje mediante cuestionamientos alternativos y toma de decisiones. Destacas el desarrollo de los estudiantes con miras a la independencia, la iniciativa y la responsabilidad. Gustas del trabajo por medio de proyectos o problemas que permiten a los estudiantes aprender por su cuenta y en los que tu función es solo de asesoría.",
                "info_en"=>"You are the tutor who guides students towards learning through alternative questioning and decision making. You highlight the development of students with a view to independence, initiative and responsibility. You like to work through projects or problems that allow students to learn on their own and in which your role is only advisory.",
                "description_es"=>"Como facilitador, guío a mis estudiantes hacia el descubrimiento y aprendizaje autónomo.",
                "description_en"=>"As a facilitator, I guide my students towards discovery and autonomous learning.",
                "created_at"=>now(),
                "updated_at"=>now(),
                "image"=>"media/tutors/facilitador.png"
            ],
            [
                "style_es"=>"Delegador",
                "style_en"=>"Delegator",
                "type"=>"tutor",
                "info_es"=>"Eres aquel tutor que le da libertad al alumno para ser lo más autónomo posible. Motivas a los estudiantes a trabajar en proyectos de manera independiente o en pequeños equipos. Funges solamente como consultor del proyecto.",
                "info_en"=>"You are the tutor who gives the student freedom to be as autonomous as possible. You motivate students to work on projects independently or in small teams. You only serve as a project consultant.",
                "description_es"=>"Como delegador, confío plenamente en la capacidad de mis estudiantes para dirigir su propio aprendizaje.",
                "description_en"=>"As a delegator, I fully trust my students' ability to direct their own learning.",
                "created_at"=>now(),
                "updated_at"=>now(),
                "image"=>"media/tutors/delegador.png"
            ]
        ]);
    }
}
