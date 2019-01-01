<?php
require 'banco.php';

$banco = new Banco("localhost", "frases", "root", "pass"); // update info before run the project

// $banco->query("SELECT * FROM lista WHERE frase = '0'");
// $numero = $banco->numRows();
// echo "Quantidade de frases: ".$numero;

// if($banco->numRows() > 0) {
//     foreach($banco->result() as $item) {
//         echo "Frase: ".$item['frase']."<br/>";
//         echo "Autor: ".$item['autor']."<br/>";
//         echo "<hr/>";
//     }
// } else {
//     echo "Não houve resultados.";
// }

/* INSERT
$banco->insert("lista", array(
    "frase" => "Frase de Teste",
    "autor" => "Autor de Teste"
));
echo "Inserido com sucesso!";
*/

/* Teste se inseriu:
$banco->query("SELECT * FROM lista");
echo "Número de frases: ".$banco->numRows();
*/

/* UPDATE
$banco->update("lista", array("frase" => "Frasesinea", "autor" => "Autorzineo"), array("id" => "21"));
*/

/* Teste se atualizou: 
$banco->query("SELECT * FROM lista WHERE id = '21'");
print_r($banco->result()); // não printou... missing argumento 1 for result()
*/

/* DELETE
$banco->delete("lista", array("id"=>"20"));
echo "Frase de id n° 20 deletada com sucesso";
*/

/* Teste se deletou: */
$banco->query("SELECT * FROM lista LIMIT 3");
var_dump($banco->result());