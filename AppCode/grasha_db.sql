-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 25, 2023 at 01:43 AM
-- Server version: 8.0.31
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grasha_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `learning_styles`
--

DROP TABLE IF EXISTS `learning_styles`;
CREATE TABLE IF NOT EXISTS `learning_styles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `style_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_es` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('student','tutor') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'student',
  `info_en` text COLLATE utf8mb4_unicode_ci,
  `info_es` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_es` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `learning_styles`
--

INSERT INTO `learning_styles` (`id`, `style_en`, `style_es`, `type`, `info_en`, `info_es`, `image`, `description_en`, `description_es`, `created_at`, `updated_at`) VALUES
(1, 'Independent', 'Independiente', 'student', 'You like to think for yourself. You are autonomous and confident in your learning. You decide what is important and what is not, and you like to work alone. You avoid teamwork.', 'Te gusta pensar por ti mismo. Eres autónomo y confiado en tu aprendizaje. Decides lo que es importante y lo que no lo es, y te gusta trabajar de manera solitaria. Evitas el trabajo en equipo.', 'media/students/Independiente.png', 'I prefer to work alone and set my own pace of learning.', 'Prefiero trabajar solo y establecer mi propio ritmo de aprendizaje.', '2023-08-17 04:22:59', '2023-08-17 04:22:59'),
(2, 'Evitativo', 'Evitativo', 'student', 'You do not show enthusiasm in class. You do not participate and you keep yourself isolated. You are apathetic and uninterested in school activities. You don\'t like to spend a lot of time in the classroom.', 'No manifiestas entusiasmo en clase. No participas y te mantienes aislado. Eres apático y desinteresado en las actividades escolares. No te gusta estar mucho tiempo en el aula.', 'media/students/evitativo.png', 'I often avoid actively participating in the learning process.', 'A menudo evito participar activamente en el proceso de aprendizaje.', '2023-08-17 04:22:59', '2023-08-17 04:22:59'),
(3, 'Collaborative', 'Colaborativo', 'student', 'You like to learn by sharing ideas and talents. You like to work with your classmates and with your teachers.', 'Te gusta aprender compartiendo ideas y talentos. Gustas de trabajar con tus compañeros y con tus profesores.', 'media/students/colaborativo.png', 'I learn best by working with others and value teamwork and interaction.', 'Aprendo mejor trabajando con otros y valoro el trabajo en equipo y la interacción.', '2023-08-17 04:22:59', '2023-08-17 04:22:59'),
(4, 'Dependiente', 'Dependiente', 'student', 'You show little intellectual curiosity and learn only what you have to learn. You visualize teachers and your classmates as guiding or authoritative figures to carry out your activities.', 'Manifiestas poca curiosidad intelectual y aprendes solo lo que tienes que aprender. Visualizas a los profesores y a tus compañeros como figuras de guía o autoridad para realizar tus actividades.', 'media/students/dependiente.png', 'I look for a clear structure and specific guidelines.', 'Busco una estructura clara y directrices específicas.', '2023-08-17 04:22:59', '2023-08-17 04:22:59'),
(5, 'Competitive', 'Competitivo', 'student', 'You study to demonstrate your supremacy in terms of performance or grade. You like to be the center of attention and receive recognition for your achievements.', 'Estudias para demostrar tu supremacía en términos de aprovechamiento o calificación. Te gusta ser el centro de atención y recibir reconocimiento de tus logros.', 'media/students/competitivo.png', 'I want to be the best and learn to outperform others.', 'Quiero ser el mejor y aprender para superar a los demás.', '2023-08-17 04:22:59', '2023-08-17 04:22:59'),
(6, 'Participative', 'Participativo', 'student', 'You are a good element in class, you enjoy the session and try to be aware most of the time. You are very willing to do school work.', 'Eres un buen elemento en clase, disfrutas la sesión y procuras estar al pendiente la mayor parte del tiempo. Tienes mucha disposición para el trabajo escolar.', 'media/students/participativo.png', 'I seek to learn through direct and practical experiences.', 'Busco aprender a través de experiencias directas y prácticas.', '2023-08-17 04:22:59', '2023-08-17 04:22:59'),
(7, 'Expert', 'Experto', 'tutor', 'You are a tutor who possesses the knowledge and experience that students require. You maintain your status among your students because you master the details of the discipline you teach. In addition, you challenge your students through competition between them and you assume that your pupils need to be prepared by someone like you.', 'Eres tutor que posee el conocimiento y la experiencia que los estudiantes requieren. Mantienes tu estatus entre tus estudiantes porque dominas los detalles de la disciplina que impartes. Además, retas a tus estudiantes mediante la competencia entre ellos y partes del supuesto de que tus pupilos necesitan ser preparados por alguien como tú.', 'media/tutors/experto.png', 'As an expert, I am a reliable source of information and knowledge in my area.', 'Como experto, soy una fuente confiable de información y conocimiento en mi área.', '2023-08-17 04:22:59', '2023-08-17 04:22:59'),
(8, 'Formal Authority', 'Autoridad Formal', 'tutor', 'You refer to the tutor who maintains his status among the students for his knowledge and, of course, within the school. You offer effective feedback to students based on course objectives, your expectations and through institutional regulations. You take great care of the correct and acceptable regulations within the school and offer structured knowledge to your pupils.', 'Te refieres al tutor que mantiene su estatus entre los estudiantes por su conocimiento y, desde luego, dentro de la escuela. Ofreces retroalimentación eficaz a los estudiantes basada en los objetivos del curso, tus expectativas y mediante los reglamentos institucionales. Cuidas mucho la normatividad correcta y aceptable dentro de la escuela y ofreces un conocimiento estructurado a tus pupilos.', 'media/tutors/autoridad_formal.png', 'As a Formal Authority, I value structure and follow a detailed plan in my tutorials.', 'Como Autoridad Formal, valoro la estructura y sigo un plan detallado en mis tutorías.', '2023-08-17 04:22:59', '2023-08-17 04:22:59'),
(9, 'Personal Model', 'Modelo Personal', 'tutor', 'You are the tutor who believes to be the “example for your students” and that through your own performance you show them the appropriate ways to think and behave. You are meticulous and orderly, and through your person you motivate your pupils to emulate your own behavior.', 'Eres el tutor que cree ser el “ejemplo para tus estudiantes” y que por medio de tu propio desempeño les muestras a ellos las formas adecuadas para pensar y comportarse. Eres meticuloso y ordenado, y por medio de tu persona motivas a tus pupilos a emular tu propio comportamiento.', 'media/tutors/modelo_personal.png', 'As a personal tutor, I focus on the individual growth of each student.', 'Como tutor personal, me enfoco en el crecimiento individual de cada estudiante.', '2023-08-17 04:22:59', '2023-08-17 04:22:59'),
(10, 'Facilitator', 'Facilitador', 'tutor', 'You are the tutor who guides students towards learning through alternative questioning and decision making. You highlight the development of students with a view to independence, initiative and responsibility. You like to work through projects or problems that allow students to learn on their own and in which your role is only advisory.', 'Eres aquel tutor que guía a los estudiantes hacia el aprendizaje mediante cuestionamientos alternativos y toma de decisiones. Destacas el desarrollo de los estudiantes con miras a la independencia, la iniciativa y la responsabilidad. Gustas del trabajo por medio de proyectos o problemas que permiten a los estudiantes aprender por su cuenta y en los que tu función es solo de asesoría.', 'media/tutors/facilitador.png', 'As a facilitator, I guide my students towards discovery and autonomous learning.', 'Como facilitador, guío a mis estudiantes hacia el descubrimiento y aprendizaje autónomo.', '2023-08-17 04:22:59', '2023-08-17 04:22:59'),
(11, 'Delegator', 'Delegador', 'tutor', 'You are the tutor who gives the student freedom to be as autonomous as possible. You motivate students to work on projects independently or in small teams. You only serve as a project consultant.', 'Eres aquel tutor que le da libertad al alumno para ser lo más autónomo posible. Motivas a los estudiantes a trabajar en proyectos de manera independiente o en pequeños equipos. Funges solamente como consultor del proyecto.', 'media/tutors/delegador.png', 'As a delegator, I fully trust my students\' ability to direct their own learning.', 'Como delegador, confío plenamente en la capacidad de mis estudiantes para dirigir su propio aprendizaje.', '2023-08-17 04:22:59', '2023-08-17 04:22:59');

-- --------------------------------------------------------

--
-- Table structure for table `learning_style_characteristics`
--

DROP TABLE IF EXISTS `learning_style_characteristics`;
CREATE TABLE IF NOT EXISTS `learning_style_characteristics` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `learning_style_id` bigint UNSIGNED NOT NULL,
  `characteristic_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `characteristic_es` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `learning_style_characteristics_learning_style_id_foreign` (`learning_style_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `learning_style_characteristics`
--

