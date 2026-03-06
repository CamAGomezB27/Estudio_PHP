<?php 

//INFORMACIÓN PRINCIPAL.
$course = [
    'title' => 'Curso profesional de PHP y Laravel',
    'subtitle' => 'Aprende facilmente PHP y Laravel desde cero 😁',
    'description' => 'Este curso no solo te enseñará PHP, te enseñará a pensar como backend, dominar Laravel, y construir aplicaciones sólidas, seguras y escalables. Ideal para quienes quieren ir más allá de copiar y pegar código.',
    'lenguajes' => [
        "HTML",
        "CSS",
        "JAVASCRIPT",
        "PHP",
        "LARAVEL",
        "PYTHON",
    ],
    'cursos' => [
        "CURSO DE FASTAPI",
        "CURSO DE REACT",
        "CURSO DE JAVASCRIPT",
        "CURSO DE SQL",
        "CURSO DE FRONTEND",
        "CURSO DE BACKEND",
    ],
    "lecciones"=> [
        "PHP desde Cero: Variables, Tipos y Control de Flujo",
        "Laravel al Ataque: Rutas, Controladores y Vistas",
        "Eloquent y Bases de Datos: Magia con Modelos",
    ],
    
]; //ARREGLO ASOCIATIVO ( almacenar y acceder a información mediante claves o keys)

//SINTAXIS ARREGLO
//ARREGLO['LLAVE']

//INFORMACIÓN ADICIONAL
$price = 30.00; //precio
$fecha_publicacion = "13 de julio de 2025"; //Fecha

//ESTADOS ARCHIVO
$archivado = false; //True or false

$status = $archivado ? "ARCHIVADO" : "ACTIVO"; //OPERADOR TERNARIO (CONDICION)

$estilo = $archivado ?"estado estado-archivado" : "estado estado-activo"; //para aplicar cambios de colores


//NIVELES DE CURSOS
$nivel = 2; //nivel curso

$nivel_curso= $nivel === 1 ? "Basico" : ($nivel === 2 ? "Intermedio" : ($nivel === 3 ? "Avanzado" : "No se encuentra")); //Niveles del curso (CONDICIÓN)

$mensaje_nivel = $nivel_curso === "Basico" ? "Ideal para quienes están comenzando desde cero." : ($nivel_curso === "Intermedio" ? "Perfecto si ya tienes conocimientos básicos y querés subir de nivel." : ($nivel_curso === "Avanzado" ? "Diseñado para quienes ya dominan PHP y quieren ir más allá con Laravel." : "Sin descripción")); //mensajes por nivel


//DATOS a imprimir según el recorrido del array
$listLenguajes =''; 
$listCursos =''; 
$listLecciones = '';


//RECORRER LOS ARRAY E IMPIRMIR SUS DATOS EN UNA NUEVA VARIBALE
foreach ($course['lenguajes'] as $lenguaje) {
    $listLenguajes .= "<li>$lenguaje</li>"; 
};

foreach ($course['cursos'] as $curso) { 
    $listCursos .= "<li>$curso</li>";
};

foreach ($course["lecciones"] as $leccion) {
    $listLecciones  .="<li>$leccion</li>";  
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <title>
        <?= $course['title']?>
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

    h2 {
        margin-top: 0;
        margin-bottom: auto;
        text-align: center;
    }

    p {
        margin-bottom: 10px;
    }

    li {
        text-decoration: underline;
        margin-top: 10px;
    }

    .descripcion,
    .nivel,
    .datos {
        text-align: center;
    }

    .card {
        background: white;
        padding: 30px;
        max-width: 1000px;
        margin: auto;
        border-radius: 40px;
        /* Borde redondo*/
        box-shadow: 4px 8px 16px rgba(0, 0, 0, 0.8);
        /* Caja detras del contenedor que simula sombra*/
    }

    .fecha {
        color: red;
        font: 2rem bold;
        margin-top: 10px;
        /* Margen respecto a la cabecera*/
    }

    .precio {
        color: green;
        font: 2rem bold;
        margin-top: 10px;
        /* Margen respecto a la cabecera*/
    }

    .nuevos {
        margin-top: -30px;
        text-align: left;
        display: flex;
        justify-content: space-between;
        /* Espacio entre si */
        gap: 2rem;
    }

    .estado {
        text-align: center;
        font: 2rem bold;
        border-radius: 20px;
        /* Borde redondo*/
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
        flex: 1;
        /* ambas clases ocupan el mismo espacio*/
    }

    .etiq>p,
    .cursos>p {
        text-align: center;
        /* funciona de este modo ya que p es hijo de las clases directas*/
    }

    .list {
        cursor: pointer;
        /* Se activa la manito */
        font-size: small;
    }

    .etiq>ul>li {
        /* li hijo de ul hijo de la clase padre . */
        color: red;
    }

    .cursos>ul>li {
        /* li hijo de ul hijo de la clase padre . */
        color: blue;
    }

    .leccionesT {
        color: #333;
        font: 2rem bold;
        text-align: center;
    }

    .lecciones>ul>li {
        /* li hijo de ul hijo de la clase padre . */
        color: blueviolet;
        text-align: center;
        list-style: none;
        font-size: large;
    }
    </style>
</head>

<body>
    <div class="card">
        <!-- TITULOS -->
        <h1>Bienvenido al <?= $course['title']?></h1>
        <!-- SUBTITULO -->
        <h2><?= $course['subtitle']?></h2>
        <!-- INFORMACIÓN -->
        <p class="descripcion"><?= $course['description']?></p>

        <section class="nuevos">

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
        <p class="nivel">Este curso es de nivel: <?=  $nivel_curso ?>, <?= $mensaje_nivel?></p>


        <!-- LECCIONES -->
        <section>
            <p class="leccionesT">Lecciones </p>
            <div class="lecciones">
                <p>En este curso manejamos lecciones como:</p>
                <ul class="list">
                    <!-- IMPRIMIR FOREACH -->
                    <?= $listLecciones ?>
                </ul>
            </div>
        </section>

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