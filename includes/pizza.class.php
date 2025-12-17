<?php
/*
Crea la clase pizza con su constructor y  métodos get y set. 
*/

class Pizza
{
    private $nombre;
    private $ingredientes;
    private $precio;

    public function __construct($nombre, $ingredientes, $precio)
    {
        $this->nombre = $nombre;
        $this->ingredientes = $ingredientes;
        $this->precio = $precio;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getIngredientes()
    {
        return $this->ingredientes;
    }

    public function setIngredientes($ingredientes)
    {
        $this->ingredientes = $ingredientes;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }
}
