<?php

class Endereco {

    private $rua;
    private $bairro;

    function getRua() {
        return $this->rua;
    }

    function getBairro() {
        return $this->bairro;
    }

    function setRua($rua) {
        $this->rua = $rua;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function Endereco($rua, $bairro) {
        $this->setRua($rua);
        $this->setBairro($bairro);
    }

}
