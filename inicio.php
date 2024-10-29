<?php
    declare(strict_types=1);
    include "Soporte.php";
    
    
    class CintaVideo extends Soporte{
        public function __construct(
            public string $titulo,
            protected int $numero,
            private float $precio,
            private float $duracion
            ){}
        public function muestraResumen():string{
            return Parent::muestraResumen()." Duración: ".$this->duracion;
        }
    }
    $miCinta = new CintaVideo("Los cazafantasmas", 23, 3.5, 107);
    echo "<strong>" . $miCinta->titulo . "</strong>";
    echo "<br>Precio: " . $miCinta->getPrecio() . " euros";
    echo "<br>Precio IVA incluido: " . $miCinta->getPrecioConIva() . " euros";
    $miCinta->muestraResumen();
    
?>