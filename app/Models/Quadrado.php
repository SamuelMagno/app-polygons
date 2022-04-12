<?php

namespace App\Models;

class Quadrado extends Retangulo{
        /**
     * Set the value of altura
     *
     * @return  self
     */ 
    public function setAltura($altura)
    {
        $this->altura = $altura;
        $this->largura = $altura;

        return $this;
    }

        /**
     * Set the value of largura
     *
     * @return  self
     */ 
    public function setLargura($largura)
    {
        $this->largura = $largura;
        $this->altura = $largura;

        return $this;
    }
}

