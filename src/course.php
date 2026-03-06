<?php 

namespace Estudio_PHP;
//INFORMACIÓN PRINCIPAL
class Course { //CLASE

    //AHORA, se especifica que es una propiedad rotegida y su tipo de valor
    public function __construct(//CONSTRUCTOR
        //PROPIEDADES
        protected string $title,
        protected string $subtitle,
        protected string $description,
        protected array $lenguajes,
        protected array $cursos,
        protected array $lecciones,
        protected CourseType $type = CourseType::FREE,
        protected ?Autor $autor = null,
    ) {
        //
    }

     public function _gettitle($title) {
         if (property_exists($this, $title)) {
             return $this->$title;
         }
         return null;
     }

     public function setAutor(Autor $autor): void
    {
        $this->autor = $autor;
    }


    public function __toString()
    {
        $nivel_curso = "Intermedio";
        $mensaje_nivel = "Ideal si ya sabes lo básico 🚀";
        $fecha_publicacion = date('Y-m-d');
        $price = 49;
        $status = "ACTIVO";
        $estilo = $status === "ACTIVO" 
            ? "estado estado-activo" 
            : "estado estado-archivado";

        $html = "<div class='card'>";

        // TITULOS
        $html .= "<h1>Bienvenido al {$this->title} - {$this->type->label()}</h1>";
        $html .= "<h2>{$this->subtitle}</h2>";
        $html .= "<p class='descripcion'>{$this->description}</p>";

        // NUEVOS
        $html .= "<section class='nuevos'>";

        // Lenguajes
        $html .= "<div class='etiq'>";
        $html .= "<p>Etiquetas de Lenguajes</p>";
        $html .= "<ul class='list'>";
        foreach ($this->lenguajes as $lenguaje) {
            $html .= "<li>$lenguaje</li>";
        }
        $html .= "</ul>";
        $html .= "</div>";

        // Cursos
        $html .= "<div class='cursos'>";
        $html .= "<p>Cursos Relacionados</p>";
        $html .= "<ul class='list'>";
        foreach ($this->cursos as $curso) {
            $html .= "<li>$curso</li>";
        }
        $html .= "</ul>";
        $html .= "</div>";

        $html .= "</section>";

        // Nivel
        $html .= "<p class='nivel'>Este curso es de nivel: $nivel_curso, $mensaje_nivel</p>";

        // Lecciones
        $html .= "<section>";
        $html .= "<p class='leccionesT'>Lecciones</p>";
        $html .= "<div class='lecciones'>";
        $html .= "<ul class='list'>";
        foreach ($this->lecciones as $leccion) {
            $html .= "<li>$leccion</li>";
        }
        $html .= "</ul>";
        $html .= "</div>";
        $html .= "</section>";

        // Datos
        $html .= "<section>";
        $html .= "<div class='datos'>";
        $html .= "<p class='fecha'>Publicado en: $fecha_publicacion</p>";
        $html .= "<p class='precio'>Valor: $price dolares</p>";
        $html .= "</div>";
        $html .= "</section>";

        // Estado
        $html .= "<p class='$estilo'>ESTE CURSO ESTÁ $status</p>";

        // Autor (si existe)
        if ($this->autor !== null) {
            $html .= $this->autor;
        }

        $html .= "</div>";

        return $html;
    }


    public function addcursos(string $cursos): void {
        if(in_array($cursos, $this->cursos)) {
        return;
        }

        if(empty($cursos)) {
        return;
        }
        if(count($this->cursos) >= 10) {
        return;
        }

        $this->cursos[] = $cursos;
    }
}

?>