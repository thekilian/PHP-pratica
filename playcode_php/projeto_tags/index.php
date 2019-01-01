<?php
// 26/12/18 - nuvem de tags de características (quanto mais uma palavra se repetir, mais vai aparecer - para itens ou funcionalidades mais usados, usuários mais logados, etc)

// 1. conectar ao DB
try {
	$pdo = new PDO("mysql:dbname=projeto_tags;host=localhost", "root", "pass");

} catch(PDOException $e) {
	echo "Erro: ".$e->getMessage();
	exit;
}

// 2. pegar todos os registros - juntar características em uma lista, mesmo que as caracts sejam repetidas

$sql = "SELECT caracteristicas FROM usuarios";
$sql = $pdo->query($sql);
if($sql->rowCount() > 0) {
	$lista = $sql->fetchAll(); // caracts juntas

	$carac = array();

	foreach($lista as $usuario) {
		$palavras = explode(",", $usuario['caracteristicas']); // explode pela vírgula
		foreach ($palavras as $palavra) {
			$palavra = trim($palavra); // trim tira espaços do início e fim

			if(isset($carac[$palavra])) {
				$carac[$palavra]++; // incrementar
			} else {
				$carac[$palavra] = 1;
			}
		}
	}

	// ordenar do maior para o menor:
	arsort($carac);

	// dividir contagem das palavras:
	$palavras = array_keys($carac);
	$contagens = array_values($carac);

	// pegar o maior (values):
	$maior = max($contagens);

	$tamanhos = array(11, 15, 20, 30); // tamanho das fontes

	// exibir as palavras em um for - loop da qtdd das palavras que temos:
	for($x=0; $x<count($palavras); $x++) {
		// pegar média baseado no número maior e encaixar na tag:
		$n = $contagens[$x] / $maior;

		// encaixar cada palavra no tamanho:
		$h = ceil($n * count($tamanhos)); //retornará um n° entre 1 e 4
		echo "<p style='font-size:".$tamanhos[$h-1]."px'>".$palavras[$x]." (".$contagens[$x].")</p>";

	}

}