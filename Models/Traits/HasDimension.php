<?php 

trait HasDimension {
    protected $misura;

    public function setDimension($misura) {
        $this->misura = $misura;

    }

    public function getDimension() {
        return $this->misura;
    }
}