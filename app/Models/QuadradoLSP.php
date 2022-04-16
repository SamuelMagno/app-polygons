<?php

namespace App\Models;

class QuadradoLSP {

    public function getArea(): float {
		return $this->getLargura() * $this->getAltura();
	}

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
    
        /**
     * Get the value of altura
     */ 
    public function getAltura()
    {
        return $this->altura;
    }

        /**
     * Get the value of largura
     */ 
    public function getLargura()
    {
        return $this->largura;
    }
}

