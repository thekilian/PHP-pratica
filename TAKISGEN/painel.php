<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Frases</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
<div class="container">

	<h1>Frases...</h1>
	<hr>

	<div id="mostrar">

<!--
DB: frases/ tabela: lista/ campos: id, frase, autor

DB: frases/ tabela: usuarios/ campos: id, email, senha
-->

<?php	
	// Só essa query é suficiente, mas tem que adicionar o restante dos dados
	$sql = "SELECT id, frase, autor FROM lista ORDER BY RAND() LIMIT 1"; // acertando a query
	$result = $pdo->query($sql); //não reatribua valores às mesmas variáveis
	
	// Aqui ele pede pro PDO buscar os dados do objeto retornado como um array associativo
	$chosen_one = $result->fetch(PDO::FETCH_ASSOC);
	// descomente essa linha abaixo para ver como vieram os dados
	//var_dump($chosen_one); 
	
	/*
	Um jeito mais elegante de escrever strings no PHP
	sem ter que usar um monte de pontos.
	Só funciona se a string não tiver aspas. Isso não funcionaria aqui por exemplo:
	"<span class="{$variavel}"> Algum texto </span>
	*/
	echo "{$chosen_one['frase']} <br> <strong>{$chosen_one['autor']}</strong>"; 

?>
	</div>
	<br><br>

	<h1>Cadastro de Frases</h1>
	<hr>

	<div class="form-group">
		<form method="POST" action="insert.php">
			<input class="form-control" type="text" name="frase" placeholder="Digite a frase" required=""><br>
			<input class="form-control" type="text" name="autor" placeholder="Digite o nome do autor" required=""><br>
			<button class="btn btn-success btn-block">Adicionar frase</button>
		</form>
	</div>
	<br/><br/>

	<h1>Controle de Frases</h1>
	<hr>

	<div id="controle">
		<table class="table table-hover">
			<thead>
				<tr>
					<td>Frase</td>
					<td>Autor</td>
					<td>Editar</td>
				</tr>	
			</thead>
			<tbody>
			<?php
				$sql = "SELECT * FROM lista";
				$sql = $pdo->query($sql);
				if($sql->rowCount() > 0) {
					foreach ($sql->fetchAll() as $phrase) {
						echo '<tr>';
						echo '<td>'.$phrase['frase'].'</td>';
						echo '<td>'.$phrase['autor'].'</td>';
						echo '<td><a href="update.php?id='.$phrase['id'].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> <a href="delete.php?id='.$phrase['id'].'"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>';
						echo '</tr>';
					}
				}
			?>
			</tbody>			
		</table>
	</div>

</div>

<footer>
	<span><i class="fa fa-heart-o" aria-hidden="true"></i> THE END <i class="fa fa-code" aria-hidden="true"></i></span>
</footer>

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

</body>
</html>  