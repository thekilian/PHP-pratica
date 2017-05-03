<?php
require 'usuarios.php';
$u = new Usuarios();

$u->excluir(12); //teste excluir

//$u->atualizar("Felipe2", "felipe@b7web.com.br", "123", 12);//teste para alterar

//$u->inserir("Felipe", "felipe@b7web.com.br", "123"); //teste inserir

//$res = $u->selecionar(2); //peguei id 1 e vai guardar os results na var $res

//print_r($res); //p/ ver o result na tela
