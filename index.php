<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portada del Trabajo</title>
    <style>
        body {
            background-color: #c6e2ff; 
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .investigation-space, .introduction-space {
            background-color: #c6e2ff; 
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }

        .button-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<?php
$logoUniversidad = "https://instructure-uploads.s3.amazonaws.com/account_109250000000000001/attachments/4454475/Logotipo-vertical-azul.png";
$nombreUniversidad = "Universidad Gerardo Barrios";
$nombreFacultad = "Facultad de Ciencia y Tecnologia";
$nombreMateria = "Programación en PHP";
$nombreDocente = "Ing Willian Montes";
$nombreCarrera = "Ingeniería en Sistemas y Redes Informáticas";
$nombreEstudiante = "Anderson Jose Berrios Diaz Darlin Mariela Ramos Gutierrez";
$codigoEstudiante = "SMSS - SMSS172422";

echo "
    <div style='text-align: center;'>
        <img src='$logoUniversidad' alt='Logo de la Universidad' width='100'>
        <h1>$nombreUniversidad</h1>
        <p>Facultad: $nombreFacultad</p>
        <p>Materia: $nombreMateria</p>
        <p>Docente: $nombreDocente</p>
        <p>Carrera: $nombreCarrera</p>
        <p>Estudiante: $nombreEstudiante</p>
        <p>Código de Estudiante: $codigoEstudiante</p>
    </div>
    ";
?>

<div style='text-align: center;'>
    <div class="introduction-space">
        <h2>Introducción</h2>
        <p>En esta presentación, profundizaremos en el mundo de PHP, un lenguaje de programación ampliamente utilizado en el desarrollo web. investigaremos las funciones built-in de PHP y cada una de estas lleva </p>
    </div>
    </ul>
    
    <center>
        <a href="investigacion.php"> <button>
            Ver investigacion
        </button></a>
    </center>
        
    
    
    </body>
    </html>