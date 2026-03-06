<?php 
$course = "Curso profesional de PHP y Laravel"; // variable
$price = 30.00; //precio
$fecha_publicacion = "13 de julio de 2025"; //Fecha.
$mensaje = "Este curso no solo te enseñará PHP… te enseñará a pensar como backend, dominar Laravel, y construir aplicaciones sólidas, seguras y escalables. Ideal para quienes quieren ir más allá de copiar y pegar código."; //mensaje
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <title>
        <?= $course?>
    </title>
    <style>
    body {
        font-family: 'Courier New', Courier, monospace;
        background: linear-gradient(to right, #4facfe, #00f2fe);
        /*fondo gradiente */
        display: flex;
        flex-direction: column;
        margin: 0;
        padding: 20px;
        margin-top: 100px;
    }

    h1 {
        text-align: center;
        color: #333;
        font: 2rem bold;
    }

    p {
        margin-bottom: 10px;
        text-align: center;
    }

    .card {
        background: white;
        padding: 30px;
        border-radius: 10px;
        max-width: 600px;
        margin: auto;
        border-radius: 40px;
        box-shadow: 4px 8px 16px rgba(0, 0, 0, 0.8);
    }

    .fecha {
        color: red;
        font: 2rem bold;
        margin-top: 10px;
    }

    .precio {
        color: green;
        font: 2rem bold;
        margin-top: 10px;
    }
    </style>
</head>

<body>
    <div class="card">
        <h1>Bienvenido al <?= $course?></h1>
        <!-- INFORMACIÓN -->
        <p><?= $mensaje?></p>

        <!-- DATOS -->
        <section>
            <div class="datos">
                <p class="fecha">Este curso se ha publicado en: <?= $fecha_publicacion?></p>
                <p class="precio"> Tiene un valor de: <?= $price ?> dolares</p>
            </div>
        </section>
    </div>
</body>

</html>