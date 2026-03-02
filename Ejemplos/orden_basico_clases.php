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

// $course->addcursos("CURSO DE PROGRAMACIÓN"); //AGREGAR NUEVA ETIQUETA AL ARRAY
 $course->addcursos("CURSO DE DESARROLLO WEB"); //AGREGAR NUEVA ETIQUETA AL ARRAY
 $course->addcursos("CURSO DE PROGRAMACIÓN ORIENTADA A OBJETOS"); //AGREGAR NUEVA ETIQUETA AL ARRAY
 $course->addlecciones("ORM con laravel"); //AGREGAR NUEVA LECCIÓN AL ARRAY
 $course->addlecciones("Autenticación y Seguridad en Laravel"); //AGREGAR NUEVA LECCIÓN AL ARRAY
 $course->addlenguajes("SQL"); //AGREGAR NUEVA ETIQUETA AL ARRAY
 $course->addlenguajes("REACT"); //AGREGAR NUEVA ETIQUETA AL ARRAY
// $course->addcursos("CURSO DE BACKEND"); //PRUEBA 
// $course->addcursos(""); //PRUEBA

//OBJETO A PARTIR DE UNA CLASE
//CLASE -> (PROPIEDAD)OBJETO

//INFORMACIÓN AUTOR
class Autor { //CLASE

   //se especifica que es una propiedad publica y su tipo de valor
    public function __construct(//CONSTRUCTOR
        //PROPIEDADES
        public string $name,
        public DateTime $fecha,
        public string $ubicacion,
    ) {}
}

//INSTANCIA
$Autor = new Autor( //OBJETO
    "Camilo Gómez",
    new DateTime('now'),
    ubicacion: "Bogotá. Colombia."
);

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
foreach ($course -> getLenguajes() as $lenguaje) {
    $listLenguajes .= "<li>$lenguaje</li>"; 
};

foreach ($course -> getCursos() as $curso) { 
    $listCursos .= "<li>$curso</li>";
};

foreach ($course -> getLecciones() as $leccion) {
    $listLecciones  .="<li>$leccion</li>";  
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>
        <?= $course -> getTitle() ?>
    </title>
</head>

<body>
    <div class="card">
        <!-- TITULOS -->
        <h1>Bienvenido al <?= $course -> getTitle() ?></h1>
        <!-- SUBTITULO -->
        <h2><?= $course -> getSubtitle() ?></h2>
        <!-- INFORMACIÓN -->
        <p class="descripcion"><?= $course -> getDescription() ?></p>

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

        <!-- CREDITOS -->
        <section class="sectionCre">
            <p class="creditosT">Creditos </p>
            <div class="creditos">
                <p class="autor"><?= $Autor -> name ?></p>
                <p class="fechCre"><?= $Autor -> fecha -> format('Y-m-d'). "\n"?></p>
                <p class="lugar"><?= $Autor -> ubicacion ?></p>
            </div>
        </section>

    </div>

</body>

</html>