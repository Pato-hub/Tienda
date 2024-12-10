<?php
// Configuración de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$Nom_Completo = $_POST['nom_Completo'] ?? '';
//$Apellidos = $_POST['Apellidos'] ?? '';
//$Calle = $_POST['Calle'] ?? '';
$Domicilio = $_POST['domicilio'] ?? '';
//$Cod_Postal = $_POST['Cod_Postal'] ?? '';
$Edad = $_POST['edad'] ?? '';
$Sexo = $_POST['sexo'] ?? '';
//$Fotografia =$_POST['Fotografia'] ?? '';
$Correo_Elect = $_POST['correo_Elect'] ?? '';
$Password = $_POST['password'] ?? '';

//
// Recibir datos del formulario
$Correo_Elect = $_POST['Correo_Elect'] ?? '';
echo "Correo recibido: " . $Correo_Elect . "<br>";

if (!filter_var($Correo_Elect, FILTER_VALIDATE_EMAIL)) {
    echo "Correo electrónico no válido: " . $Correo_Elect;
    exit;
}

$Correo_Elect = $_POST['Correo_Elect'] ?? '';

// Validación del correo
if (!filter_var($Correo_Elect, FILTER_VALIDATE_EMAIL)) {
    echo "Correo electrónico no válido.";
    exit;
}


// Validar datos
if ((int)$Edad < 18) {
    echo "El socio debe ser mayor de edad.";
    exit;
}
if (!filter_var($Correo_Elect, FILTER_VALIDATE_EMAIL)) {
    echo "Correo electrónico no válido.";
    exit;
}
if (strlen($Password) < 8) {
    echo "La contraseña debe tener al menos 8 caracteres.";
    exit;
}

// Procesar la imagen
if (isset($_FILES['fotografia']) && $_FILES['fotografia']['error'] == 0) {
    $tipoImagen = mime_content_type($_FILES['fotografia']['tmp_name']);
    if (!in_array($tipoImagen, ['image/jpeg', 'image/png'])) {
        echo "Solo se permiten imágenes JPEG o PNG.";
        exit;
    }
    // Generar un nombre único para la imagen y moverla a una carpeta
    $nombreImagen = md5(uniqid(rand(), true)) . '.' . pathinfo($_FILES['fotografia']['name'], PATHINFO_EXTENSION);
    $rutaImagen = 'uploads/' . $nombreImagen;
    if (!move_uploaded_file($_FILES['fotografia']['tmp_name'], $rutaImagen)) {
        echo "Error al guardar la imagen.";
        exit;
    }
} else {
    echo "Error al cargar la imagen.";
    exit;
}


// Hash para la contraseña
$Password_hashed = password_hash($Password, PASSWORD_BCRYPT);

// Insertar datos en la tabla socios
$sql = "INSERT INTO socios (Nom_Completo, Domicilio, Edad, Sexo, Fotografia, Correo_Elect, Password) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Error en la preparación de la consulta: " . $conn->error);
}

// Asociar los valores con los tipos de datos
$stmt->bind_param(
    "ssissss", // Tipos: s = string, i = integer
    $Nom_Completo,
    //$Apellidos,
    //$Calle,
    $Domicilio,
    //"ssssssssss",
    $Edad,
    $Sexo,
    //$Fotografia,
    $nombreImagen,
    $Correo_Elect,
    $Password_hashed
);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Registro exitoso.";
} else {
    echo "Error al registrar: " . $stmt->error;
}

// Cerrar conexión
$stmt->close();
$conn->close();
?>
