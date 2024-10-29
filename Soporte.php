<?php
declare(strict_types=1);
    class Soporte{
        const IVA=0.21;
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
                return $this->getPrecio()+$this->getPrecio();
            }
            public function getNumero():int
            {
                return $this->numero;
            }
            public function muestraResumen():string
            {
                return "Precio: "+getPrecio();
            }
    }
?>