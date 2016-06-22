<?php

header("Content-type: application/json");
include("model/Telefone.php");
include("model/Endereco.php");
include("model/Pessoa.php");
include("ClassSerialization.php");

$telefones = [new Telefone("1111111111"), new Telefone("22222222222"), new Telefone("33333333"), new Telefone("4444444444")];
$endereco = new Endereco("Rua de teste", "Centro");

$pessoa = new Pessoa("João", "00000000000", $endereco, $telefones);

echo ClassSerialization::serialize($pessoa);
