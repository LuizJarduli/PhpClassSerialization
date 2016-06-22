<?php
class Pessoa{
    private $nome;
    private $cpf;
    private $endereco;
    private $telefones;
    
   public function Pessoa($nome, $cpf, $endereco, $telefones) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->telefones = $telefones;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getTelefones() {
        return $this->telefones;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setEndereco(Endereco $endereco) {
        $this->endereco = $endereco;
    }

    function setTelefones($telefones) {
        $this->telefones = $telefones;
    }


    
}