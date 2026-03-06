<?php

namespace Estudio_PHP;
class Autor { //CLASE

   //se especifica que es una propiedad publica y su tipo de valor
    public function __construct(//CONSTRUCTOR
            //PROPIEDADES
            protected string $name,
            protected \DateTimeInterface $fecha,
            protected string $ubicacion,
            protected Course $Course
        ) {

    }

    public function __toString() {
         $html = "<p class='autor'>{$this->name}</p>";
         $html .= "<p class='fechCre'>{$this->fecha->format('Y-m-d')}</p>"; 
         $html .= "<p class='lugar'>{$this->ubicacion}</p>"; 
         $html .= "<h3 class='descripcion'>Curso: {$this->Course->_gettitle('title')}</h3>";
         return $html; 
    }
}