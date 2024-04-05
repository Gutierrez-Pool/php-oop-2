<?php 

trait HasMaterial {
    protected $materiale;

    public function setMaterial($materiale) {
        $this->materiale = $materiale;

    }

    public function getMaterial() {
        return $this->materiale;
    }
}
