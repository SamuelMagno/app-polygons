<?php 

namespace app\Models;

class Poligono {
    private $forma;

    public function setForma(object $forma) {
        $this->forma = $forma;
    }

    public function getForma() {
        return $this->forma;
    }

    public function getArea(): float {
		return $this->getForma()->getLargura() * $this->getForma()->getAltura();
	}
}