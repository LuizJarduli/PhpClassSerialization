<?php

class Telefone {

    private $telefone;

    function getTelefone() {
        return $this->telefone;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function Telefone($telefone) {
        $this->setTelefone($telefone);
    }

}