INSERT INTO `learning_style_characteristics` (`id`, `learning_style_id`, `characteristic_en`, `characteristic_es`, `created_at`, `updated_at`) VALUES
(1, 1, 'I value autonomy in learning.', 'Valoro la autonomía en el aprendizaje.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(2, 1, 'I like to discover for myself.', 'Me gusta descubrir por mí mismo.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(3, 1, 'I tend to be introspective.', 'Suelo ser introspectivo.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(4, 2, 'I can feel overwhelmed by challenges.', 'Puedo sentirme abrumado por los desafíos.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(5, 2, 'I often postpone tasks.', 'A menudo postergo las tareas.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(6, 2, 'I can be indifferent or disinterested.', 'Puedo ser indiferente o desinteresado.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(7, 3, 'I learn through interaction.', 'Aprendo a través de la interacción.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(8, 3, 'I value the opinions of others.', 'Valoro las opiniones de los demás.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(9, 3, 'I am a good listener.', 'Soy un buen oyente.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(10, 4, 'I need clear instructions.', 'Necesito instrucciones claras.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(11, 4, 'I seek the approval of the tutors.', 'Busco la aprobación de los tutores.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(12, 4, 'I can be passive in my learning.', 'Puedo ser pasivo en mi aprendizaje.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(13, 5, 'I am achievement oriented.', 'Estoy orientado a logros.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(14, 5, 'I seek recognition.', 'Busco reconocimiento.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(15, 5, 'I can be argumentative.', 'Puedo ser argumentativo.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(16, 6, 'I learn by doing.', 'Aprendo haciendo.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(17, 6, 'I seek to apply what I have learned.', 'Busco aplicar lo aprendido.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(18, 6, 'I am active and dynamic.', 'Soy activo y dinámico.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(19, 7, 'I have answers to my students\' questions and doubts.', 'Tengo respuestas a las preguntas y dudas de mis estudiantes.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(20, 7, 'I strive to convey my knowledge in a clear and concise manner.', 'Me esfuerzo por transmitir mi conocimiento de manera clara y concisa.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(21, 8, 'I always follow a pre-established agenda or plan.', 'Siempre sigo un temario o plan preestablecido.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(22, 8, 'I make sure that each session is well organized and structured.', 'Me aseguro de que cada sesión esté bien organizada y estructurada.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(23, 9, 'I value and consider the experiences and feelings of my students.', 'Valoro y considero las experiencias y sentimientos de mis estudiantes.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(24, 9, 'I seek that each one develops their personal and academic skills.', 'Busco que cada uno desarrolle sus habilidades personales y académicas.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(25, 10, 'I help students find their own answers.', 'Ayudo a los estudiantes a encontrar sus propias respuestas.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(26, 10, 'I am there to guide them, not to give them all the answers.', 'Estoy allí para guiarlos, no para darles todas las respuestas.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(27, 11, 'I delegate responsibilities and tasks to students.', 'Delego responsabilidades y tareas a los estudiantes.', '2023-08-20 12:56:17', '2023-08-20 12:56:17'),
(28, 11, 'I believe in the autonomy and ability of each one.', 'Creo en la autonomía y capacidad de cada uno.', '2023-08-20 12:56:17', '2023-08-20 12:56:17');

-- --------------------------------------------------------

--
-- Table structure for table `learning_style_descriptions`
--

DROP TABLE IF EXISTS `learning_style_descriptions`;
CREATE TABLE IF NOT EXISTS `learning_style_descriptions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `learning_style_id` bigint UNSIGNED NOT NULL,
  `description_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_es` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `learning_style_descriptions_learning_style_id_foreign` (`learning_style_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `learning_style_recommended_techniques`
--

DROP TABLE IF EXISTS `learning_style_recommended_techniques`;
CREATE TABLE IF NOT EXISTS `learning_style_recommended_techniques` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `learning_style_id` bigint UNSIGNED NOT NULL,
  `technique_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `technique_es` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `learning_style_recommended_techniques_learning_style_id_foreign` (`learning_style_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `learning_style_recommended_techniques`
--

INSERT INTO `learning_style_recommended_techniques` (`id`, `learning_style_id`, `technique_en`, `technique_es`, `created_at`, `updated_at`) VALUES
(1, 1, 'I value autonomy in learning', 'Valoro la autonomía en el aprendizaje', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(2, 1, 'I like to discover for myself.', 'Me gusta descubrir por mí mismo.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(3, 1, 'I tend to be introspective.', 'Suelo ser introspectivo.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(4, 2, 'I can feel overwhelmed by challenges.', 'Puedo sentirme abrumado por los desafíos.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(5, 2, 'I often postpone tasks.', 'A menudo postergo las tareas.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(6, 2, 'I can be indifferent or disinterested.', 'Puedo ser indiferente o desinteresado.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(7, 3, 'I form study groups.', 'Formo grupos de estudio.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(8, 3, 'I hold discussions and debates on topics.', 'Realizo discusiones y debates sobre temas.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(9, 3, 'I share and compare notes with classmates.', 'Comparto y comparo notas con compañeros.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(10, 4, 'I need clear instructions.', 'Necesito instrucciones claras.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(11, 4, 'I seek the approval of the tutors.', 'Busco la aprobación de los tutores.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(12, 4, 'I can be passive in my learning.', 'Puedo ser pasivo en mi aprendizaje.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(13, 5, 'I set clear goals for each study session.', 'Establezco metas claras para cada sesión de estudio.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(14, 5, 'I use memory cards or flashcards to review.', 'Uso tarjetas de memoria o flashcards para repasar.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(15, 5, 'I do exam drills to assess my progress.', 'Realizo simulacros de exámenes para evaluar mi progreso.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(16, 6, 'I do practical exercises or simulations.', 'Realizo ejercicios prácticos o simulaciones.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(17, 6, 'I relate the content to real situations.', 'Relaciono el contenido con situaciones reales.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(18, 6, 'I use experiential learning techniques, such as project-based learning.', 'Uso técnicas de aprendizaje experiencial, como el aprendizaje basado en proyectos.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(19, 7, 'I organize sessions where students can ask me questions directly.', 'Organizo sesiones donde los estudiantes pueden hacerme preguntas directamente.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(20, 7, 'I give mini-lectures to address specific topics.', 'Realizo mini-conferencias para abordar temas específicos.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(21, 7, 'I provide additional readings and resources for students to delve into.', 'Proporciono lecturas y recursos adicionales para que los estudiantes profundicen.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(22, 8, 'I use outlines or study guides to keep everyone on the same page.', 'Uso esquemas o guías de estudio para mantener a todos en la misma página.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(23, 8, 'I do group tests or quizzes to assess progress.', 'Realizo pruebas o cuestionarios grupales para evaluar el progreso.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(24, 8, 'I keep a structured track of the topics we address.', 'Mantengo un seguimiento estructurado de los temas que abordamos.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(25, 9, 'I encourage open discussions where each student can share.', 'Fomento discusiones abiertas donde cada estudiante pueda compartir.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(26, 9, 'I propose self-assessment and reflection activities.', 'Propongo actividades de autoevaluación y reflexión.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(27, 9, 'I do group dynamics for everyone to share and learn together.', 'Realizo dinámicas de grupo para que todos compartan y aprendan juntos.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(28, 10, 'I propose case studies for them to discuss and analyze in groups.', 'Propongo estudios de caso para que los discutan y analicen en grupo.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(29, 10, 'I encourage collaborative research projects.', 'Fomento proyectos de investigación colaborativos.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(30, 10, 'I use problem-based learning for them to seek solutions together.', 'Utilizo el aprendizaje basado en problemas para que busquen soluciones juntos.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(31, 11, 'I assign specific roles to each group member.', 'Asigno roles específicos a cada miembro del grupo.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(32, 11, 'I propose projects in which they decide the focus and results.', 'Propongo proyectos en los que ellos decidan el enfoque y resultados.', '2023-08-19 15:26:43', '2023-08-19 15:26:43'),
(33, 11, 'I encourage group presentations where each one contributes from their perspective.', 'Fomento presentaciones grupales donde cada uno aporte desde su perspectiva.', '2023-08-19 15:26:43', '2023-08-19 15:26:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_07_154627_create_permission_tables', 1),
(6, '2023_08_07_165235_create_learning_styles_table', 2),
(11, '2023_08_07_181802_create_questions_table', 3),
(12, '2023_08_07_181900_create_possible_answers_table', 4),
(13, '2023_08_07_182032_create_user_responses_table', 5),
(16, '2023_08_07_184109_add_info_in_learning_styles_table', 6),
(18, '2023_08_07_190446_changes_in_question_table', 7),
(19, '2023_08_09_173836_add_image_in_learning_styles_table', 8),
(20, '2023_08_10_194152_add_is_survery_completed_in_users_table', 9),
(21, '2023_08_11_205419_add_fields_in_users_table', 10),
(23, '2023_08_16_185336_add_position_in_users_table', 11),
(25, '2023_08_17_075656_add_news_fields_in_learning_styles_tab', 12),
(26, '2023_08_17_080505_create_learning_style_descriptions_table', 12),
(27, '2023_08_17_080601_create_learning_style_characteristics_table', 13),
(28, '2023_08_17_081200_create_learning_style_recommended_techniques_table', 14),
(29, '2023_08_20_170324_add_soft_delete_in_user_responses_table', 15),
(30, '2023_08_20_193006_add_soft_delete_in_users_table', 16),
(31, '2023_08_23_185833_add_is_password_changed_in_users_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 5),
(3, 'App\\Models\\User', 6),
(3, 'App\\Models\\User', 7),
(3, 'App\\Models\\User', 8),
(3, 'App\\Models\\User', 9),
(3, 'App\\Models\\User', 10),
(3, 'App\\Models\\User', 11),
(3, 'App\\Models\\User', 12),
(3, 'App\\Models\\User', 13),
(3, 'App\\Models\\User', 14),
(3, 'App\\Models\\User', 15),
(3, 'App\\Models\\User', 16),
(3, 'App\\Models\\User', 17),
(3, 'App\\Models\\User', 18),
(3, 'App\\Models\\User', 19),
(3, 'App\\Models\\User', 20),
(3, 'App\\Models\\User', 21),
(3, 'App\\Models\\User', 22),
(3, 'App\\Models\\User', 23),
(3, 'App\\Models\\User', 24),
(3, 'App\\Models\\User', 25),
(3, 'App\\Models\\User', 26),
(3, 'App\\Models\\User', 27),
(3, 'App\\Models\\User', 28),
(3, 'App\\Models\\User', 29),
(3, 'App\\Models\\User', 30),
(4, 'App\\Models\\User', 31),
(3, 'App\\Models\\User', 32),
(3, 'App\\Models\\User', 33),
(3, 'App\\Models\\User', 34),
(3, 'App\\Models\\User', 35),
(3, 'App\\Models\\User', 36),
(3, 'App\\Models\\User', 37),
(3, 'App\\Models\\User', 38),
(3, 'App\\Models\\User', 39),
(3, 'App\\Models\\User', 40),
(3, 'App\\Models\\User', 41),
(4, 'App\\Models\\User', 42),
(3, 'App\\Models\\User', 43),
(3, 'App\\Models\\User', 44),
(3, 'App\\Models\\User', 45),
(3, 'App\\Models\\User', 46),
(3, 'App\\Models\\User', 47),
(3, 'App\\Models\\User', 48),
(3, 'App\\Models\\User', 49),
(3, 'App\\Models\\User', 50),
(3, 'App\\Models\\User', 51),
(3, 'App\\Models\\User', 52),
(3, 'App\\Models\\User', 53),
(3, 'App\\Models\\User', 54),
(3, 'App\\Models\\User', 55),
(3, 'App\\Models\\User', 56),
(4, 'App\\Models\\User', 57),
(3, 'App\\Models\\User', 58),
(3, 'App\\Models\\User', 59),
(3, 'App\\Models\\User', 60),
(3, 'App\\Models\\User', 61),
(3, 'App\\Models\\User', 62),
(3, 'App\\Models\\User', 63),
(4, 'App\\Models\\User', 64),
(4, 'App\\Models\\User', 65),
(4, 'App\\Models\\User', 66),
(3, 'App\\Models\\User', 67),
(3, 'App\\Models\\User', 68),
(3, 'App\\Models\\User', 69),
(3, 'App\\Models\\User', 70),
(3, 'App\\Models\\User', 71),
(3, 'App\\Models\\User', 72),
(3, 'App\\Models\\User', 73),
(3, 'App\\Models\\User', 74),
(4, 'App\\Models\\User', 75),
(3, 'App\\Models\\User', 76),
(3, 'App\\Models\\User', 77),
(3, 'App\\Models\\User', 78),
(3, 'App\\Models\\User', 79),
(3, 'App\\Models\\User', 80),
(3, 'App\\Models\\User', 81),
(3, 'App\\Models\\User', 82),
(3, 'App\\Models\\User', 83),
(3, 'App\\Models\\User', 84),
(3, 'App\\Models\\User', 85),
(3, 'App\\Models\\User', 86),
(3, 'App\\Models\\User', 87),
(3, 'App\\Models\\User', 88),
(3, 'App\\Models\\User', 89),
(3, 'App\\Models\\User', 90),
(4, 'App\\Models\\User', 91),
(3, 'App\\Models\\User', 92),
(4, 'App\\Models\\User', 93),
(4, 'App\\Models\\User', 94),
(4, 'App\\Models\\User', 95),
(4, 'App\\Models\\User', 96),
(3, 'App\\Models\\User', 97),
(3, 'App\\Models\\User', 98),
(4, 'App\\Models\\User', 99),
(4, 'App\\Models\\User', 100),
(1, 'App\\Models\\User', 101),
(4, 'App\\Models\\User', 102),
(4, 'App\\Models\\User', 103),
(4, 'App\\Models\\User', 104),
(4, 'App\\Models\\User', 105),
(4, 'App\\Models\\User', 106),
(4, 'App\\Models\\User', 107),
(4, 'App\\Models\\User', 108),
(3, 'App\\Models\\User', 109),
(4, 'App\\Models\\User', 110),
(4, 'App\\Models\\User', 111),
(4, 'App\\Models\\User', 112),
(4, 'App\\Models\\User', 113),
(1, 'App\\Models\\User', 114),
(1, 'App\\Models\\User', 115),
(1, 'App\\Models\\User', 116),
(1, 'App\\Models\\User', 117),
(1, 'App\\Models\\User', 118),
(1, 'App\\Models\\User', 119),
(1, 'App\\Models\\User', 120);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `possible_answers`
--

DROP TABLE IF EXISTS `possible_answers`;
CREATE TABLE IF NOT EXISTS `possible_answers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `answer_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer_es` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `score` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `possible_answers`
--

INSERT INTO `possible_answers` (`id`, `answer_en`, `answer_es`, `score`, `created_at`, `updated_at`) VALUES
(1, 'Strongly disagree', 'Totalmente en desacuerdo', 1, '2023-08-07 14:54:53', '2023-08-07 14:54:53'),
(2, 'Moderately disagree', 'Moderadamente en desacuerdo', 2, '2023-08-07 14:54:53', '2023-08-07 14:54:53'),
(3, 'Undecided', 'Indeciso', 3, '2023-08-07 14:54:53', '2023-08-07 14:54:53'),
(4, 'Moderately agree', 'Moderadamente de acuerdo', 4, '2023-08-07 14:54:53', '2023-08-07 14:54:53'),
(5, 'Strongly agree', 'Totalmente de acuerdo', 5, '2023-08-07 14:54:53', '2023-08-07 14:54:53');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `question_es` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_en` text COLLATE utf8mb4_unicode_ci,
  `learning_style_id` bigint UNSIGNED NOT NULL,
  `type` enum('student','tutor') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'student',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `questions_learning_style_id_foreign` (`learning_style_id`)
) ENGINE=InnoDB AUTO_INCREMENT=181 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_es`, `question_en`, `learning_style_id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Tengo confianza en mi habilidad de aprender material importante del curso.', 'I am confident in my ability to learn important material from the course.', 1, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(2, 'A menudo me encuentro soñando despierto (a) durante clases.', 'I often find myself daydreaming during classes.', 2, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(3, 'Me gusta mucho trabajar con otros estudiantes en clases.', 'I really enjoy working with other students in class.', 3, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(4, 'El material del curso tiene información válida y veraz.', 'The course material has valid and accurate information.', 4, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(5, 'Me parece necesario competir con otros estudiantes por la atención del profesor y resolver mis dudas antes que los demás.', 'I feel the need to compete with other students for the teacher\'s attention and to get my questions answered before others.', 5, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(6, 'Usualmente estoy dispuesto a aprender sobre el contenido dado en clase.', 'I am usually willing to learn about the content taught in class.', 6, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(7, 'Mis pensamientos sobre el contenido usualmente son tan buenos como los que aparecen en el material.', 'My thoughts about the content are usually as good as those presented in the material.', 1, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(8, 'Las actividades en el salón de clases me parecen aburridas.', 'Classroom activities seem boring to me.', 2, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(9, 'Disfruto discutir ideas sobre el material de la clase con otros estudiantes.', 'I enjoy discussing ideas about the class material with other students.', 3, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(10, 'Considero que los profesores saben exactamente lo que es importante aprender en un curso.', 'I believe that teachers know exactly what is important to learn in a course.', 4, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(11, 'Siento que es necesario competir con otros estudiantes por la mejor nota.', 'I feel it is necessary to compete with other students for the best grade.', 5, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(12, 'Siento que vale la pena atender las sesiones de clases presenciales.', 'I feel that attending in-person class sessions is worth it.', 6, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(13, 'Yo estudio lo que es importante para mí y no siempre lo que el profesor diga que es importante.', 'I study what is important to me and not always what the teacher says is important.', 1, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(14, 'Muy raras veces me emociona el contenido explicado en clase.', 'Very rarely am I excited about the content explained in class.', 2, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(15, 'Disfruto escuchar lo que otros estudiantes piensan sobre los temas discutidos en el salón de clases.', 'I enjoy hearing what other students think about the topics discussed in the classroom.', 3, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(16, 'Los profesores deberían decir claramente lo que esperan de los estudiantes.', 'Teachers should clearly state what they expect from students.', 4, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(17, 'Cuando hay discusiones en clase, debo competir con los otros estudiantes para que mis ideas sean escuchadas.', 'When there are discussions in class, I must compete with other students to have my ideas heard.', 5, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(18, 'Aprendo más del curso en el aula de clases que en casa.', 'I learn more from the course in the classroom than at home.', 6, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(19, 'La mayoría de los temas explicados los aprendí por mi cuenta.', 'I learned most of the topics explained on my own.', 1, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(20, 'Generalmente siento que tengo que asistir a clases, aunque no quiera.', 'I generally feel like I have to attend classes, even if I don\'t want to.', 2, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(21, 'Pienso que los estudiantes pueden aprender más discutiendo sus ideas entre ellos.', 'I think students can learn more by discussing their ideas with each other.', 3, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(22, 'Intento hacer mis tareas siguiendo al pie de la letra las instrucciones del profesor.', 'I try to do my assignments by following the teacher\'s instructions to the letter.', 4, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(23, 'Los estudiantes deben volverse competitivos para tener un buen rendimiento en la escuela.', 'Students must become competitive to perform well in school.', 5, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(24, 'Los estudiantes tenemos la responsabilidad de sacarle el mayor provecho a las herramientas y recursos educativos que se nos dan en clases.', 'We students have the responsibility to make the most of the educational tools and resources given to us in class.', 6, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(25, 'Puedo identificar por mí mismo, los temas importantes del material de clases.', 'I can identify the important topics of class material on my own.', 1, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(26, 'Prestar atención durante una sesión de clases es difícil para mí.', 'Paying attention during a class session is difficult for me.', 2, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(27, 'Me gusta estudiar para exámenes con otros estudiantes.', 'I enjoy studying for exams with other students.', 3, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(28, 'Profesores que dejan que los estudiantes hagan lo que quieran, no están realizando su trabajo.', 'Teachers who let students do whatever they want are not doing their job.', 4, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(29, 'Me gusta obtener las respuestas de problemas o preguntas antes de que alguien más pueda.', 'I like to get answers to problems or questions before anyone else can.', 5, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(30, 'Las actividades del salón son generalmente interesantes.', 'Classroom activities are generally interesting.', 6, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(31, 'Me gusta desarrollar mis propias ideas sobre los temas dados en clases.', 'I like to develop my own ideas about the topics covered in class.', 1, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(32, 'Me he rendido de intentar aprender durante las clases presenciales.', 'I have given up trying to learn during in-person classes.', 2, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(33, 'Las ideas de otros estudiantes me ayudan a entender el material del curso.', 'The ideas of other students help me understand the course material.', 3, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(34, 'Los estudiantes deben ser supervisados por profesores en todos los proyectos del curso.', 'Students should be supervised by teachers in all course projects.', 4, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(35, 'Para estar un paso más adelante, es necesario pasar por encima de los demás estudiantes.', 'To get ahead, it is necessary to step over other students.', 5, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(36, 'Yo trato de participar lo más posible en todos los aspectos del curso.', 'I try to participate as much as possible in all aspects of the course.', 6, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(37, 'Tengo mis propias ideas de cómo las clases deberían ser presentadas.', 'I have my own ideas about how classes should be presented.', 1, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(38, 'En la mayoría de mis materias estudio solo lo suficiente para pasar.', 'In most of my subjects, I study just enough to pass.', 2, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(39, 'Una parte importante de tomar materias es aprender a convivir con otras personas.', 'An important part of taking courses is learning to get along with other people.', 3, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(40, 'Mis apuntes contienen casi todo lo que el profesor ha dicho en clases.', 'My notes contain almost everything the teacher has said in class.', 4, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(41, 'Los estudiantes pierden la oportunidad de una nota cuando comparten sus apuntes e ideas.', 'Students miss out on a grade when they share their notes and ideas.', 5, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(42, 'Completo las asignaciones de la materia sin importar si me parecen interesantes o no.', 'I complete assignments for the course regardless of whether they seem interesting to me or not.', 6, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(43, 'Si me gusta un tema, usualmente investigo por mi cuenta.', 'If I like a topic, I usually research on my own.', 1, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(44, 'Normalmente estudio intensamente antes de los exámenes.', 'I usually study intensively before exams.', 2, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(45, 'Aprender debería ser un esfuerzo cooperativo entre los estudiantes y la escuela.', 'Learning should be a cooperative effort between students and the school.', 3, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(46, 'Prefiero sesiones de clases que estén altamente organizadas.', 'I prefer class sessions that are highly organized.', 4, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(47, 'Para sobresalir en clases, trato de hacer las asignaciones mejor que los demás estudiantes.', 'To excel in classes, I try to do assignments better than other students.', 5, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(48, 'Yo completo las asignaciones apenas son entregadas.', 'I complete assignments as soon as they are handed out.', 6, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(49, 'Yo prefiero trabajar en proyectos relacionados con las clases (Estudiar para exámenes, hacer tareas, étc.) por mi cuenta.', 'I prefer to work on class-related projects (studying for exams, doing assignments, etc.) on my own.', 1, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(50, 'Me gustaría que los profesores me ignoraran en clases.', 'I would like teachers to ignore me in class.', 2, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(51, 'Dejo que los otros estudiantes tomen prestados mis apuntes cuando los piden.', 'I let other students borrow my notes when they ask for them.', 3, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(52, 'Los profesores deberían decirles a los estudiantes exactamente qué material se va a cubrir en un examen.', 'Teachers should tell students exactly what material will be covered on an exam.', 4, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(53, 'Me gusta saber el rendimiento de los otros estudiantes en las asignaciones y exámenes.', 'I like to know the performance of other students on assignments and exams.', 5, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(54, 'Yo completo las asignaciones que son para nota, tanto como las que son opcionales.', 'I complete assignments that are for credit, as well as optional ones.', 6, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(55, 'Cuando no entiendo algo, trato de averiguar por mi cuenta antes de buscar ayuda.', 'When I don\'t understand something, I try to figure it out on my own before seeking help.', 1, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(56, 'Durante clases, tiendo a hablar o bromear con las personas que están cerca de mí.', 'During classes, I tend to talk or joke with people who are near me.', 2, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(57, 'Participar en grupos pequeños de clases es algo que disfruto.', 'Participating in small class groups is something I enjoy.', 3, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(58, 'Yo pienso que las anotaciones e indicaciones del profesor en el tablero son de mucha ayuda.', 'I think the teacher\'s notes and indications on the board are very helpful.', 4, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(59, 'Le pregunto a otros estudiantes en clases qué notas recibieron en los exámenes y asignaciones.', 'I ask other students in class what grades they got on exams and assignments.', 5, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(60, 'En mis clases usualmente me siento en los puestos que están más adelante en el salón.', 'In my classes, I usually sit in the front seats of the classroom.', 6, 'student', '2023-08-07 15:24:29', '2023-08-07 15:24:29'),
(141, 'Hechos, conceptos y principios son las cosas más importantes que los estudiantes deben adquirir.', 'Facts, concepts, and principles are the most important things students need to acquire.', 7, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(142, 'Establezco estándares altos para los estudiantes en esta clase.', 'I set high standards for students in this class.', 8, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(143, 'Lo que digo y hago modela formas apropiadas para que los estudiantes piensen sobre los temas del contenido.', 'What I say and do models appropriate ways for students to think about content topics.', 9, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(144, 'Mis objetivos y métodos de enseñanza abordan una variedad de estilos de aprendizaje de los estudiantes.', 'My teaching goals and methods address a variety of students\' learning styles.', 10, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(145, 'Los estudiantes suelen trabajar solos en los proyectos del curso con poca supervisión por mi parte.', 'Students often work alone on course projects with little supervision from me.', 11, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(146, 'Compartir mi conocimiento y experiencia con los estudiantes es muy importante para mí.', 'Sharing my knowledge and experience with students is very important to me.', 7, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(147, 'Doy retroalimentación negativa a los estudiantes cuando su desempeño no es satisfactorio.', 'I give negative feedback to students when their performance is unsatisfactory.', 8, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(148, 'Las actividades en esta clase alientan a los estudiantes a desarrollar sus ideas sobre temas de contenido.', 'Activities in this class encourage students to develop their ideas about content topics.', 9, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(149, 'Dedico tiempo a consultar con los estudiantes sobre cómo mejorar su trabajo en proyectos individuales y grupales.', 'I spend time consulting with students on how to improve their work on individual and group projects.', 10, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(150, 'Las actividades en esta clase alientan a los estudiantes a desarrollar sus ideas sobre temas de contenido.', 'Activities in this class encourage students to develop their ideas about content topics.', 11, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(151, 'Lo que tengo que decir sobre un tema es esencial para que los estudiantes adquieran una perspectiva más amplia sobre los problemas de esa área.', 'What I have to say about a topic is essential for students to gain a broader perspective on issues in that area.', 7, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(152, 'Los estudiantes describirían mis estándares y expectativas como algo estrictos y rígidos.', 'Students would describe my standards and expectations as strict and rigid.', 8, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(153, 'Normalmente muestro a los estudiantes cómo y qué hacer para dominar el contenido del curso.', 'I usually show students how and what to do to master the course content.', 9, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(154, 'Las discusiones en grupos pequeños ayudan a los estudiantes a desarrollar su capacidad de pensar críticamente.', 'Small group discussions help students develop their critical thinking skills.', 10, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(155, 'Los estudiantes diseñan una de las experiencias de aprendizaje más autodirigidas.', 'Students design one of the most self-directed learning experiences.', 11, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(156, 'Quiero que los estudiantes dejen este curso bien preparado para seguir trabajando en esta área.', 'I want students to leave this course well-prepared to continue working in this area.', 7, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(157, 'Soy responsable de definir lo que los estudiantes deben aprender y cómo deben aprenderlo.', 'I am responsible for defining what students need to learn and how they should learn it.', 8, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(158, 'Los ejemplos de mis experiencias personales a menudo ilustran puntos sobre el material.', 'Examples from my personal experiences often illustrate points about the material.', 9, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(159, 'Guío el trabajo de los estudiantes en los proyectos del curso haciéndoles preguntas, explorando opciones y sugiriendo formas alternativas.', 'I guide students\' work on course projects by asking questions, exploring options, and suggesting alternative ways.', 10, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(160, 'Desarrollar la capacidad de los estudiantes para pensar y trabajar de forma independiente es un objetivo importante.', 'Developing students\' ability to think and work independently is an important goal.', 11, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(161, 'Dar conferencias es una parte importante de cómo enseño cada sesión de clase.', 'Lecturing is an important part of how I teach each class session.', 7, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(162, 'Proporciono pautas obvias sobre cómo quiero que se completen las tareas en este curso.', 'I provide clear guidelines on how I want tasks to be completed in this course.', 8, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(163, 'A menudo muestro a los estudiantes cómo pueden usar varios principios y conceptos.', 'I often show students how they can apply various principles and concepts.', 9, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(164, 'Las actividades del curso alientan a los estudiantes a tomar la iniciativa y la responsabilidad de su aprendizaje.', 'Course activities encourage students to take initiative and responsibility for their learning.', 10, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(165, 'Los estudiantes asumen la responsabilidad de impartir parte de las sesiones de clase.', 'Students take responsibility for leading part of the class sessions.', 11, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(166, 'Mi experiencia generalmente se usa para resolver desacuerdos sobre problemas de contenido.', 'My experience is often used to resolve disagreements about content issues.', 7, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(167, 'Este curso tiene metas y objetivos concretos que quiero lograr.', 'This course has specific goals and objectives I want to achieve.', 8, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(168, 'Los estudiantes reciben frecuentes comentarios verbales y escritos sobre su desempeño.', 'Students receive frequent verbal and written feedback on their performance.', 9, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(169, 'Solicito el consejo de los estudiantes sobre cómo y qué enseñar en este curso.', 'I seek advice from students on how and what to teach in this course.', 10, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(170, 'Los estudiantes establecen su propio ritmo para completar proyectos independientes y grupales.', 'Students set their own pace to complete independent and group projects.', 11, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(171, 'Los estudiantes pueden describirme como un \'almacén de conocimiento\' que proporciona los hechos, principios y conceptos que necesitan.', 'Students can describe me as a \'storehouse of knowledge\' providing the facts, principles, and concepts they need.', 7, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(172, 'El plan de estudios define claramente mis expectativas sobre lo que quiero que hagan los estudiantes en esta clase.', 'The curriculum clearly defines my expectations for what I want students to do in this class.', 8, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(173, 'Eventualmente, muchos estudiantes comenzaron a pensar como yo sobre el contenido del curso.', 'Eventually, many students started thinking like me about the course content.', 9, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(174, 'Los estudiantes pueden elegir entre actividades para completar los requisitos del curso.', 'Students can choose among activities to complete course requirements.', 10, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(175, 'Mi enfoque de la enseñanza es similar al de un gerente de un grupo de trabajo que delega tareas y responsabilidades a sus subordinados.', 'My teaching approach is similar to that of a manager of a workgroup who delegates tasks and responsibilities to subordinates.', 11, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(176, 'Este curso tiene más material del que tengo tiempo disponible para cubrir.', 'This course has more material than I have time available to cover.', 7, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(177, 'Mis estándares y expectativas ayudan a los estudiantes a desarrollar la disciplina que necesitan aprender.', 'My standards and expectations help students develop the discipline they need to learn.', 8, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(178, 'Los estudiantes pueden describirme como un \'entrenador\' que trabaja en estrecha colaboración con alguien para corregir problemas en su forma de pensar y comportarse.', 'Students can describe me as a \'coach\' who works closely with someone to correct issues in their way of thinking and behaving.', 9, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(179, 'Doy a los estudiantes mucho apoyo personal y aliento para que les vaya bien en este curso.', 'I give students a lot of personal support and encouragement to do well in this course.', 10, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18'),
(180, 'Asumo el papel de una persona de recursos disponible para los estudiantes cuando necesitan ayuda.', 'I assume the role of a resource person available to students when they need help.', 11, 'tutor', '2023-08-07 16:04:18', '2023-08-07 16:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-08-07 11:51:02', '2023-08-07 11:51:02'),
(2, 'user', 'web', '2023-08-07 11:51:02', '2023-08-07 11:51:02'),
(3, 'student', 'web', '2023-08-07 17:02:23', '2023-08-07 17:02:23'),
(4, 'tutor', 'web', '2023-08-07 17:02:23', '2023-08-07 17:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_survey_completed` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_password_changed` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `age`, `sex`, `email`, `position`, `email_verified_at`, `is_survey_completed`, `password`, `is_password_changed`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin1', NULL, NULL, 'admin@m.com', 'asdas', NULL, 0, '$2y$10$npPUCm3zpYL8WaIKfl2kpuD4826Gxe0S5fb.rXp9wZ8BtmLhw0.m6', 1, NULL, '2023-08-07 11:53:16', '2023-08-23 15:10:43', NULL),
(2, 'user', NULL, NULL, 'user@m.com', NULL, NULL, 0, '$2y$10$rhzaTVChznEmbJx6VqOC.uCfKD.1oHoD8YMlqZWJR/Er.TsEnp122', 0, NULL, '2023-08-07 11:53:16', '2023-08-07 11:53:16', NULL),
(3, 'rao', NULL, NULL, 'hassanjrao@gmail.com', NULL, NULL, 0, '$2y$10$uZMvKZoqJofQwOVy01K0uuKD1SA.8TgGM.8UdDRon9pPKxsV0yChe', 0, NULL, '2023-08-07 17:17:19', '2023-08-07 17:20:10', NULL),
(4, 'catherine frazier', NULL, NULL, 'sovaz@mailinator.com', NULL, NULL, 0, '$2y$10$hrpw3M37m6ypoj/tlqARr.zj34ZM1SN0F/5UijdzL/lO9MacUnPJi', 0, NULL, '2023-08-07 17:21:30', '2023-08-07 17:21:30', NULL),
(5, 'imelda delaney', NULL, NULL, 'hucejod@mailinator.com', NULL, NULL, 0, '$2y$10$X91yyA6RsSQAp5AM1.0SA.4G.AHRNeyIApXy0JPj.3Ju90RoLcxQ6', 0, NULL, '2023-08-07 17:23:02', '2023-08-07 17:23:02', NULL),
(6, 'alexis webster', NULL, NULL, 'govi@mailinator.com', NULL, NULL, 0, '$2y$10$m5H1bSiguNPyDCx9dYpL1.gyyX.sUxO48UMNKs6e1CIQjUjO6wSJK', 0, NULL, '2023-08-07 17:23:43', '2023-08-07 17:23:43', NULL),
(7, 'cailin salazar', NULL, NULL, 'vohefumano@mailinator.com', NULL, NULL, 0, '$2y$10$47QVBWeu1OOD9aXqx.uYeuCANPJTUyr9htVHQZgFq4IGt38oKrcP6', 0, NULL, '2023-08-08 13:00:57', '2023-08-08 13:00:57', NULL),
(8, 'rao', NULL, NULL, 'rao@m.com', NULL, NULL, 0, '$2y$10$Wxr7UbtJls1nySRNS5S6QeBqFImhfXh52VSneA1I/iL304JcQ5omC', 0, NULL, '2023-08-08 13:03:19', '2023-08-08 13:04:25', NULL),
(9, 'dahlia clarke', NULL, NULL, 'xefuca@mailinator.com', NULL, NULL, 0, '$2y$10$TaPJXcI7ifDieXD19SnyA.uIZMtnss2cwwk8WcDrDObXtRA9g7Chi', 0, NULL, '2023-08-08 13:05:23', '2023-08-08 13:05:23', NULL),
(10, 'karina woodard', NULL, NULL, 'huxorohu@mailinator.com', NULL, NULL, 0, '$2y$10$.zpN9OlwxlZj.MqIBJr41.zjZ7Hja3FDyQe4BpNAX/MzTkmgO9WeW', 0, NULL, '2023-08-08 13:05:46', '2023-08-08 13:05:46', NULL),
(11, 'freya santana', NULL, NULL, 'rydyqugek@mailinator.com', NULL, NULL, 0, '$2y$10$33s/1duTeNzJ7LfHA.EWzOuN37F5SDIlA01lV.Y73opBzEfF0XVmO', 0, NULL, '2023-08-08 13:06:43', '2023-08-08 13:06:43', NULL),
(12, 'montana beach', NULL, NULL, 'faqalesuw@mailinator.com', NULL, NULL, 0, '$2y$10$TzSHGHyESM//6OfzMp1F9.4iK/pvdUtna/ds34t4iCVNZGXUUWEgu', 0, NULL, '2023-08-08 13:07:14', '2023-08-08 13:07:14', NULL),
(13, 'tobias miranda', NULL, NULL, 'mibix@mailinator.com', NULL, NULL, 0, '$2y$10$huOQfHJ06z.NKoGbdyGb0OZexSxroLXABzqS95Vtk96GLna/zs.ja', 0, NULL, '2023-08-08 13:07:50', '2023-08-08 13:07:50', NULL),
(14, 'mufutau small', NULL, NULL, 'nigid@mailinator.com', NULL, NULL, 0, '$2y$10$c4f5jWaqbEOy2ZymaP4E8.PnAIrnNVZeZop9u6AtbkRosOGu5kpze', 0, NULL, '2023-08-08 13:13:04', '2023-08-08 13:13:04', NULL),
(15, 'aidan alvarez', NULL, NULL, 'lajycyl@mailinator.com', NULL, NULL, 0, '$2y$10$nIs1ePRbnRLucNekaAuXP.5mG4KF8OfU6kkWvcQbhuob.ElZtJRTa', 0, NULL, '2023-08-08 13:14:24', '2023-08-08 13:14:24', NULL),
(16, 'kimberley barlow', NULL, NULL, 'tumy@mailinator.com', NULL, NULL, 0, '$2y$10$7HqHMssL0HXzwBHRAd9B7.GB4PLKq.uiO.hcYfqEM35.ahhOiOUry', 0, NULL, '2023-08-08 13:18:07', '2023-08-08 13:18:07', NULL),
(17, 'caleb walton', NULL, NULL, 'bywyq@mailinator.com', NULL, NULL, 0, '$2y$10$Gk/GeWLttIP/U590CFLZXOwQB5EuYsN1nC4BC4Ghi5/rWAfY/5Zna', 0, NULL, '2023-08-08 14:06:21', '2023-08-08 14:06:21', NULL),
(18, 'selma gamble', NULL, NULL, 'hulaviku@mailinator.com', NULL, NULL, 0, '$2y$10$xs0l4Hs28ST6zAsE41/.heXPkjS0pD4mTAf6twNDMIfManNAgriz.', 0, NULL, '2023-08-08 14:18:34', '2023-08-08 14:18:34', NULL),
(19, 'gemma goodwin', NULL, NULL, 'xenuk@mailinator.com', NULL, NULL, 0, '$2y$10$52w3dC/NjyD3slA0I9O/dOgzeu8BD2AqELdQQMvoR8uwgOjR5cDmS', 0, NULL, '2023-08-08 14:19:32', '2023-08-08 14:19:32', NULL),
(20, 'joshua mcdowell', NULL, NULL, 'viny@mailinator.com', NULL, NULL, 0, '$2y$10$rfqPLQWxWhRTop/ndbK.Z.d2Eq..salvAjplnyZeuULXOdzFhqU8u', 0, NULL, '2023-08-08 14:22:49', '2023-08-08 14:22:49', NULL),
(21, 'hassan', NULL, NULL, 'hasasn@m.com', NULL, NULL, 0, '$2y$10$MgAEqX2.MC.yLE8IttFH.eGrGRxCVopAIP6E/5I9X1JUrTYmO2z4.', 0, NULL, '2023-08-08 14:25:37', '2023-08-08 14:25:37', NULL),
(22, 'ivory mercer', NULL, NULL, 'hasas122n@m.com', NULL, NULL, 0, '$2y$10$73pVnZejK/8xnRTtB4RXze3ewbvd4bqGh/U7kPwF9bWdc4E1le7Re', 0, NULL, '2023-08-08 14:26:30', '2023-08-08 14:26:30', NULL),
(23, 'hassan', NULL, NULL, 'hassan1231231@gmail.com', NULL, NULL, 0, '$2y$10$ewOL4lb4phhkhhGRYCPsn.rhhJprU5Q5vSkQLfsZuQ6MbkMDOOJdS', 0, NULL, '2023-08-08 14:40:59', '2023-08-08 14:40:59', NULL),
(24, 'hassan', NULL, NULL, 'rao@mdd.com', NULL, NULL, 0, '$2y$10$xzDgwXZ6PW5i.mXgMH77oOInMJ9vVaThy.phybsKmmNXQFq9CCMK2', 0, NULL, '2023-08-08 16:39:26', '2023-08-08 16:39:26', NULL),
(25, 'tamara jarvis', NULL, NULL, 'sybufemy@mailinator.com', NULL, NULL, 0, '$2y$10$EwLcAYBmZDb2sfedT5ypSe179AvTTi0oJ6A.YYzHkqdFB3d2B6JBC', 0, NULL, '2023-08-08 16:45:16', '2023-08-08 16:45:16', NULL),
(26, 'gillian nixon', NULL, NULL, 'cijinylygo@mailinator.com', NULL, NULL, 0, '$2y$10$K.3vvyfCH9Zxf7nadQc6Pudb4QQioocHXnWAOONhj5xAhS0HWMa8q', 0, NULL, '2023-08-08 16:46:30', '2023-08-08 16:46:30', NULL),
(27, 'lucas mcconnell', NULL, NULL, 'zatuhi@mailinator.com', NULL, NULL, 0, '$2y$10$RLFdZ2xuAnv9JbTYSz8KIufA.977ORXQ0oRsWVA4X0W37vTMLOmhm', 0, NULL, '2023-08-08 16:50:42', '2023-08-08 16:50:42', NULL),
(28, 'arthur gallegos', NULL, NULL, 'vilaj@mailinator.com', NULL, NULL, 0, '$2y$10$V3e2y2iP6To6qMwj09gOieAWh0C3YelU2QbRFc4WUFC6/uc4Jq7zK', 0, NULL, '2023-08-08 16:55:09', '2023-08-08 16:55:09', NULL),
(29, 'felix olsen', NULL, NULL, 'dinavyc@mailinator.com', NULL, NULL, 0, '$2y$10$zKJ946rzmODx.hk9cwAreuIHEHsuHe6.zxWy.diGV224i0lG5kb4m', 0, NULL, '2023-08-08 16:58:50', '2023-08-08 16:58:50', NULL),
(30, 'howard callahan', NULL, NULL, 'jajikize@mailinator.com', NULL, NULL, 0, '$2y$10$g/9wFxeycI3YCbBOYDeEIubrc8oU5h3/rInTbWqd1WPXTWoKrER0q', 0, NULL, '2023-08-08 17:01:58', '2023-08-08 17:01:58', NULL),
(31, 'lucius barnes', NULL, NULL, 'kikikokumy@mailinator.com', NULL, NULL, 0, '$2y$10$0kRpDigrIued.xO07724E.j4CExYq7Ihs8xTvCHm0.6abXCxnUjVK', 0, NULL, '2023-08-08 17:04:50', '2023-08-08 17:04:50', NULL),
(32, 'avram lambert', NULL, NULL, 'nahukixig@mailinator.com', NULL, NULL, 0, '$2y$10$KOHbwNzotnxeZsjeGCGskeea4gYWQ6hcXK8fXjR59iEkGGE2oDOtO', 0, NULL, '2023-08-08 17:09:11', '2023-08-08 17:09:11', NULL),
(33, 'melyssa waters', NULL, NULL, 'qacyvomeja@mailinator.com', NULL, NULL, 0, '$2y$10$zYBMqXfwyghgs.y7mhZi1u8AgiNwUqSXkBSlmSRHdzfV9lhwmL72u', 0, NULL, '2023-08-08 17:09:49', '2023-08-08 17:09:49', NULL),
(34, 'colleen farley', NULL, NULL, 'cijijyve@mailinator.com', NULL, NULL, 0, '$2y$10$kEeq0Vs0ioft/qowTXRl.uh1uPapUP373qqiJmU/4kLf.pf0ePyhW', 0, NULL, '2023-08-08 17:10:28', '2023-08-08 17:10:28', NULL),
(35, 'darryl finch', NULL, NULL, 'racidymy@mailinator.com', NULL, NULL, 0, '$2y$10$cUopEXnetmFaE7JfqwFrlu715yEU.683fk.VDk3UCNqicXYnuZuEy', 0, NULL, '2023-08-08 17:11:35', '2023-08-08 17:11:35', NULL),
(36, 'cade steele', NULL, NULL, 'hefejipyl@mailinator.com', NULL, NULL, 0, '$2y$10$l0Rwf532/Ql4mu5uhEQWg.v08rcsh9Z8WIkzUEmSzYykXyRLLsz1e', 0, NULL, '2023-08-08 17:12:34', '2023-08-08 17:12:34', NULL),
(37, 'xandra king', NULL, NULL, 'texakabeb@mailinator.com', NULL, NULL, 0, '$2y$10$cXE72FI0MQqPOS7qbcXVoOyb0b9hXSqt/Y81vkeqnke307ljM9XYK', 0, NULL, '2023-08-08 17:13:03', '2023-08-08 17:13:03', NULL),
(38, 'otto yates', NULL, NULL, 'keqogugo@mailinator.com', NULL, NULL, 0, '$2y$10$QkiG7Ynw1Dx1BAFYR3f75.nJ/959c0T/AjaDx6sYaJl2pIFMkbc1C', 0, NULL, '2023-08-08 17:13:48', '2023-08-08 17:13:48', NULL),
(39, 'vivian collier', NULL, NULL, 'mixejivoto@mailinator.com', NULL, NULL, 0, '$2y$10$WpQQiRfXvWV519mJYLWCq.t/4m3y3tH..x5CHGUL0t9Qky8QH.9ea', 0, NULL, '2023-08-08 17:14:18', '2023-08-08 17:14:18', NULL),
(40, 'chancellor gentry', NULL, NULL, 'roxyf@mailinator.com', NULL, NULL, 0, '$2y$10$lwZoi11KO1TmiF8OsrEao.mjE2RGHOVERoYFToD7ldKriN4XzeC/u', 0, NULL, '2023-08-08 17:14:31', '2023-08-08 17:14:31', NULL),
(41, 'abbot gentry', NULL, NULL, 'bocepyqofe@mailinator.com', NULL, NULL, 0, '$2y$10$CZNcCa0jpWmaZRTjtd9N6.WVsL2ur9KIiDqMeMrrCA.OFa3Y7it9i', 0, NULL, '2023-08-08 17:14:47', '2023-08-08 17:14:47', NULL),
(42, 'cynthia carr', NULL, NULL, 'bahisegac@mailinator.com', NULL, NULL, 0, '$2y$10$B.1dp/FrEMji8RKeveM.Quoqb6RWY1VjDneAeLXa2JXvFJ82pX4Oi', 0, NULL, '2023-08-08 17:15:30', '2023-08-08 17:15:30', NULL),
(43, 'myles pennington', NULL, NULL, 'wusukohi@mailinator.com', NULL, NULL, 0, '$2y$10$TfbiNXQxPQdPkVn3mSFOyeMXW0tU8YsKNvi/rzFvMXOSa6nj84lN6', 0, NULL, '2023-08-08 17:15:53', '2023-08-08 17:15:53', NULL),
(44, 'caldwell chase', NULL, NULL, 'lobo@mailinator.com', NULL, NULL, 0, '$2y$10$CfUQET4bVD4v3vcp7j.WN.0JqB81XGN/4y3Qa2ESGyv/ieRITPzjK', 0, NULL, '2023-08-08 17:16:21', '2023-08-08 17:16:21', NULL),
(45, 'leo price', NULL, NULL, 'qikotymeci@mailinator.com', NULL, NULL, 0, '$2y$10$NM8rLgVL6MAweJeI6yjkIO4IC6rASdJvC35ZBaJu99podxt0OxlG.', 0, NULL, '2023-08-08 17:17:43', '2023-08-08 17:17:43', NULL),
(46, 'carla booth', NULL, NULL, 'hazegegyr@mailinator.com', NULL, NULL, 0, '$2y$10$U776.NYM/FwWHG7qiYfb2.R1sQLTS21blwio18tAVINmd8xNaHTdq', 0, NULL, '2023-08-08 17:18:30', '2023-08-08 17:18:30', NULL),
(47, 'octavius clark', NULL, NULL, 'dajicewag@mailinator.com', NULL, NULL, 0, '$2y$10$FdGpL4FD89MZze0RhdOymeTg7COeskE97WrOjd5COL7tQjQCQoBqa', 0, NULL, '2023-08-08 17:19:03', '2023-08-08 17:19:03', NULL),
(48, 'herrod ruiz', NULL, NULL, 'tewyfepeb@mailinator.com', NULL, NULL, 0, '$2y$10$kNNajzITLlJ9pulZZBRx1uN6RB1YVVQPBn.G25oWE/15jGSvAY0z6', 0, NULL, '2023-08-08 17:20:39', '2023-08-08 17:20:39', NULL),
(49, 'colorado dunn', NULL, NULL, 'gyqysigos@mailinator.com', NULL, NULL, 0, '$2y$10$hr/X5vYYJw7ESFoRvYE/aO1j/yWW2zdfztL1W1whS1No3YlvRu.zO', 0, NULL, '2023-08-08 17:21:36', '2023-08-08 17:21:36', NULL),
(50, 'kai farmer', NULL, NULL, 'felihuro@mailinator.com', NULL, NULL, 0, '$2y$10$Joi5Lu3urUBa5mPmCBqwze6nhbZCvWOIjluAd9xiLGzHl9M5F6GJK', 0, NULL, '2023-08-08 17:22:21', '2023-08-08 17:22:21', NULL),
(51, 'keiko roberts', NULL, NULL, 'dosi@mailinator.com', NULL, NULL, 0, '$2y$10$1m1U/zmsLU7..ACrTjparepH6jyjc1HYz4.SU97CoOYUmKiJoy.tu', 0, NULL, '2023-08-08 17:23:35', '2023-08-08 17:23:35', NULL),
(52, 'channing watkins', NULL, NULL, 'hohidaxofi@mailinator.com', NULL, NULL, 0, '$2y$10$cLjXfLbQr8J1XLB6m8maMuVgjPejkrbe9pyaGBR8p9WLsuXIskFES', 0, NULL, '2023-08-08 17:25:29', '2023-08-08 17:25:29', NULL),
(53, 'lillian joyce', NULL, NULL, 'vopujexaku@mailinator.com', NULL, NULL, 0, '$2y$10$KsZuvejJblKnQHbGJk1T1eoVgOkiVWENQZf04CwqlS/V2gn632qAe', 0, NULL, '2023-08-08 17:27:30', '2023-08-08 17:27:30', NULL),
(54, 'kelly mejia', NULL, NULL, 'fejuj@mailinator.com', NULL, NULL, 0, '$2y$10$VYgx0NrvpnnXBg4DiwPLL.4qk1ffe1iOPX50m3M4SgTcnus984vjq', 0, NULL, '2023-08-08 17:27:52', '2023-08-08 17:27:52', NULL),
(55, 'maggy kirby', NULL, NULL, 'pydomifi@mailinator.com', NULL, NULL, 0, '$2y$10$0Gsm/yjYt8HnEyLiV1nEqe1R69Jl8YlkZmSdhzKtRBz43S9lwdgdy', 0, NULL, '2023-08-08 17:30:42', '2023-08-08 17:30:42', NULL),
(56, 'kenneth cook', NULL, NULL, 'jacepyd@mailinator.com', NULL, NULL, 0, '$2y$10$UEJ1B72fUF1k7vzPGcGzxu9a6S1IYd/E/Aw9qEM/OOi1qUAfJhrIa', 0, NULL, '2023-08-08 17:31:40', '2023-08-08 17:31:40', NULL),
(57, 'alan emerson', NULL, NULL, 'becubun@mailinator.com', NULL, NULL, 0, '$2y$10$kN0PFiHrRbjUTi7ce6SHCucuKC/rnNmS.Q8M70Xt9t0kPrlvHTzla', 0, NULL, '2023-08-08 17:33:09', '2023-08-08 17:33:09', NULL),
(58, 'skyler gill', NULL, NULL, 'vygyxawyf@mailinator.com', NULL, NULL, 0, '$2y$10$bxIxRXa0JiIFmUSYlvdWAudHHm3EHV0h1sZWsnCOoYZiV2VVng2D2', 0, NULL, '2023-08-08 17:34:15', '2023-08-08 17:34:15', NULL),
(59, 'tana mclaughlin', NULL, NULL, 'somet@mailinator.com', NULL, NULL, 0, '$2y$10$YdtsQk8THAwmtwFyqewJfOcpAhZ89.DL54xuwcn7CX6YCnz9e8kT2', 0, NULL, '2023-08-08 17:34:59', '2023-08-08 17:34:59', NULL),
(60, 'dane flynn', NULL, NULL, 'hira@mailinator.com', NULL, NULL, 0, '$2y$10$PXs/Gp8FoiMkeuizSjk4t.bqIGLj90cD75vFcuc7vZ.wo89DFBZr6', 0, NULL, '2023-08-08 17:35:24', '2023-08-08 17:35:24', NULL),
(61, 'basia keith', NULL, NULL, 'rekygequ@mailinator.com', NULL, NULL, 0, '$2y$10$pFe2vpEioWV/DzhFihfk3e/NzMBSNxj48YK9zCOEh3Z1Um.2kc21O', 0, NULL, '2023-08-08 17:36:15', '2023-08-08 17:36:15', NULL),
(62, 'patience sandoval', NULL, NULL, 'wucodi@mailinator.com', NULL, NULL, 0, '$2y$10$mpgVU0TzHju7lYvStGc65uNZ7QX5XalUU9.ZSyvksnJahio45TIMq', 0, NULL, '2023-08-08 17:57:15', '2023-08-08 17:57:15', NULL),
(63, 'alec berry', NULL, NULL, 'delyxi@mailinator.com', NULL, NULL, 0, '$2y$10$pq8Xp4WmaPBlKXmsW1vKQOuSXcoI09DPjbU1jL8ewYr/x2MfuyUBm', 0, NULL, '2023-08-09 12:39:44', '2023-08-09 12:39:44', NULL),
(64, 'brittany reyes', NULL, NULL, 'kiquzirez@mailinator.com', NULL, NULL, 0, '$2y$10$LA/q0gkVVmb9t7cSmiCYDOf.jp31b61tweXmtaj9nOP9oLxYpiiq2', 0, NULL, '2023-08-09 12:39:51', '2023-08-09 12:39:51', NULL),
(65, 'derek bradshaw', NULL, NULL, 'kyjycak@mailinator.com', NULL, NULL, 0, '$2y$10$O4kdhR6cwK9ubzTJl.qaAe4dlS7JbBy4tyF4ixN2sZRlvJztzRBc6', 0, NULL, '2023-08-09 12:47:53', '2023-08-09 12:47:53', NULL),
(66, 'reese mooney', NULL, NULL, 'retef@mailinator.com', NULL, NULL, 0, '$2y$10$ngqfpMWq9glLys/p.Y8v1OxRRyEk2K0Gyp72iexb0/Jcz90E1/bdu', 0, NULL, '2023-08-09 12:49:34', '2023-08-09 12:49:34', NULL),
(67, 'freya carson', NULL, NULL, 'cemalyner@mailinator.com', NULL, NULL, 0, '$2y$10$Ve1Fw2MGG7Ds7apNl2XlP.khUTWFLCZV1v1.PhrMF6Cfy9LQLZZ0C', 0, NULL, '2023-08-09 12:51:22', '2023-08-09 12:51:22', NULL),
(68, 'brody snider', NULL, NULL, 'kihutokeba@mailinator.com', NULL, NULL, 0, '$2y$10$MdRf3ke9SAjnMQh03ZlcX.u0G0eyTrVdfGiqel5kludtamDRXgjUa', 0, NULL, '2023-08-09 13:47:30', '2023-08-09 13:47:30', NULL),
(69, 'daquan morgan', NULL, NULL, 'vecokuhute@mailinator.com', NULL, NULL, 0, '$2y$10$5h7xhnYWAff6aPQfcZli.eaSJL8XdyNZNvYBPBmyz/5mPbrzAQcoi', 0, NULL, '2023-08-09 13:48:00', '2023-08-09 13:48:00', NULL),
(70, 'ethan terrell', NULL, NULL, 'huvy@mailinator.com', NULL, NULL, 0, '$2y$10$ptYMWPfsyOE.WbrKrZQFXuwq/Z5CT4h4y1yTz9z2WIUmBYVQqCTei', 0, NULL, '2023-08-09 13:49:06', '2023-08-09 13:49:06', NULL),
(71, 'hoyt weber', NULL, NULL, 'jepitury@mailinator.com', NULL, NULL, 0, '$2y$10$sbps2jT0.afKw0rAnTbDUe0RaVML1iLjQFOTBmkeDhuI1oLBH5V3K', 0, NULL, '2023-08-09 13:49:40', '2023-08-09 13:49:40', NULL),
(72, 'clementine skinner', NULL, NULL, 'facuzin@mailinator.com', NULL, NULL, 0, '$2y$10$HglOSmTeNVllWxxDxhLTou1BWJIhV3YvZkkSrje1Di1gNpIw6vwzy', 0, NULL, '2023-08-09 13:50:37', '2023-08-09 13:50:37', NULL),
(73, 'hilary garcia', NULL, NULL, 'micire@mailinator.com', NULL, NULL, 0, '$2y$10$mudAkkEHcnkp7MZNZRvcR.gBRnb7u9SgbGJ/0qlAxnd3RqecFpboW', 0, NULL, '2023-08-09 13:51:14', '2023-08-09 13:51:14', NULL),
(74, 'janna beck', NULL, NULL, 'quvidyjihu@mailinator.com', NULL, NULL, 0, '$2y$10$k1HTCpLnNTvRclyVaAXQ3eQU6TUC6br6SRUZhwSJG3MXIEbWfaGP.', 0, NULL, '2023-08-09 13:51:38', '2023-08-09 13:51:38', NULL),
(75, 'grace hayden', NULL, NULL, 'piduve@mailinator.com', NULL, NULL, 0, '$2y$10$Ou2xZKVoi6G5U3AgykTaAeNRxnt6oykDuGlCixfZ4n0HdzLLF6UOW', 0, NULL, '2023-08-09 13:53:35', '2023-08-09 13:53:35', NULL),
(76, 'hassan', NULL, NULL, 'rap@m.com', NULL, NULL, 0, '$2y$10$hHhwHCuwTrWMo8I6MwrqWu1ucsmj88qxTuA4V8SXRDfq0CY1Ha86e', 0, NULL, '2023-08-09 14:01:51', '2023-08-09 14:01:51', NULL),
(77, 'wang huffman', NULL, NULL, 'ryvyveluhi@mailinator.com', NULL, NULL, 0, '$2y$10$us3MjhlOGLR52xxePywcm.4/8e8fbgHANvLuGv0yhmQ/r/HKJ0OBq', 0, NULL, '2023-08-09 14:02:43', '2023-08-09 14:02:43', NULL),
(78, 'michael petty', NULL, NULL, 'vyry@mailinator.com', NULL, NULL, 0, '$2y$10$kUoDuoJZni2VwVCrEq8RTOVvHqJ42Yg4wXP5wo/odSZkNa2TV06Aa', 0, NULL, '2023-08-09 14:39:00', '2023-08-09 14:39:00', NULL),
(79, 'dai horn', NULL, NULL, 'migym@mailinator.com', NULL, NULL, 0, '$2y$10$o12WlIztmokih9C29bn3nOK30rTY4QpW1ul05MvcBqkBTWYKiTiAK', 0, NULL, '2023-08-09 14:39:47', '2023-08-09 14:39:47', NULL),
(80, 'brenda mcintosh', NULL, NULL, 'xibyraqule@mailinator.com', NULL, NULL, 0, '$2y$10$ZJqOE/A20RPFRMsK/.deYuX5PGU8jPX3fIA.yky3kwZ6XcS3nICCC', 0, NULL, '2023-08-09 14:48:04', '2023-08-09 14:48:04', NULL),
(81, 'nissim sellers', NULL, NULL, 'jecocuf@mailinator.com', NULL, NULL, 0, '$2y$10$p21X7kJSdssHnpkgHpjKoON0Zy4bNjsjl1EqyovfjXZYd5t3a34m6', 0, NULL, '2023-08-09 14:49:43', '2023-08-09 14:49:43', NULL),
(82, 'nathaniel alexander', NULL, NULL, 'pezuwy@mailinator.com', NULL, NULL, 0, '$2y$10$DHC2j4tsIsdUZQcYf9Cw0.huw6gsl.AnHI3UYqn78W/b1K11XROiq', 0, NULL, '2023-08-09 14:50:41', '2023-08-09 14:50:41', NULL),
(83, 'astra moore', NULL, NULL, 'fasajyxu@mailinator.com', NULL, NULL, 0, '$2y$10$GCAzonjH5VGzdQql3KDBTe3UsmPM68p4VeyoTyZ501GsacAWQO41K', 0, NULL, '2023-08-09 14:53:05', '2023-08-09 14:53:05', NULL),
(84, 'walker townsend', NULL, NULL, 'niloqyco@mailinator.com', NULL, NULL, 0, '$2y$10$2DVYkvfQNkc9PsxV5lGs7eBFJPPSUWvS5Wed68cIW/X6ShhtNTgb6', 0, NULL, '2023-08-09 14:53:49', '2023-08-09 14:53:49', NULL),
(85, 'ariel carrillo', NULL, NULL, 'vyzodukice@mailinator.com', NULL, NULL, 0, '$2y$10$xSe5SNoz2Hnq/aK.VeINWOnXzgmUovVm6XMGcD4CsRMciJGddanNq', 0, NULL, '2023-08-09 14:55:10', '2023-08-09 14:55:10', NULL),
(86, 'stephen riddle', NULL, NULL, 'zocofu@mailinator.com', NULL, NULL, 0, '$2y$10$P.3JN8vmhXEP25/PTh.svuzZ9IoQbzT77xOfmBDpGLz5fnrsy4vB2', 0, NULL, '2023-08-09 14:59:17', '2023-08-09 14:59:17', NULL),
(87, 'abbot richard', NULL, NULL, 'pefur@mailinator.com', NULL, NULL, 0, '$2y$10$utHv23QYX8BijHggDE71s.S4JS5NBDW6DpYlxBHrYns/G1PF1JluG', 0, NULL, '2023-08-09 15:00:27', '2023-08-09 15:00:27', NULL),
(88, 'tanya kennedy', NULL, NULL, 'cokibogu@mailinator.com', NULL, NULL, 0, '$2y$10$M90R/FQ/xcemUGYJHBuvL..ijJCqIt6N9FWETf0CdK0eZj1hEJ/9O', 0, NULL, '2023-08-09 15:01:30', '2023-08-09 15:01:30', NULL),
(89, 'hassan', NULL, NULL, 'hassanjrasasdaso@gmail.com', NULL, NULL, 0, '$2y$10$6D1Z0ZG107yK/Q72xIj9H.q39zK96tlGIeZqDqfF5R4jhTbhi84ya', 0, NULL, '2023-08-09 15:34:06', '2023-08-09 15:34:06', NULL),
(90, 'hassanj', NULL, NULL, 'hassajrao@gmail.com', NULL, NULL, 0, '$2y$10$iIZpHOCHK4XC.cKvUtcSf.Un60iE.EbKkUsjj0jx4SFKlpUEjMaDC', 0, NULL, '2023-08-09 16:05:30', '2023-08-09 16:05:30', NULL),
(91, 'hassan', NULL, NULL, 'hass@m.com', NULL, NULL, 0, '$2y$10$pQqIro05z5XHsjPMRtCmQ.8QDRk4KvM.KQA3Iy0/aHds1HglSoobm', 0, NULL, '2023-08-10 12:16:07', '2023-08-10 12:16:07', NULL),
(92, 'hassan', NULL, NULL, 'hassanjrr@m.com', NULL, NULL, 1, '$2y$10$oHpYyqWd0ZMWttKy2lLx.eCroKotFCGrAqkw7x7V9AKXn8.VZvEi.', 0, NULL, '2023-08-11 14:16:59', '2023-08-20 15:35:31', '2023-08-20 15:35:31'),
(93, 'tutir', NULL, NULL, 'tutuu@m.com', NULL, NULL, 0, '$2y$10$B/zcTuJpxBAky1tlSfRFaee1GFxfqghKqZYr..6PjZ6zKPGReLScO', 0, NULL, '2023-08-11 14:18:52', '2023-08-11 14:21:23', NULL),
(94, 'hassan', NULL, NULL, 'hassane@m.com', NULL, NULL, 0, '$2y$10$o6J.nuMHfMK.F5RO2rP99OWh1JffueQfFA59Ozg8/QO5U5HQ7QNOW', 0, NULL, '2023-08-11 17:04:08', '2023-08-11 17:04:08', NULL),
(95, 'hassan', '2', 'male', 'assa@m.com', NULL, NULL, 0, '$2y$10$qGx/LPGsO5wExcI4JiW7AueAkpA4Q2nYbaypOPcHZHDKKTB.JDsYS', 0, NULL, '2023-08-11 17:05:34', '2023-08-11 17:05:34', NULL),
(96, 'test tutor', '28', 'male', 'tutu@m.com', NULL, NULL, 0, '$2y$10$/1sdEiLgDNvcuWtcY8KTjejP5xrQegj/3o4Ia59GK.Mz4jvBaN62S', 0, NULL, '2023-08-11 17:09:35', '2023-08-11 17:10:31', NULL),
(97, 'hassan', '12', 'masculino', 'js@m.com', NULL, NULL, 0, '$2y$10$3kMKlcVasDml/miIbgp8v..6aSAwnfyaPr6QcgmbI.uEFeNl8aBLS', 0, NULL, '2023-08-12 14:40:41', '2023-08-12 14:40:41', NULL),
(98, 'hassn', '23', 'masculino', 'sds@m.com', NULL, NULL, 0, '$2y$10$r9TqzR3tDyH0BIW6YpXkquGmSfDXZNpWsg/w4Q6wYr7DfCQiy75JS', 0, NULL, '2023-08-12 14:44:11', '2023-08-12 14:44:11', NULL),
(99, 'has', '23', 'masculino', 'hasda@m.com', NULL, NULL, 0, '$2y$10$mS4gMj/l9K8obwGgDUo9h.rcQeXgnJ5tuL3pLvP0EX/3KbtLMTaBC', 0, NULL, '2023-08-12 14:47:17', '2023-08-12 14:48:12', NULL),
(100, 'hassan', '12', 'masculino', 'ssf@m.com', NULL, NULL, 0, '$2y$10$ogqhZvpK5y/FBOukSrSBR.0gL07W1Prt/DfPWEpedv/4l3rPF71Tu', 0, NULL, '2023-08-13 11:09:23', '2023-08-13 11:12:00', NULL),
(101, 'razituto', NULL, NULL, 'hsn@ayudinga.org', 'qisuzi', NULL, 0, '$2y$10$kGWW/qug8uPcNrOT7UoZoeMSbLYR6jaD3yBeUW6hhlMSG.6ujg4PC', 0, NULL, '2023-08-16 14:58:21', '2023-08-16 15:03:04', NULL),
(102, 'hass', '23', 'masculino', 'hassan@mmasd.com', NULL, NULL, 0, '$2y$10$dsy5QD7dcyMl6jKH.65n.umOHC0JVjrAz1CyNGYlurd/33NHXdpIG', 0, NULL, '2023-08-20 12:32:35', '2023-08-20 12:32:35', NULL),
(103, 'modi assumenda et li', '49', 'femenino', 'tigotecew@mailinator.com', NULL, NULL, 0, '$2y$10$HxTnPvjW5Ph/wOGB/fYcOe6823y.YGZNNbz8P/M9.3qEGnzaAoDhO', 0, NULL, '2023-08-20 12:37:33', '2023-08-20 12:37:33', NULL),
(104, 'qui ut cupidatat qui', '43', 'masculino', 'gazyh@mailinator.com', NULL, NULL, 0, '$2y$10$W1svZTHghBqpDDbYLN/UWeyjTDe28A98aZKcYW4ORhpWR1t1ox3mK', 0, NULL, '2023-08-20 12:39:09', '2023-08-20 12:39:09', NULL),
(105, 'voluptatem provident', '100', 'femenino', 'xyfotoj@mailinator.com', NULL, NULL, 0, '$2y$10$.6c7SPplIk5ZIY02tJ7yq.Tgvijqoee1e2fQoD2RlA.MZuoZMhk1q', 0, NULL, '2023-08-20 12:39:29', '2023-08-20 12:39:29', NULL),
(106, 'officia minim exerci', '36', 'masculino', 'civavo@mailinator.com', NULL, NULL, 0, '$2y$10$7Zz9Spvp5fY5rA/0216nuurHszyyp71magj1Dg4.f2GtRfvXsX2B6', 0, NULL, '2023-08-20 12:44:56', '2023-08-20 12:44:56', NULL),
(107, 'omnis ullam in venia', '51', 'masculino', 'qyzideziri@mailinator.com', NULL, NULL, 0, '$2y$10$fAUQnzdWHyjEwW5Z9gt/6.bhO8o1ARc8F7mDPdRgs98L8Wc.hJAIy', 0, NULL, '2023-08-20 12:46:14', '2023-08-20 12:46:14', NULL),
(108, 'nihil rerum iste dol', '50', 'masculino', 'hujojejic@mailinator.com', NULL, NULL, 0, '$2y$10$fgqyxjzUAd1hcDh7l0XIhObkQGnKs/lponEQHxvZid4smb.PAzvBm', 0, NULL, '2023-08-20 12:47:36', '2023-08-20 12:47:36', NULL),
(109, 'delectus tempor adi', '72', 'masculino', 'xosob@mailinator.com', NULL, NULL, 0, '$2y$10$Q4DE8/wPSbLNHhSYMyVgnuWuws9kr2u5RJnPzoVWzvoXCMsB6r5OS', 0, NULL, '2023-08-20 12:48:20', '2023-08-20 12:48:20', NULL),
(110, 'dolorem placeat tem', '70', 'masculino', 'zicymac@mailinator.com', NULL, NULL, 0, '$2y$10$28bTsNi06G7a.ho8AYsxHOjlgtsC.IlAC4d.pQgCycQk9G/inDbb6', 0, NULL, '2023-08-20 12:59:04', '2023-08-20 13:00:05', NULL),
(111, 'ipsam magni consequa', '95', 'masculino', 'hsn@m.com', NULL, NULL, 0, '$2y$10$mJWpGuJQmYb5yoOKkR5hnuPE.mL6cTke4i4NuyLOWnjgK5mBgvNYe', 0, NULL, '2023-08-20 13:46:18', '2023-08-20 15:01:39', NULL),
(112, 'nihil rerum ea alias', '67', 'masculino', 'daqovyk@mailinator.com', NULL, NULL, 0, '$2y$10$9h0udONZ5.DnXXgCA/gQdOpuwwWp18Ts4T6ZPL7DaaZrLuNxemiia', 0, NULL, '2023-08-20 13:49:03', '2023-08-20 13:49:03', NULL),
(113, 'sint inventore nost', '82', 'masculino', 'xabory@mailinator.com', NULL, NULL, 0, '$2y$10$10gBDe6f.WzczJUUz6SIi.UU1nsxF6a6/Myjt/lzYqnkDA5sC68qm', 0, NULL, '2023-08-20 14:41:42', '2023-08-20 14:41:42', NULL),
(114, 'fuvix', NULL, NULL, 'vugis@ayudinga.org', 'futur', NULL, 0, '$2y$10$X5VjfHyb87nYRUvcN599Mu.pSv9uCNJcrIcvgbr9QOBEx8TpRAski', 0, NULL, '2023-08-21 05:29:43', '2023-08-21 05:29:43', NULL),
(115, 'mageris', NULL, NULL, 'gyty@ayudinga.org', 'vecyh', '2023-08-21 05:56:04', 0, '$2y$10$oXACC9e17ytMS4/bFtnaq.FJXGFR.TyUqIHquZCN58orP7A6fcgIG', 0, NULL, '2023-08-21 05:35:04', '2023-08-21 05:56:04', NULL),
(116, 'jbatista', NULL, NULL, 'jbatista@ayudinga.org', 'Presidente y Fundador', NULL, 0, '$2y$10$g1dTjuafFDUVMsiMKC/W..WNQ8Rnq8.1Mk8KzDinJ8vZG4YodxPva', 1, NULL, '2023-08-23 15:00:35', '2023-08-23 15:11:57', NULL),
(117, 'keving', NULL, NULL, 'keving@ayudinga.org', 'Director de Tecnología e Investigación Educativa', NULL, 0, '$2y$10$lAfLEAskdHxRB7/8xd85Y..XMlv9Go3yfuTw75s/H05F7Uhym5jXq', 0, NULL, '2023-08-23 15:00:35', '2023-08-23 15:00:35', NULL),
(118, 'rriley', NULL, NULL, 'rriley@ayudinga.org', 'Director de Contenidos', NULL, 0, '$2y$10$gzFyJlQvx2bdQJzGIqAWbOKu83U3ubj9vnXzEbknd1MZwu6h1BGHG', 0, NULL, '2023-08-23 15:00:36', '2023-08-23 15:00:36', NULL),
(119, 'lvergara', NULL, NULL, 'lvergara@ayudinga.org', 'Director de Voluntariado', NULL, 0, '$2y$10$.XSO1ADPZQiVF08JGMgxWumEqqra3a3xyMhYxtlHJODYZpRFzxGKG', 0, NULL, '2023-08-23 15:00:36', '2023-08-23 15:00:36', NULL),
(120, 'mgonzalez', NULL, NULL, 'mgonzalez@ayudinga.org', 'Analista Curricular', NULL, 0, '$2y$10$v/Fhmn6vWLG.N/ClAEI.JepH7q8JKgAwjwiCO11Ozrl0oJsx0YO22', 0, NULL, '2023-08-23 15:00:36', '2023-08-23 15:00:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_responses`
--

DROP TABLE IF EXISTS `user_responses`;
CREATE TABLE IF NOT EXISTS `user_responses` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `question_id` bigint UNSIGNED NOT NULL,
  `possible_answer_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_responses_user_id_foreign` (`user_id`),
  KEY `user_responses_question_id_foreign` (`question_id`),
  KEY `user_responses_possible_answer_id_foreign` (`possible_answer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_responses`
--

INSERT INTO `user_responses` (`id`, `user_id`, `question_id`, `possible_answer_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 111, 141, 2, '2023-08-20 14:53:56', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(2, 111, 142, 2, '2023-08-20 14:53:56', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(3, 111, 143, 2, '2023-08-20 14:53:56', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(4, 111, 144, 3, '2023-08-20 14:53:56', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(5, 111, 145, 3, '2023-08-20 14:53:56', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(6, 111, 146, 3, '2023-08-20 14:53:56', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(7, 111, 147, 5, '2023-08-20 14:53:56', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(8, 111, 148, 2, '2023-08-20 14:53:56', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(9, 111, 149, 2, '2023-08-20 14:53:56', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(10, 111, 150, 3, '2023-08-20 14:53:56', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(11, 111, 151, 2, '2023-08-20 14:55:25', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(12, 111, 152, 2, '2023-08-20 14:55:25', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(13, 111, 153, 2, '2023-08-20 14:55:25', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(14, 111, 154, 2, '2023-08-20 14:55:25', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(15, 111, 155, 5, '2023-08-20 14:55:25', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(16, 111, 156, 2, '2023-08-20 14:55:25', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(17, 111, 157, 2, '2023-08-20 14:55:25', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(18, 111, 158, 5, '2023-08-20 14:55:25', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(19, 111, 159, 2, '2023-08-20 14:55:25', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(20, 111, 160, 2, '2023-08-20 14:55:25', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(21, 111, 161, 2, '2023-08-20 14:55:46', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(22, 111, 162, 2, '2023-08-20 14:55:46', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(23, 111, 163, 2, '2023-08-20 14:55:46', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(24, 111, 164, 2, '2023-08-20 14:55:46', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(25, 111, 165, 2, '2023-08-20 14:55:46', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(26, 111, 166, 5, '2023-08-20 14:55:46', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(27, 111, 167, 5, '2023-08-20 14:55:46', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(28, 111, 168, 5, '2023-08-20 14:55:46', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(29, 111, 169, 2, '2023-08-20 14:55:46', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(30, 111, 170, 2, '2023-08-20 14:55:46', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(31, 111, 171, 2, '2023-08-20 14:56:01', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(32, 111, 172, 2, '2023-08-20 14:56:01', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(33, 111, 173, 2, '2023-08-20 14:56:01', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(34, 111, 174, 5, '2023-08-20 14:56:01', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(35, 111, 175, 5, '2023-08-20 14:56:01', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(36, 111, 176, 5, '2023-08-20 14:56:01', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(37, 111, 177, 5, '2023-08-20 14:56:01', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(38, 111, 178, 2, '2023-08-20 14:56:01', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(39, 111, 179, 2, '2023-08-20 14:56:01', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(40, 111, 180, 2, '2023-08-20 14:56:01', '2023-08-20 15:01:39', '2023-08-20 15:01:39'),
(41, 111, 141, 2, '2023-08-20 15:02:03', '2023-08-20 15:02:47', '2023-08-20 15:02:47'),
(42, 111, 142, 2, '2023-08-20 15:02:03', '2023-08-20 15:02:47', '2023-08-20 15:02:47'),
(43, 111, 143, 2, '2023-08-20 15:02:03', '2023-08-20 15:02:47', '2023-08-20 15:02:47'),
(44, 111, 144, 2, '2023-08-20 15:02:03', '2023-08-20 15:02:47', '2023-08-20 15:02:47'),
(45, 111, 145, 2, '2023-08-20 15:02:03', '2023-08-20 15:02:47', '2023-08-20 15:02:47'),
(46, 111, 146, 2, '2023-08-20 15:02:03', '2023-08-20 15:02:47', '2023-08-20 15:02:47'),
(47, 111, 147, 2, '2023-08-20 15:02:03', '2023-08-20 15:02:47', '2023-08-20 15:02:47'),
(48, 111, 148, 2, '2023-08-20 15:02:03', '2023-08-20 15:02:47', '2023-08-20 15:02:47'),
(49, 111, 149, 2, '2023-08-20 15:02:03', '2023-08-20 15:02:47', '2023-08-20 15:02:47'),
(50, 111, 150, 2, '2023-08-20 15:02:03', '2023-08-20 15:02:47', '2023-08-20 15:02:47'),
(51, 111, 151, 2, '2023-08-20 15:02:18', '2023-08-20 15:02:47', '2023-08-20 15:02:47'),
(52, 111, 152, 2, '2023-08-20 15:02:18', '2023-08-20 15:02:47', '2023-08-20 15:02:47'),
(53, 111, 153, 2, '2023-08-20 15:02:18', '2023-08-20 15:02:47', '2023-08-20 15:02:47'),
(54, 111, 154, 5, '2023-08-20 15:02:18', '2023-08-20 15:02:47', '2023-08-20 15:02:47'),
(55, 111, 155, 2, '2023-08-20 15:02:18', '2023-08-20 15:02:47', '2023-08-20 15:02:47'),
(56, 111, 156, 2, '2023-08-20 15:02:18', '2023-08-20 15:02:47', '2023-08-20 15:02:47'),
(57, 111, 157, 2, '2023-08-20 15:02:18', '2023-08-20 15:02:47', '2023-08-20 15:02:47'),
(58, 111, 158, 2, '2023-08-20 15:02:18', '2023-08-20 15:02:47', '2023-08-20 15:02:47'),
(59, 111, 159, 2, '2023-08-20 15:02:18', '2023-08-20 15:02:47', '2023-08-20 15:02:47'),
(60, 111, 160, 2, '2023-08-20 15:02:18', '2023-08-20 15:02:47', '2023-08-20 15:02:47');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `learning_style_characteristics`
--
ALTER TABLE `learning_style_characteristics`
  ADD CONSTRAINT `learning_style_characteristics_learning_style_id_foreign` FOREIGN KEY (`learning_style_id`) REFERENCES `learning_styles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `learning_style_descriptions`
--
ALTER TABLE `learning_style_descriptions`
  ADD CONSTRAINT `learning_style_descriptions_learning_style_id_foreign` FOREIGN KEY (`learning_style_id`) REFERENCES `learning_styles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `learning_style_recommended_techniques`
--
ALTER TABLE `learning_style_recommended_techniques`
  ADD CONSTRAINT `learning_style_recommended_techniques_learning_style_id_foreign` FOREIGN KEY (`learning_style_id`) REFERENCES `learning_styles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_learning_style_id_foreign` FOREIGN KEY (`learning_style_id`) REFERENCES `learning_styles` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_responses`
--
ALTER TABLE `user_responses`
  ADD CONSTRAINT `user_responses_possible_answer_id_foreign` FOREIGN KEY (`possible_answer_id`) REFERENCES `possible_answers` (`id`),
  ADD CONSTRAINT `user_responses_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`),
  ADD CONSTRAINT `user_responses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
