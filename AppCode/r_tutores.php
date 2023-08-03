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
$pregunta1 = htmlspecialchars($_POST["pregunta1"]);
$pregunta2 = htmlspecialchars($_POST["pregunta2"]);
$pregunta3 = htmlspecialchars($_POST["pregunta3"]);
$pregunta4 = htmlspecialchars($_POST["pregunta4"]);
$pregunta5 = htmlspecialchars($_POST["pregunta5"]);

// Preparar la declaración SQL para prevenir la inyección SQL
$stmt = $conn->prepare("INSERT INTO tutores (pregunta1, pregunta2, pregunta3, pregunta4, pregunta5) VALUES (?, ?, ?, ?, ?)");

// Enlaza las variables a la declaración preparada como parámetros
$stmt->bind_param("iiiii", $pregunta1, $pregunta2, $pregunta3, $pregunta4, $pregunta5);

// Ejecuta la declaración
if ($stmt->execute()) {
  echo "Las respuestas se han guardado correctamente";
} else {
  echo "Error: " . $stmt->error;
}

// Cierra la declaración y la conexión
$stmt->close();
$conn->close();
?>
