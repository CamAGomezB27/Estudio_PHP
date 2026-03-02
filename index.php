<?php 

require_once 'course.php';

//INSTANCIA
$course = new Course( //OBJETO
    'Curso profesional de PHP y Laravel',
    'Aprende facilmente PHP y Laravel desde cero 😁',
    'Este curso no solo te enseñará PHP, te enseñará a pensar como backend, dominar Laravel, y construir aplicaciones sólidas, seguras y escalables. Ideal para quienes quieren ir más allá de copiar y pegar código.',
     [
         "HTML",
         "CSS",
         "JAVASCRIPT",
         "PHP",
         "LARAVEL",
         "PYTHON"
     ],
     cursos: [
        "CURSO DE FASTAPI",
        "CURSO DE REACT",
        "CURSO DE JAVASCRIPT",
        "CURSO DE SQL",
        "CURSO DE FRONTEND",
        "CURSO DE BACKEND"
     ],
     lecciones: [
        "PHP desde Cero: Variables, Tipos y Control de Flujo",
        "Laravel al Ataque: Rutas, Controladores y Vistas", 
        "Eloquent y Bases de Datos: Magia con Modelos",
     ],
);

//OBJETO A PARTIR DE UNA CLASE
//CLASE -> (PROPIEDAD)OBJETO

//INSTANCIA
$Autor = new Autor( //OBJETO
    name: "Camilo Gómez",
    fecha: new DateTime('now'),
    ubicacion: "Bogotá. Colombia.",
    course: $course
);

$course->setAutor($Autor);


//DATOS a imprimir según el recorrido del array
$listLenguajes =''; 
$listCursos =''; 
$listLecciones = '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>
    </title>
</head>

<body>
    <?= $course?>
</body>

</html>