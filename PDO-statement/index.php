<?php
require 'usuarios.php';
$u = new Usuarios();

$u->excluir(12); //teste excluir

//$u->atualizar("Felipe2", "felipe@teste.com.br", "123", 12); //teste para alterar

//$u->inserir("Felipe", "felipe@teste.com.br", "123"); //teste para inserir

//$res = $u->selecionar(2); //pegar id 1. Vai guardar os resultados na variável $res

//print_r($res); //para ver o resultado na tela
