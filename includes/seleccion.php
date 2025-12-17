<?php
/*
Crea la clase seleccion con su constructor, tendrá un atributo de tipo array() para guardar los  
objetos-pizzas  seleccionadas,  y  los  métodos  necesarios  para  añadir,  eliminar  y  vaciar  la 
selección realizada.
*/

class Seleccion
{
    private $pizzasSeleccionadas;

    public function __construct()
    {
        $this->pizzasSeleccionadas = array();
    }

    public function anadirPizza($pizza)
    {
        $this->pizzasSeleccionadas[] = $pizza;
    }

    public function eliminarPizza($indice)
    {
        if (isset($this->pizzasSeleccionadas[$indice])) {
            unset($this->pizzasSeleccionadas[$indice]);
            $this->pizzasSeleccionadas = array_values($this->pizzasSeleccionadas);
        }
    }

    public function vaciarSeleccion()
    {
        $this->pizzasSeleccionadas = array();
    }

    public function getPizzasSeleccionadas()
    {
        return $this->pizzasSeleccionadas;
    }
}
