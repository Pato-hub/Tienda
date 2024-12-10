<!---
Nombre de la BD: Tienda
Tabla Socio / Actualizar, Consultar, Eliminar / Operaciones exclusivas para Socios
    Id_Cliente (PK,Auto_Icrement,Not Null)
    Nombre_Completo VarChar (50)
    Apellidos VarChar (50)
    DOMICILIO
        Calle VarChar (50)
        Colonia VarChar (50)
        Cod_p VarChar (50)
    Edad VarChar (50)
        //Si el socio es menor de edad no puede ser socio 
    Sexo VarChar (50)
    Fotografia mediumblob
        //hash MD5 de manera aleatoria 
        //a la hora de actualizar la foto, se debe borrar la anterior
    Correo_Elec Varchar (50)
    Password Varchar (50)
        //Utilizar hash para password

    //Utilizar SESIONES para proteger las paginas de consultar informacion y eliminar.
    //Los SOCIOS pueden autoeliminarse, eliminacion logica, no de forma fisica.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Registro de Clientes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <!-- Banner -->
        <header class="banner">
            <h1>Sistema de Registro de Clientes</h1>
        </header>

        <!-- Menú de Navegación -->
        <nav class="navbar">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="login.php"">Login</a></li>
                <li><a href="registros.php">Registrar</a></li>
                <li><a href="#">Consultar</a></li>
                <li><a href="#">Nosotros</a></li>
            </ul>
        </nav>

        <!-- Contenido Principal -->
        <main class="main-content">
            <h2>Bienvenido al Sistema de Registro de Clientes</h2>
        </main>

        <!-- Footer -->
        <footer class="footer">
            <p>&copy; 2024 - Todos los derechos reservados</p>
        </footer>
    </div>
</body>
</html>
