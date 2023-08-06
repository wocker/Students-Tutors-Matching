<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "<p>Respuestas guardadas exitosamente</p>";
}
?>

<form action="r_tutores.php" method="post">
  <h1>Cuestionario</h1>
  <h2>Estilos de Enseñanza</h2>
  <form action="r_tutores.php" method="post">
    <label for="pregunta1"><b>Pregunta 1</b>: Hechos, conceptos y principios son las cosas más importantes que los estudiantes deben adquirir.</label><br>
    <input type="radio" name="pregunta1" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta1" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta1" value="3"> Indeciso<br>
    <input type="radio" name="pregunta1" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta1" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta2"><b>Pregunta 2</b>:Establezco estándares altos para los estudiantes en esta clase.</label><br>
    <input type="radio" name="pregunta2" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta2" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta2" value="3"> Indeciso<br>
    <input type="radio" name="pregunta2" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta2" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta3"><b>Pregunta 3</b>: Lo que digo y hago modela formas apropiadas para que los estudiantes piensen sobre los temas del contenido.</label><br>
    <input type="radio" name="pregunta3" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta3" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta3" value="3"> Indeciso<br>
    <input type="radio" name="pregunta3" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta3" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta4"><b>Pregunta 4</b>: Mis objetivos y métodos de enseñanza abordan una variedad de estilos de aprendizaje de los estudiantes.</label><br>
    <input type="radio" name="pregunta4" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta4" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta4" value="3"> Indeciso<br>
    <input type="radio" name="pregunta4" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta4" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta5">Pregunta 5: Los estudiantes suelen trabajar solos en los proyectos del curso con poca supervisión por mi parte.</label><br>
    <input type="radio" name="pregunta5" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta5" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta5" value="3"> Indeciso<br>
    <input type="radio" name="pregunta5" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta5" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta6">Pregunta 6: Compartir mi conocimiento y experiencia con los estudiantes es muy importante para mí.</label><br>
    <input type="radio" name="pregunta6" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta6" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta6" value="3"> Indeciso<br>
    <input type="radio" name="pregunta6" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta6" value="5"> Totalmente de acuerdo<br>
    <input type="submit" value="Enviar">  
    
    <label for="pregunta7">Pregunta 7: Doy retroalimentación negativa a los estudiantes cuando su desempeño no es satisfactorio.</label><br>
    <input type="radio" name="pregunta7" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta7" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta7" value="3"> Indeciso<br>
    <input type="radio" name="pregunta7" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta7" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta8">Pregunta 8: Las actividades en esta clase alientan a los estudiantes a desarrollar sus ideas sobre temas de contenido.</label><br>
    <input type="radio" name="pregunta8" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta8" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta8" value="3"> Indeciso<br>
    <input type="radio" name="pregunta8" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta8" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta9">Pregunta 9: Dedico tiempo a consultar con los estudiantes sobre cómo mejorar su trabajo en proyectos individuales y grupales.</label><br>
    <input type="radio" name="pregunta9" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta9" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta9" value="3"> Indeciso<br>
    <input type="radio" name="pregunta9" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta9" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta10">Pregunta 10: Las actividades en esta clase alientan a los estudiantes a desarrollar sus ideas sobre temas de contenido.</label><br>
    <input type="radio" name="pregunta10" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta10" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta10" value="3"> Indeciso<br>
    <input type="radio" name="pregunta10" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta10" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta11">Pregunta 11: Lo que tengo que decir sobre un tema es esencial para que los estudiantes adquieran una perspectiva más amplia sobre los problemas de esa área.</label><br>
    <input type="radio" name="pregunta11" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta11" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta11" value="3"> Indeciso<br>
    <input type="radio" name="pregunta11" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta11" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta12">Pregunta 12: Los estudiantes describirían mis estándares y expectativas como algo estrictos y rígidos.</label><br>
    <input type="radio" name="pregunta12" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta12" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta12" value="3"> Indeciso<br>
    <input type="radio" name="pregunta12" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta12" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta13">Pregunta 13: Normalmente muestro a los estudiantes cómo y qué hacer para dominar el contenido del curso.</label><br>
    <input type="radio" name="pregunta13" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta13" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta13" value="3"> Indeciso<br>
    <input type="radio" name="pregunta13" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta13" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta14">Pregunta 14: Las discusiones en grupos pequeños ayudan a los estudiantes a desarrollar su capacidad de pensar críticamente.</label><br>
    <input type="radio" name="pregunta14" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta14" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta14" value="3"> Indeciso<br>
    <input type="radio" name="pregunta14" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta14" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta15">Pregunta 15: Los estudiantes diseñan una de las experiencias de aprendizaje más autodirigidas.</label><br>
    <input type="radio" name="pregunta15" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta15" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta15" value="3"> Indeciso<br>
    <input type="radio" name="pregunta15" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta15" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta16">Pregunta 16: Quiero que los estudiantes dejen este curso bien preparados para seguir trabajando en esta área.</label><br>
    <input type="radio" name="pregunta16" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta16" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta16" value="3"> Indeciso<br>
    <input type="radio" name="pregunta16" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta16" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta17">Pregunta 17: Soy responsable de definir lo que los estudiantes deben aprender y cómo deben aprenderlo.</label><br>
    <input type="radio" name="pregunta17" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta17" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta17" value="3"> Indeciso<br>
    <input type="radio" name="pregunta17" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta17" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta18">Pregunta 18: Los ejemplos de mis experiencias personales a menudo ilustran puntos sobre el material.</label><br>
    <input type="radio" name="pregunta18" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta18" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta18" value="3"> Indeciso<br>
    <input type="radio" name="pregunta18" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta18" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta19">Pregunta 19: Guío el trabajo de los estudiantes en los proyectos del curso haciéndoles preguntas, explorando opciones y sugiriendo formas alternativas.</label><br>
    <input type="radio" name="pregunta19" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta19" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta19" value="3"> Indeciso<br>
    <input type="radio" name="pregunta19" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta19" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta20">Pregunta 20: Desarrollar la capacidad de los estudiantes para pensar y trabajar de forma independiente es un objetivo importante.</label><br>
    <input type="radio" name="pregunta20" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta20" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta20" value="3"> Indeciso<br>
    <input type="radio" name="pregunta20" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta20" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta21">Pregunta 21: Dar conferencias es una parte importante de cómo enseño cada sesión de clase.</label><br>
    <input type="radio" name="pregunta21" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta21" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta21" value="3"> Indeciso<br>
    <input type="radio" name="pregunta21" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta21" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta22">Pregunta 22: Proporciono pautas obvias sobre cómo quiero que se completen las tareas en este curso.</label><br>
    <input type="radio" name="pregunta22" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta22" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta22" value="3"> Indeciso<br>
    <input type="radio" name="pregunta22" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta22" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta23">Pregunta 23: A menudo muestro a los estudiantes cómo pueden usar varios principios y conceptos.</label><br>
    <input type="radio" name="pregunta23" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta23" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta23" value="3"> Indeciso<br>
    <input type="radio" name="pregunta23" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta23" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta24">Pregunta 24: Las actividades del curso alientan a los estudiantes a tomar la iniciativa y la responsabilidad de su aprendizaje.</label><br>
    <input type="radio" name="pregunta24" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta24" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta24" value="3"> Indeciso<br>
    <input type="radio" name="pregunta24" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta24" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta25">Pregunta 25: Los estudiantes asumen la responsabilidad de impartir parte de las sesiones de clase.</label><br>
    <input type="radio" name="pregunta25" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta25" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta25" value="3"> Indeciso<br>
    <input type="radio" name="pregunta25" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta25" value="5"> Totalmente de acuerdo<br>
    
    <label for="pregunta26">Pregunta 26: Mi experiencia generalmente se usa para resolver desacuerdos sobre problemas de contenido.</label><br>
    <input type="radio" name="pregunta26" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta26" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta26" value="3"> Indeciso<br>
    <input type="radio" name="pregunta26" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta26" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta27">Pregunta 27: Este curso tiene metas y objetivos concretos que quiero lograr.</label><br>
    <input type="radio" name="pregunta27" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta27" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta27" value="3"> Indeciso<br>
    <input type="radio" name="pregunta27" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta27" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta28">Pregunta 28: Los estudiantes reciben frecuentes comentarios verbales y escritos sobre su desempeño.</label><br>
    <input type="radio" name="pregunta28" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta28" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta28" value="3"> Indeciso<br>
    <input type="radio" name="pregunta28" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta28" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta29">Pregunta 29: Solicito el consejo de los estudiantes sobre cómo y qué enseñar en este curso.</label><br>
    <input type="radio" name="pregunta29" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta29" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta29" value="3"> Indeciso<br>
    <input type="radio" name="pregunta29" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta29" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta30">Pregunta 30: Los estudiantes establecen su propio ritmo para completar proyectos independientes y grupales.</label><br>
    <input type="radio" name="pregunta30" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta30" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta30" value="3"> Indeciso<br>
    <input type="radio" name="pregunta30" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta30" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta31">Pregunta 31: Los estudiantes pueden describirme como un "almacén de conocimiento" que proporciona los hechos, principios y conceptos que necesitan.</label><br>
    <input type="radio" name="pregunta31" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta31" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta31" value="3"> Indeciso<br>
    <input type="radio" name="pregunta31" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta31" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta32">Pregunta 32: El plan de estudios define claramente mis expectativas sobre lo que quiero que hagan los estudiantes en esta clase.</label><br>
    <input type="radio" name="pregunta32" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta32" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta32" value="3"> Indeciso<br>
    <input type="radio" name="pregunta32" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta32" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta33">Pregunta 33: Eventualmente, muchos estudiantes comenzaron a pensar como yo sobre el contenido del curso.</label><br>
    <input type="radio" name="pregunta33" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta33" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta33" value="3"> Indeciso<br>
    <input type="radio" name="pregunta33" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta33" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta34">Pregunta 34: Los estudiantes pueden elegir entre actividades para completar los requisitos del curso.</label><br>
    <input type="radio" name="pregunta34" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta34" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta34" value="3"> Indeciso<br>
    <input type="radio" name="pregunta34" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta34" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta35">Pregunta 35: Mi enfoque de la enseñanza es similar al de un gerente de un grupo de trabajo que delega tareas y responsabilidades a sus subordinados.</label><br>
    <input type="radio" name="pregunta35" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta35" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta35" value="3"> Indeciso<br>
    <input type="radio" name="pregunta35" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta35" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta36">Pregunta 36: Este curso tiene más material del que tengo tiempo disponible para cubrir.</label><br>
    <input type="radio" name="pregunta36" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta36" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta36" value="3"> Indeciso<br>
    <input type="radio" name="pregunta36" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta36" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta37">Pregunta 37: Mis estándares y expectativas ayudan a los estudiantes a desarrollar la disciplina que necesitan aprender.</label><br>
    <input type="radio" name="pregunta37" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta37" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta37" value="3"> Indeciso<br>
    <input type="radio" name="pregunta37" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta37" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta38">Pregunta 38: Los estudiantes pueden describirme como un "entrenador" que trabaja en estrecha colaboración con alguien para corregir problemas en su forma de pensar y comportarse.</label><br>
    <input type="radio" name="pregunta38" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta38" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta38" value="3"> Indeciso<br>
    <input type="radio" name="pregunta38" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta38" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta39">Pregunta 39: Doy a los estudiantes mucho apoyo personal y aliento para que les vaya bien en este curso.</label><br>
    <input type="radio" name="pregunta39" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta39" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta39" value="3"> Indeciso<br>
    <input type="radio" name="pregunta39" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta39" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta40">Pregunta 40: Asumo el papel de una persona de recursos disponible para los estudiantes cuando necesitan ayuda.</label><br>
    <input type="radio" name="pregunta40" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta40" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta40" value="3"> Indeciso<br>
    <input type="radio" name="pregunta40" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta40" value="5"> Totalmente de acuerdo<br>
</form> 

</body>
</html>
