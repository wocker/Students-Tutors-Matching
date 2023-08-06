<!DOCTYPE html>
<html>
<head>
    <title>Cuestionario</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FAFAFA;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .quiz-section {
            margin-bottom: 20px;
        }

        .quiz-section label {
            display: block;
            margin-bottom: 10px;
        }

        .quiz-section input[type="radio"] {
            margin: 5px;
        }

        .btn {
            font-family: 'Roboto', sans-serif;
            padding: 10px 20px;
            margin: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            text-decoration: none;
            font-size: 1.1em;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        #unanswered {
            color: red;
            display: none;
        }

        #progress {
            width: 100%;
            background-color: #f3f3f3;
            border: 1px solid #bbb;
            height: 20px;
            border-radius: 10px;
        }

        #progress-bar {
            height: 100%;
            background-color: #007bff;
            width: 0;
        }
    </style>
</head>
<body>
<h1>Cuestionario</h1>
<h2>Estilos de Enseñanza | Tutores en #PilandoAndo</h2>
<form id="quizForm" method="POST" action="r_tutores.php">
<?php
        $questions = array(
            "Hechos, conceptos y principios son las cosas más importantes que los estudiantes deben adquirir.",
            "Establezco estándares altos para los estudiantes en esta clase.",
            "Lo que digo y hago modela formas apropiadas para que los estudiantes piensen sobre los temas del contenido.",
            "Mis objetivos y métodos de enseñanza abordan una variedad de estilos de aprendizaje de los estudiantes.",
            "Los estudiantes suelen trabajar solos en los proyectos del curso con poca supervisión por mi parte.",
            "Compartir mi conocimiento y experiencia con los estudiantes es muy importante para mí.",
            "Doy retroalimentación negativa a los estudiantes cuando su desempeño no es satisfactorio.",
            "Las actividades en esta clase alientan a los estudiantes a desarrollar sus ideas sobre temas de contenido.",
            "Dedico tiempo a consultar con los estudiantes sobre cómo mejorar su trabajo en proyectos individuales y grupales.",
            "Las actividades en esta clase alientan a los estudiantes a desarrollar sus ideas sobre temas de contenido.",
            "Lo que tengo que decir sobre un tema es esencial para que los estudiantes adquieran una perspectiva más amplia sobre los problemas de esa área.",
            "Los estudiantes describirían mis estándares y expectativas como algo estrictos y rígidos.",
            "Normalmente muestro a los estudiantes cómo y qué hacer para dominar el contenido del curso.",
            "Las discusiones en grupos pequeños ayudan a los estudiantes a desarrollar su capacidad de pensar críticamente.",
            "Los estudiantes diseñan una de las experiencias de aprendizaje más autodirigidas.",
            "Quiero que los estudiantes dejen este curso bien preparados para seguir trabajando en esta área.",
            "Soy responsable de definir lo que los estudiantes deben aprender y cómo deben aprenderlo.",
            "Los ejemplos de mis experiencias personales a menudo ilustran puntos sobre el material.",
            "Guío el trabajo de los estudiantes en los proyectos del curso haciéndoles preguntas, explorando opciones y sugiriendo formas alternativas.",
            "Desarrollar la capacidad de los estudiantes para pensar y trabajar de forma independiente es un objetivo importante.",
            "Dar conferencias es una parte importante de cómo enseño cada sesión de clase.",
            "Proporciono pautas obvias sobre cómo quiero que se completen las tareas en este curso.",
            "A menudo muestro a los estudiantes cómo pueden usar varios principios y conceptos.",
            "Las actividades del curso alientan a los estudiantes a tomar la iniciativa y la responsabilidad de su aprendizaje.",
            "Los estudiantes asumen la responsabilidad de impartir parte de las sesiones de clase.",
            "Mi experiencia generalmente se usa para resolver desacuerdos sobre problemas de contenido.",
            "Este curso tiene metas y objetivos concretos que quiero lograr.",
            "Los estudiantes reciben frecuentes comentarios verbales y escritos sobre su desempeño.",
            "Solicito el consejo de los estudiantes sobre cómo y qué enseñar en este curso.",
            "Los estudiantes establecen su propio ritmo para completar proyectos independientes y grupales.",
            "Los estudiantes pueden describirme como un \"almacén de conocimiento\" que proporciona los hechos, principios y conceptos que necesitan.",
            "El plan de estudios define claramente mis expectativas sobre lo que quiero que hagan los estudiantes en esta clase.",
            "Eventualmente, muchos estudiantes comenzaron a pensar como yo sobre el contenido del curso.",
            "Los estudiantes pueden elegir entre actividades para completar los requisitos del curso.",
            "Mi enfoque de la enseñanza es similar al de un gerente de un grupo de trabajo que delega tareas y responsabilidades a sus subordinados.",
            "Este curso tiene más material del que tengo tiempo disponible para cubrir.",
            "Mis estándares y expectativas ayudan a los estudiantes a desarrollar la disciplina que necesitan aprender.",
            "Los estudiantes pueden describirme como un \"entrenador\" que trabaja en estrecha colaboración con alguien para corregir problemas en su forma de pensar y comportarse.",
            "Doy a los estudiantes mucho apoyo personal y aliento para que les vaya bien en este curso.",
            "Asumo el papel de una persona de recursos disponible para los estudiantes cuando necesitan ayuda."
        );
        $options = array(
            "Totalmente en desacuerdo",
            "Moderadamente en desacuerdo",
            "Indeciso",
            "Moderadamente de acuerdo",
            "Totalmente de acuerdo",
        );
        for ($i = 1; $i <= count($questions); $i++) {
            if (($i-1) % 10 == 0) {
                // cerrar el div anterior si no es la primera iteración
                if ($i != 1) {
                    echo '</div>';
                }
                // abrir un nuevo div para la siguiente sección
                echo '<div class="quiz-section" id="section' . ceil($i / 10) . '">';
            }
            echo '<label for="pregunta' . $i . '"><b>Pregunta ' . $i . '</b>: ' . $questions[$i-1] . '</label><br>';
            for ($j = 1; $j <= 5; $j++) {
                echo '<input type="radio" name="pregunta' . $i . '" value="' . $j . '"> ' . $options[$j-1] . '<br>';
            }
            // cerrar el último div si es la última pregunta
            if ($i == count($questions)) {
                echo '</div>';
            }
        }
        ?>
</form>
<div>
    <div id="progress">
        <div id="progress-bar"></div>
    </div>
    <input type="button" id="nextButton" class="btn" value="Siguiente">
    <p id="unanswered"></p>
    <input type="submit" class="btn" value="Enviar" style="display: none;" id="submitButton">
</div>

<script>
var currentSection = 1;
var totalSections = Math.ceil(<?php echo count($questions); ?> / 10);

window.onload = function() {
    var sections = document.getElementsByClassName('quiz-section');
    for (var i = 0; i < sections.length; i++) {
        sections[i].style.display = 'none';
    }
    document.getElementById('section1').style.display = 'block';

    document.getElementById('nextButton').addEventListener('click', function() {
        /* Código JavaScript... */
        // Actualizar la barra de progreso
        var progressBar = document.getElementById('progress-bar');
        progressBar.style.width = (currentSection / totalSections * 100) + '%';
    });
};
</script>
</body>
<footer>
    <div class="footer">
        <h4>Powered by:</h4>
        <img class="logo" src="img/logo_ayudinga.png" alt="Fundación Ayudinga" href="https://ayudinga.org" height="100" width="100">
    </div>
</footer>
</html>
