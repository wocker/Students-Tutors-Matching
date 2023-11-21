<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionTutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tutorQuestions = [
            [
                "type" => "tutor",
                "question_es" => "Hechos, conceptos y principios son las cosas más importantes que los estudiantes deben adquirir.",
                "question_en" => "Facts, concepts, and principles are the most important things students need to acquire.",
                "learning_style_id" => 7,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Establezco estándares altos para los estudiantes en esta clase.",
                "question_en" => "I set high standards for students in this class.",
                "learning_style_id" => 8,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Lo que digo y hago modela formas apropiadas para que los estudiantes piensen sobre los temas del contenido.",
                "question_en" => "What I say and do models appropriate ways for students to think about content topics.",
                "learning_style_id" => 9,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Mis objetivos y métodos de enseñanza abordan una variedad de estilos de aprendizaje de los estudiantes.",
                "question_en" => "My teaching goals and methods address a variety of students' learning styles.",
                "learning_style_id" => 10,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Los estudiantes suelen trabajar solos en los proyectos del curso con poca supervisión por mi parte.",
                "question_en" => "Students often work alone on course projects with little supervision from me.",
                "learning_style_id" => 11,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Compartir mi conocimiento y experiencia con los estudiantes es muy importante para mí.",
                "question_en" => "Sharing my knowledge and experience with students is very important to me.",
                "learning_style_id" => 7,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Doy retroalimentación negativa a los estudiantes cuando su desempeño no es satisfactorio.",
                "question_en" => "I give negative feedback to students when their performance is unsatisfactory.",
                "learning_style_id" => 8,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Las actividades en esta clase alientan a los estudiantes a desarrollar sus ideas sobre temas de contenido.",
                "question_en" => "Activities in this class encourage students to develop their ideas about content topics.",
                "learning_style_id" => 9,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Dedico tiempo a consultar con los estudiantes sobre cómo mejorar su trabajo en proyectos individuales y grupales.",
                "question_en" => "I spend time consulting with students on how to improve their work on individual and group projects.",
                "learning_style_id" => 10,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Las actividades en esta clase alientan a los estudiantes a desarrollar sus ideas sobre temas de contenido.",
                "question_en" => "Activities in this class encourage students to develop their ideas about content topics.",
                "learning_style_id" => 11,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Lo que tengo que decir sobre un tema es esencial para que los estudiantes adquieran una perspectiva más amplia sobre los problemas de esa área.",
                "question_en" => "What I have to say about a topic is essential for students to gain a broader perspective on issues in that area.",
                "learning_style_id" => 7,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Los estudiantes describirían mis estándares y expectativas como algo estrictos y rígidos.",
                "question_en" => "Students would describe my standards and expectations as strict and rigid.",
                "learning_style_id" => 8,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Normalmente muestro a los estudiantes cómo y qué hacer para dominar el contenido del curso.",
                "question_en" => "I usually show students how and what to do to master the course content.",
                "learning_style_id" => 9,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Las discusiones en grupos pequeños ayudan a los estudiantes a desarrollar su capacidad de pensar críticamente.",
                "question_en" => "Small group discussions help students develop their critical thinking skills.",
                "learning_style_id" => 10,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Los estudiantes diseñan una de las experiencias de aprendizaje más autodirigidas.",
                "question_en" => "Students design one of the most self-directed learning experiences.",
                "learning_style_id" => 11,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Quiero que los estudiantes dejen este curso bien preparado para seguir trabajando en esta área.",
                "question_en" => "I want students to leave this course well-prepared to continue working in this area.",
                "learning_style_id" => 7,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Soy responsable de definir lo que los estudiantes deben aprender y cómo deben aprenderlo.",
                "question_en" => "I am responsible for defining what students need to learn and how they should learn it.",
                "learning_style_id" => 8,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Los ejemplos de mis experiencias personales a menudo ilustran puntos sobre el material.",
                "question_en" => "Examples from my personal experiences often illustrate points about the material.",
                "learning_style_id" => 9,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Guío el trabajo de los estudiantes en los proyectos del curso haciéndoles preguntas, explorando opciones y sugiriendo formas alternativas.",
                "question_en" => "I guide students' work on course projects by asking questions, exploring options, and suggesting alternative ways.",
                "learning_style_id" => 10,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Desarrollar la capacidad de los estudiantes para pensar y trabajar de forma independiente es un objetivo importante.",
                "question_en" => "Developing students' ability to think and work independently is an important goal.",
                "learning_style_id" => 11,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Dar conferencias es una parte importante de cómo enseño cada sesión de clase.",
                "question_en" => "Lecturing is an important part of how I teach each class session.",
                "learning_style_id" => 7,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Proporciono pautas obvias sobre cómo quiero que se completen las tareas en este curso.",
                "question_en" => "I provide clear guidelines on how I want tasks to be completed in this course.",
                "learning_style_id" => 8,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "A menudo muestro a los estudiantes cómo pueden usar varios principios y conceptos.",
                "question_en" => "I often show students how they can apply various principles and concepts.",
                "learning_style_id" => 9,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Las actividades del curso alientan a los estudiantes a tomar la iniciativa y la responsabilidad de su aprendizaje.",
                "question_en" => "Course activities encourage students to take initiative and responsibility for their learning.",
                "learning_style_id" => 10,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Los estudiantes asumen la responsabilidad de impartir parte de las sesiones de clase.",
                "question_en" => "Students take responsibility for leading part of the class sessions.",
                "learning_style_id" => 11,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Mi experiencia generalmente se usa para resolver desacuerdos sobre problemas de contenido.",
                "question_en" => "My experience is often used to resolve disagreements about content issues.",
                "learning_style_id" => 7,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Este curso tiene metas y objetivos concretos que quiero lograr.",
                "question_en" => "This course has specific goals and objectives I want to achieve.",
                "learning_style_id" => 8,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Los estudiantes reciben frecuentes comentarios verbales y escritos sobre su desempeño.",
                "question_en" => "Students receive frequent verbal and written feedback on their performance.",
                "learning_style_id" => 9,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Solicito el consejo de los estudiantes sobre cómo y qué enseñar en este curso.",
                "question_en" => "I seek advice from students on how and what to teach in this course.",
                "learning_style_id" => 10,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Los estudiantes establecen su propio ritmo para completar proyectos independientes y grupales.",
                "question_en" => "Students set their own pace to complete independent and group projects.",
                "learning_style_id" => 11,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Los estudiantes pueden describirme como un 'almacén de conocimiento' que proporciona los hechos, principios y conceptos que necesitan.",
                "question_en" => "Students can describe me as a 'storehouse of knowledge' providing the facts, principles, and concepts they need.",
                "learning_style_id" => 7,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "El plan de estudios define claramente mis expectativas sobre lo que quiero que hagan los estudiantes en esta clase.",
                "question_en" => "The curriculum clearly defines my expectations for what I want students to do in this class.",
                "learning_style_id" => 8,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Eventualmente, muchos estudiantes comenzaron a pensar como yo sobre el contenido del curso.",
                "question_en" => "Eventually, many students started thinking like me about the course content.",
                "learning_style_id" => 9,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Los estudiantes pueden elegir entre actividades para completar los requisitos del curso.",
                "question_en" => "Students can choose among activities to complete course requirements.",
                "learning_style_id" => 10,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Mi enfoque de la enseñanza es similar al de un gerente de un grupo de trabajo que delega tareas y responsabilidades a sus subordinados.",
                "question_en" => "My teaching approach is similar to that of a manager of a workgroup who delegates tasks and responsibilities to subordinates.",
                "learning_style_id" => 11,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Este curso tiene más material del que tengo tiempo disponible para cubrir.",
                "question_en" => "This course has more material than I have time available to cover.",
                "learning_style_id" => 7,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Mis estándares y expectativas ayudan a los estudiantes a desarrollar la disciplina que necesitan aprender.",
                "question_en" => "My standards and expectations help students develop the discipline they need to learn.",
                "learning_style_id" => 8,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Los estudiantes pueden describirme como un 'entrenador' que trabaja en estrecha colaboración con alguien para corregir problemas en su forma de pensar y comportarse.",
                "question_en" => "Students can describe me as a 'coach' who works closely with someone to correct issues in their way of thinking and behaving.",
                "learning_style_id" => 9,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Doy a los estudiantes mucho apoyo personal y aliento para que les vaya bien en este curso.",
                "question_en" => "I give students a lot of personal support and encouragement to do well in this course.",
                "learning_style_id" => 10,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "tutor",
                "question_es" => "Asumo el papel de una persona de recursos disponible para los estudiantes cuando necesitan ayuda.",
                "question_en" => "I assume the role of a resource person available to students when they need help.",
                "learning_style_id" => 11,
                "created_at" => now(),
                "updated_at" => now()
            ],
        ];


        DB::table('questions')->insert($tutorQuestions);
    }
}
