<?php
$servidor = "localhost"; // El servidor que utilizaremos, en este caso será el localhost 
$usuario = "borja"; // El usuario que acabamos de crear en la base de datos 
$contraseña = "borja"; // La contraseña del usuario que utilizaremos 
$BD = "porfolio"; // El nombre de la base de datos 
$conexion = new mysqli($servidor, $usuario, $contraseña, $BD);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
mysqli_select_db($conexion, $BD) or die(mysqli_error($conexion));
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio - Desarrollo de Aplicaciones Multiplataforma</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        h1 {
            margin: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        img {
            max-width: 100%;
            border-radius: 50%;
            display: block;
            margin: 0 auto 20px;
        }
        h2 {
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        p {
            margin: 0 0 15px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        ul li::before {
            content: "• ";
            color: #333;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>Mi Portafolio</h1>
    </header>
    <div class="container">
        <img src="imag/images/perfil.jpg" alt="Foto de Perfil" width="150">
        <h2>Datos Personales</h2>
        <p>Nombre: Borja</p>
        <p>Correo Electrónico: borja@email.com</p>
        <p>Teléfono: +34 689093652</p>

        <h2>Formación</h2>
        <p>Ciclo Formativo de Grado Superior en Desarrollo de Aplicaciones Multiplataforma</p>
        <p>Instituto XYZ</p>
        <p>Año de Graduación: 20XX</p>

        <h2>Experiencia Laboral</h2>
        <p>Desarrollador de Aplicaciones Móviles</p>
        <p>ABC Mobile Solutions</p>
        <p>2020 - Presente</p>
        <ul>
            <li>Desarrollo de aplicaciones multiplataforma para iOS y Android.</li>
            <li>Colaboración en equipos multidisciplinarios para diseñar soluciones efectivas.</li>
        </ul>

        <p>Prácticas de Desarrollo</p>
        <p>XYZ Tech</p>
        <p>2019 - 2020</p>
        <ul>
            <li>Aprendizaje y aplicación de buenas prácticas de programación.</li>
            <li>Colaboración en proyectos de desarrollo de software.</li>
        </ul>

        <h2>Habilidades</h2>
        <ul>
            <li>Desarrollo de aplicaciones multiplataforma</li>
            <li>Programación en Java, Kotlin y Swift</li>
            <li>Diseño de interfaces de usuario</li>
        </ul>

        <h2>Proyectos Destacados</h2>
        <p>Proyecto de Aplicación Móvil de Gestión de Tareas</p>
        <p>Proyecto de Aplicación Multiplataforma para Venta en Línea de Productos</p>

        <h2>Contacto</h2>
        <p>Puedes contactarme en <a href="mailto:tu@email.com">mi@email.com</a></p>
        <a class="button" href="https://www.linkedin.com/in/borjas%C3%A1nchez/">LinkedIn</a>
    </div>
</body>
</html>
