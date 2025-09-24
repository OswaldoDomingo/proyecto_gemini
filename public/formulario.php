<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="assets/css/formulario.css">
</head>
<body>
    <div class="contenedor">
        <div class="cabecera">
            <h1>Formulario de contacto</h1>
        </div>
        <div class="cuerpo">
            <!-- Contenido del formulario-->
            <div class="contenedor-formulario">
                <form>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" required></textarea><br><br>
                <input type="submit" value="Enviar">
            </form>
            </div>
            <div class="contenedor-imagen">
                <img src="assets/imagenes/contacto.png" alt="Imagen de contacto">
            </div>
        </div>
        <div class="pie">
            <p class="copyright">Proyecto Gemini &copy; 2025</p>
        </div>
    </div>
</body>
</html>