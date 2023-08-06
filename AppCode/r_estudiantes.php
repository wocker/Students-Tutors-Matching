<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "jbatista";
    $password = "G9vKCWQjMHF?$9q";
    $dbname = "emparejamiento";

    // Crea la conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica la conexión
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Recoge las respuestas del formulario y aplica htmlspecialchars para prevenir ataques XSS
    for ($i = 1; $i <= 40; $i++) {
        if (!isset($_POST['pregunta'.$i])) {
            die("Error: No se proporcionó la pregunta $i.");
        }
        ${'pregunta'.$i} = htmlspecialchars($_POST['pregunta'.$i]);
    }

    // Preparar la declaración SQL para prevenir la inyección SQL
    $stmt = $conn->prepare("INSERT INTO estudiantes (pregunta1, pregunta2, pregunta3, pregunta4, pregunta5, pregunta6, pregunta7, pregunta8, pregunta9, pregunta10, pregunta11, pregunta12, pregunta13, pregunta14, pregunta15, pregunta16, pregunta17, pregunta18, pregunta19, pregunta20, pregunta21, pregunta22, pregunta23, pregunta24, pregunta25, pregunta26, pregunta27, pregunta28, pregunta29, pregunta30, pregunta31, pregunta32, pregunta33, pregunta34, pregunta35, pregunta36, pregunta37, pregunta38, pregunta39, pregunta40) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Enlaza las variables a la declaración preparada como parámetros
    $stmt->bind_param("iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii", $pregunta1, $pregunta2, $pregunta3, $pregunta4, $pregunta5, $pregunta6, $pregunta7, $pregunta8, $pregunta9, $pregunta10, $pregunta11, $pregunta12, $pregunta13, $pregunta14, $pregunta15, $pregunta16, $pregunta17, $pregunta18, $pregunta19, $pregunta20, $pregunta21, $pregunta22, $pregunta23, $pregunta24, $pregunta25, $pregunta26, $pregunta27, $pregunta28, $pregunta29, $pregunta30, $pregunta31, $pregunta32, $pregunta33, $pregunta34, $pregunta35, $pregunta36, $pregunta37, $pregunta38, $pregunta39, $pregunta40);

    // Ejecuta la declaración
    if ($stmt->execute()) {
        echo "Las respuestas se han guardado correctamente";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Cierra la declaración y la conexión
    $stmt->close();
    $conn->close();
}
?>
