<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Socios</title>
    <link rel="stylesheet" href="styles.css"> <!-- Cambia el archivo CSS si es necesario -->
</head>
<body>
    <div class="container">
        <!-- Banner -->
        <header class="banner">
            <h1>Registro de Socios</h1>
        </header>
        
         <!-- Menú de Navegación -->
         <nav class="navbar">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="registros.php">Registrar</a></li>
                <li><a href="#">Consultar</a></li>
                <li><a href="#">Nosotros</a></li>
            </ul>
        </nav>

        <!-- Contenido Principal -->
        <main class="main-content">
            <h2>Formulario de Registro</h2>
            <form action="registro.php" method="POST" enctype="multipart/form-data">
                <!-- Nombre Completo -->
                <label for="nom_completo">Nombre Completo:</label>
                <input type="text" id="nom_completo" name="nom_completo" placeholder="Nombre completo" required>

                <!-- Domicilio -->
                <label for="domicilio">Domicilio:</label>
                <textarea id="domicilio" name="domicilio" placeholder="Ingresa tu dirección" required></textarea>

                <!-- Edad -->
                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" min="18" placeholder="Debe ser mayor de 18 años" required>

                <!-- Sexo -->
                <label for="sexo">Sexo:</label>
                <select id="sexo" name="sexo" required>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otro">Otro</option>
                </select>

                <!-- Fotografía -->
                <label for="fotografia">Fotografía:</label>
                <input type="file" id="fotografia" name="fotografia" accept="image/*" required>

                <!-- Correo Electrónico -->
                <label for="Correo_Elect">Correo Electrónico:</label>
                <input type="email" id="Correo_Elect" name="Correo_Elect" placeholder="Ingresa tu correo electrónico" required>

                <!-- Contraseña -->
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" placeholder="Crea una contraseña" required>

                <!-- Botón de Enviar -->
                <button type="submit">Registrar</button>
            </form>
        </main>
        

        <!-- Footer -->
        <footer class="footer">
            <p>&copy; 2024 - Sistema de Registro de Socios</p>
        </footer>
    </div>
</body>
</html>
