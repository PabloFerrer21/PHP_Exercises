<?php

class Coches {
    //Propiedades
    public $marca;
    public $color;

    //private static $numerodecoches = 0;

    /*public function __construct($marca, $color) 
    {
      $this->marca = $marca;
      $this->color = $color;
      //self::numerodecoches++;   
    }

    public function __toString()
    {
        $string = $this->marca;
        $string .= $this->color.'<br>';
        //$string .= 'Numero de Coches: ' .self::$numerodecoches

        return $string;
        
    }*/

    /**
     * Get the value of marca
     */ 
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */ 
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}

?>