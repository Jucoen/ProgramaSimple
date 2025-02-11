<?php
$servername = "localhost";  // Usar localhost si estás trabajando localmente
$username = "usuario1";     // Asegúrate de usar el usuario correcto
$password = "contrasenyaUsuario1"; // La contraseña correcta
$dbname = "cine";           // El nombre de la base de datos que creaste

// Crear la conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Comprobar la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT * FROM peliculas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"]. "<br>";
  }
} else {
  echo "0 resultados";
}

$conn->close();
?>