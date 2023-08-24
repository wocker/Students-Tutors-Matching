<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                "type" => "student",
                "question_es" => "Tengo confianza en mi habilidad de aprender material importante del curso.",
                "question_en" => "I am confident in my ability to learn important material from the course.",
                "learning_style_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "A menudo me encuentro soñando despierto (a) durante clases.",
                "question_en" => "I often find myself daydreaming during classes.",
                "learning_style_id" => 2,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Me gusta mucho trabajar con otros estudiantes en clases.",
                "question_en" => "I really enjoy working with other students in class.",
                "learning_style_id" => 3,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "El material del curso tiene información válida y veraz.",
                "question_en" => "The course material has valid and accurate information.",
                "learning_style_id" => 4,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Me parece necesario competir con otros estudiantes por la atención del profesor y resolver mis dudas antes que los demás.",
                "question_en" => "I feel the need to compete with other students for the teacher's attention and to get my questions answered before others.",
                "learning_style_id" => 5,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Usualmente estoy dispuesto a aprender sobre el contenido dado en clase.",
                "question_en" => "I am usually willing to learn about the content taught in class.",
                "learning_style_id" => 6,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Mis pensamientos sobre el contenido usualmente son tan buenos como los que aparecen en el material.",
                "question_en" => "My thoughts about the content are usually as good as those presented in the material.",
                "learning_style_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Las actividades en el salón de clases me parecen aburridas.",
                "question_en" => "Classroom activities seem boring to me.",
                "learning_style_id" => 2,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Disfruto discutir ideas sobre el material de la clase con otros estudiantes.",
                "question_en" => "I enjoy discussing ideas about the class material with other students.",
                "learning_style_id" => 3,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Considero que los profesores saben exactamente lo que es importante aprender en un curso.",
                "question_en" => "I believe that teachers know exactly what is important to learn in a course.",
                "learning_style_id" => 4,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Siento que es necesario competir con otros estudiantes por la mejor nota.",
                "question_en" => "I feel it is necessary to compete with other students for the best grade.",
                "learning_style_id" => 5,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Siento que vale la pena atender las sesiones de clases presenciales.",
                "question_en" => "I feel that attending in-person class sessions is worth it.",
                "learning_style_id" => 6,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Yo estudio lo que es importante para mí y no siempre lo que el profesor diga que es importante.",
                "question_en" => "I study what is important to me and not always what the teacher says is important.",
                "learning_style_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Muy raras veces me emociona el contenido explicado en clase.",
                "question_en" => "Very rarely am I excited about the content explained in class.",
                "learning_style_id" => 2,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Disfruto escuchar lo que otros estudiantes piensan sobre los temas discutidos en el salón de clases.",
                "question_en" => "I enjoy hearing what other students think about the topics discussed in the classroom.",
                "learning_style_id" => 3,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Los profesores deberían decir claramente lo que esperan de los estudiantes.",
                "question_en" => "Teachers should clearly state what they expect from students.",
                "learning_style_id" => 4,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Cuando hay discusiones en clase, debo competir con los otros estudiantes para que mis ideas sean escuchadas.",
                "question_en" => "When there are discussions in class, I must compete with other students to have my ideas heard.",
                "learning_style_id" => 5,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Aprendo más del curso en el aula de clases que en casa.",
                "question_en" => "I learn more from the course in the classroom than at home.",
                "learning_style_id" => 6,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "La mayoría de los temas explicados los aprendí por mi cuenta.",
                "question_en" => "I learned most of the topics explained on my own.",
                "learning_style_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Generalmente siento que tengo que asistir a clases, aunque no quiera.",
                "question_en" => "I generally feel like I have to attend classes, even if I don't want to.",
                "learning_style_id" => 2,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Pienso que los estudiantes pueden aprender más discutiendo sus ideas entre ellos.",
                "question_en" => "I think students can learn more by discussing their ideas with each other.",
                "learning_style_id" => 3,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Intento hacer mis tareas siguiendo al pie de la letra las instrucciones del profesor.",
                "question_en" => "I try to do my assignments by following the teacher's instructions to the letter.",
                "learning_style_id" => 4,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Los estudiantes deben volverse competitivos para tener un buen rendimiento en la escuela.",
                "question_en" => "Students must become competitive to perform well in school.",
                "learning_style_id" => 5,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Los estudiantes tenemos la responsabilidad de sacarle el mayor provecho a las herramientas y recursos educativos que se nos dan en clases.",
                "question_en" => "We students have the responsibility to make the most of the educational tools and resources given to us in class.",
                "learning_style_id" => 6,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Puedo identificar por mí mismo, los temas importantes del material de clases.",
                "question_en" => "I can identify the important topics of class material on my own.",
                "learning_style_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Prestar atención durante una sesión de clases es difícil para mí.",
                "question_en" => "Paying attention during a class session is difficult for me.",
                "learning_style_id" => 2,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Me gusta estudiar para exámenes con otros estudiantes.",
                "question_en" => "I enjoy studying for exams with other students.",
                "learning_style_id" => 3,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Profesores que dejan que los estudiantes hagan lo que quieran, no están realizando su trabajo.",
                "question_en" => "Teachers who let students do whatever they want are not doing their job.",
                "learning_style_id" => 4,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Me gusta obtener las respuestas de problemas o preguntas antes de que alguien más pueda.",
                "question_en" => "I like to get answers to problems or questions before anyone else can.",
                "learning_style_id" => 5,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Las actividades del salón son generalmente interesantes.",
                "question_en" => "Classroom activities are generally interesting.",
                "learning_style_id" => 6,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Me gusta desarrollar mis propias ideas sobre los temas dados en clases.",
                "question_en" => "I like to develop my own ideas about the topics covered in class.",
                "learning_style_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Me he rendido de intentar aprender durante las clases presenciales.",
                "question_en" => "I have given up trying to learn during in-person classes.",
                "learning_style_id" => 2,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Las ideas de otros estudiantes me ayudan a entender el material del curso.",
                "question_en" => "The ideas of other students help me understand the course material.",
                "learning_style_id" => 3,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Los estudiantes deben ser supervisados por profesores en todos los proyectos del curso.",
                "question_en" => "Students should be supervised by teachers in all course projects.",
                "learning_style_id" => 4,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Para estar un paso más adelante, es necesario pasar por encima de los demás estudiantes.",
                "question_en" => "To get ahead, it is necessary to step over other students.",
                "learning_style_id" => 5,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Yo trato de participar lo más posible en todos los aspectos del curso.",
                "question_en" => "I try to participate as much as possible in all aspects of the course.",
                "learning_style_id" => 6,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Tengo mis propias ideas de cómo las clases deberían ser presentadas.",
                "question_en" => "I have my own ideas about how classes should be presented.",
                "learning_style_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "En la mayoría de mis materias estudio solo lo suficiente para pasar.",
                "question_en" => "In most of my subjects, I study just enough to pass.",
                "learning_style_id" => 2,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Una parte importante de tomar materias es aprender a convivir con otras personas.",
                "question_en" => "An important part of taking courses is learning to get along with other people.",
                "learning_style_id" => 3,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Mis apuntes contienen casi todo lo que el profesor ha dicho en clases.",
                "question_en" => "My notes contain almost everything the teacher has said in class.",
                "learning_style_id" => 4,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Los estudiantes pierden la oportunidad de una nota cuando comparten sus apuntes e ideas.",
                "question_en" => "Students miss out on a grade when they share their notes and ideas.",
                "learning_style_id" => 5,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Completo las asignaciones de la materia sin importar si me parecen interesantes o no.",
                "question_en" => "I complete assignments for the course regardless of whether they seem interesting to me or not.",
                "learning_style_id" => 6,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Si me gusta un tema, usualmente investigo por mi cuenta.",
                "question_en" => "If I like a topic, I usually research on my own.",
                "learning_style_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Normalmente estudio intensamente antes de los exámenes.",
                "question_en" => "I usually study intensively before exams.",
                "learning_style_id" => 2,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Aprender debería ser un esfuerzo cooperativo entre los estudiantes y la escuela.",
                "question_en" => "Learning should be a cooperative effort between students and the school.",
                "learning_style_id" => 3,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Prefiero sesiones de clases que estén altamente organizadas.",
                "question_en" => "I prefer class sessions that are highly organized.",
                "learning_style_id" => 4,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Para sobresalir en clases, trato de hacer las asignaciones mejor que los demás estudiantes.",
                "question_en" => "To excel in classes, I try to do assignments better than other students.",
                "learning_style_id" => 5,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Yo completo las asignaciones apenas son entregadas.",
                "question_en" => "I complete assignments as soon as they are handed out.",
                "learning_style_id" => 6,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Yo prefiero trabajar en proyectos relacionados con las clases (Estudiar para exámenes, hacer tareas, étc.) por mi cuenta.",
                "question_en" => "I prefer to work on class-related projects (studying for exams, doing assignments, etc.) on my own.",
                "learning_style_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Me gustaría que los profesores me ignoraran en clases.",
                "question_en" => "I would like teachers to ignore me in class.",
                "learning_style_id" => 2,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Dejo que los otros estudiantes tomen prestados mis apuntes cuando los piden.",
                "question_en" => "I let other students borrow my notes when they ask for them.",
                "learning_style_id" => 3,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Los profesores deberían decirles a los estudiantes exactamente qué material se va a cubrir en un examen.",
                "question_en" => "Teachers should tell students exactly what material will be covered on an exam.",
                "learning_style_id" => 4,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Me gusta saber el rendimiento de los otros estudiantes en las asignaciones y exámenes.",
                "question_en" => "I like to know the performance of other students on assignments and exams.",
                "learning_style_id" => 5,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Yo completo las asignaciones que son para nota, tanto como las que son opcionales.",
                "question_en" => "I complete assignments that are for credit, as well as optional ones.",
                "learning_style_id" => 6,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Cuando no entiendo algo, trato de averiguar por mi cuenta antes de buscar ayuda.",
                "question_en" => "When I don't understand something, I try to figure it out on my own before seeking help.",
                "learning_style_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Durante clases, tiendo a hablar o bromear con las personas que están cerca de mí.",
                "question_en" => "During classes, I tend to talk or joke with people who are near me.",
                "learning_style_id" => 2,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Participar en grupos pequeños de clases es algo que disfruto.",
                "question_en" => "Participating in small class groups is something I enjoy.",
                "learning_style_id" => 3,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Yo pienso que las anotaciones e indicaciones del profesor en el tablero son de mucha ayuda.",
                "question_en" => "I think the teacher's notes and indications on the board are very helpful.",
                "learning_style_id" => 4,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "Le pregunto a otros estudiantes en clases qué notas recibieron en los exámenes y asignaciones.",
                "question_en" => "I ask other students in class what grades they got on exams and assignments.",
                "learning_style_id" => 5,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "type" => "student",
                "question_es" => "En mis clases usualmente me siento en los puestos que están más adelante en el salón.",
                "question_en" => "In my classes, I usually sit in the front seats of the classroom.",
                "learning_style_id" => 6,
                "created_at" => now(),
                "updated_at" => now()
            ],
        ];

        DB::table('questions')->insert($questions);


    }
}
