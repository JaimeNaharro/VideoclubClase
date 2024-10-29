<?php
declare(strict_types=1);
    class Soporte{
        private const IVA=0.21;
        public function __construct(
            public string $titulo,
            protected int $numero,
            private float $precio
            ){}
            public function getPrecio():float
            {
                return $this->precio;
            }
            public function getPrecioConIva():float
            {
                return $this->getPrecio()+($this->getPrecio()*IVA);
            }
            public function getNumero():int
            {
                return $this->numero;
            }
            public function muestraResumen()
            {
                echo "<br>Precio: ".$this->getPrecio()." euros<br>Numero: ".$this->getNumero();
                
            }
    }
    $soporte1 = new Soporte("Tenet", 22, 3);
    echo "<strong>" . $soporte1->titulo . "</strong>";
    echo "<br>Precio: " . $soporte1->getPrecio() . " euros";
    echo "<br>Precio IVA incluido: " . $soporte1->getPrecioConIVA() . " euros";
    $soporte1->muestraResumen();
?>