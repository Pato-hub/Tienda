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
                <li><a href="index.html">Inicio</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="registros.php">Registrar</a></li>
                <li><a href="#">Consultar</a></li>
                <li><a href="#">Nosotros</a></li>
            </ul>
        </nav>

        <!-- Contenido Principal -->
        <main class="main-content">
            <div class="login-form">
                <h2>Iniciar Sesión</h2>
                <form action="registro.php" method="POST">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Ingresa tu email" required>
                    
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
                    
                    <button type="submit">Iniciar Sesión</button>
                </form>
            </div>
        </main>

        <!-- Footer -->
        <footer class="footer">
            <p>&copy; 2024 - Todos los derechos reservados</p>
        </footer>
    </div>
</body>
</html>
