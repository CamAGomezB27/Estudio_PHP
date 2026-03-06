<?php 
$course = "Curso profesional de PHP y Laravel"; // variable
$price = 30.00; //precio
$fecha_publicacion = "13 de julio de 2025"; //Fecha
$mensaje = "Este curso no solo te enseñará PHP… te enseñará a pensar como backend, dominar Laravel, y construir aplicaciones sólidas, seguras y escalables. Ideal para quienes quieren ir más allá de copiar y pegar código."; //mensaje

$archivado = false; //True or false.

$status = $archivado ? "ARCHIVADO" : "ACTIVO"; //Operador ternario

$estilo = $archivado ?"estado estado-archivado" : "estado estado-activo"; //para aplicar cambios de colores

$nivel = 2; //nivel curso

$nivel_curso= $nivel === 1 ? "Basico" : ($nivel === 2 ? "Intermedio" : ($nivel === 3 ? "Avanzado" : "No se encuentra")); //Niveles del curso

$mensaje_nivel = $nivel_curso === "Basico" ? "Ideal para quienes están comenzando desde cero." : ($nivel_curso === "Intermedio" ? "Perfecto si ya tienes conocimientos básicos y querés subir de nivel." : ($nivel_curso === "Avanzado" ? "Diseñado para quienes ya dominan PHP y quieren ir más allá con Laravel." : "Sin descripción")); //mensajes por nivel

$lenguajes = [
    "HTML",
    "CSS",
    "JAVASCRIPT",
    "PHP",
    "LARAVEL",
    "PYTHON",
]; //arreglo

$listLenguajes =''; //dato a imprimir

foreach ($lenguajes as $lenguaje) {
    $listLenguajes .= "<li>$lenguaje</li>"; //recorrer arreglo e imprimir en la variable nueva
};


$cursos = [
    "CURSO DE FASTAPI",
    "CURSO DE REACT",
    "CURSO DE JAVASCRIPT",
    "CURSO DE SQL",
    "CURSO DE FRONTEND",
    "CURSO DE BACKEND",
];

$listCursos ='';

foreach ($cursos as $curso) { 
    $listCursos .= "<li>$curso</li>";
};
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
        margin-top: 60px;
    }

    h1 {
        margin-top: 0;
        text-align: center;
        color: #333;
        font: 3rem bold;
    }

    p {
        margin-bottom: 10px;
    }

    li {
        text-decoration: underline;
        margin-top: 10px;
    }

    .mensaje,
    .nivel,
    .datos {
        text-align: center;
    }

    .card {
        background: white;
        padding: 30px;
        border-radius: 10px;
        max-width: 1000px;
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

    .Nuevos {
        text-align: left;
    }

    .estado {

        text-align: center;
        font: 2rem bold;
        border-radius: 20px;
    }

    .estado-activo {
        background-color: green;
        color: black;
    }

    .estado-archivado {
        background-color: red;
        color: white;
    }

    .etiq,
    .cursos {
        color: #333;
        font: 2rem bold;
    }

    .list {
        cursor: pointer;
        font-size: small;
    }

    .etiq>ul>li {
        color: red;
    }

    .cursos>ul>li {
        color: blue;
    }
    </style>
</head>

<body>
    <div class="card">
        <h1>Bienvenido al <?= $course?></h1>
        <!-- INFORMACIÓN -->
        <p class="mensaje"><?= $mensaje?></p>

        <section class="Nuevos">

            <div class="etiq">
                <p>Etiquetas de Lenguajes</p>
                <ul class="list">
                    <!-- IMPRIMIR FOREACH -->
                    <?= $listLenguajes ?>
                </ul>
            </div>

            <div class="cursos">
                <p>Crusos Relacionados</p>
                <ul class="list">
                    <!-- IMPRIMIR FOREACH -->
                    <?= $listCursos ?>
                </ul>
            </div>

        </section>

        <!-- NIVEL CURSO -->
        <p class="nivel">
            Este curso es de nivel: <?=  $nivel_curso ?>, <?= $mensaje_nivel?></p>

        <!-- DATOS -->
        <section>
            <div class=" datos">
                <p class="fecha">Este curso se ha publicado en: <?= $fecha_publicacion?></p>
                <p class="precio"> Tiene un valor de: <?= $price ?> dolares</p>
            </div>
        </section>

        <p class="<?= $estilo ?>">ESTE CURSO ESTÁ <?= $status?></p>

    </div>

</body>

</html>