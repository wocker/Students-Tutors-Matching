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
    <label for="pregunta1">Pregunta 1: Hechos, conceptos y principios son las cosas más importantes que los estudiantes deben adquirir.</label><br>
    <input type="radio" name="pregunta1" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta1" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta1" value="3"> Indeciso<br>
    <input type="radio" name="pregunta1" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta1" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta2">Pregunta 2:Establezco estándares altos para los estudiantes en esta clase.</label><br>
    <input type="radio" name="pregunta2" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta2" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta2" value="3"> Indeciso<br>
    <input type="radio" name="pregunta2" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta2" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta3">Pregunta 3: Lo que digo y hago modela formas apropiadas para que los estudiantes piensen sobre los temas del contenido.</label><br>
    <input type="radio" name="pregunta3" value="1"> Totalmente en desacuerdo<br>
    <input type="radio" name="pregunta3" value="2"> Moderadamente en desacuerdo<br>
    <input type="radio" name="pregunta3" value="3"> Indeciso<br>
    <input type="radio" name="pregunta3" value="4"> Moderadamente de acuerdo<br>
    <input type="radio" name="pregunta3" value="5"> Totalmente de acuerdo<br>

    <label for="pregunta4">Pregunta 4: Mis objetivos y métodos de enseñanza abordan una variedad de estilos de aprendizaje de los estudiantes.</label><br>
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

    <input type="submit" value="Enviar">    
</form> 

</body>
</html>
