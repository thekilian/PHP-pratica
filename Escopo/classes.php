<?php
#########################################################
class Calculadora {
    // MEU CORPO MINHAS REGRAS
    protected $class_name = "calculadora";
    protected $operador = 'divisão';

    private function soma($a, $b){
        $result = $a + $b;
        echo "A soma é: ".$result;
    }

    // PARAMCEPTION!!!!!!
    public function uso_interno($x,$y){
        $this->soma($x,$y); // THIS contexto de execução
    }

    #######################
    function show_operador(){
        echo "\nO operador é: ". $this->operador;
    }
    ######################
    // GETS AND SETS pra acessar de fora de classe
    function set_operador($novo_operador){
        $this->operador = $novo_operador;
    }

    function get_operador(){
        return $this->operador;
    }

}
###########################################################


/////////////////////////////////

$calc = new Calculadora();
var_dump($calc);
$calc->uso_interno(10,20);

// $calc->soma(4,10);
// echo "<hr>";

// echo "Classe vanilla";
// $calc->show_operador();

// $calc->set_operador('multiplica');

