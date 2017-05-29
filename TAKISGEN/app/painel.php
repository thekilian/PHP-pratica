<?php
session_start(); // Session sempre antes de tudo!

require 'config.php';
include('includes/header.html'); // Deixe o conteúdo fora da sua aplicação

# ｡･:*:･ﾟ★,｡･:*:･ﾟ☆　LOGIN MAGIC GOES HERE　 ｡･:*:･ﾟ★,｡･:*:･ﾟ☆ #
/*
Se o usuário não está logado, ou seja a chave 'logado' do array de sessão não foi setada.
então, redireciona de volta para a página de login
É importante que essa chave no array da session para controle seja configurada por VOCÊ.
Te explico melhor depois se quiesr
*/
if(!isset($_SESSION['logado'])) {
	session_destroy(); // Destrua a sessão, just in case! ;)
	header("Location: login.php");
}

?>

<!-- include header.html:
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Frases</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
-->

<body>
<div class="container">

	<h1 id="topo">Welcome!</h1>
	<hr>

	<div>

<?php
	echo "<h1>Bem vindo, ".$_SESSION['nome'];
	echo "<br/>";
?>

<a href="<?php session_destroy();?>">Sair</a>

<?php
/*	
	echo "<h3>O que você deseja fazer, <strong>".$_SESSION['nome']."</strong>?</h3>";
	echo "<a href='session-destroy.php'>Sair</a>";
	echo "<hr/>";
*/
?>
		
		<div id="options">
			<div id="show-div">
				<button id="show-btn" class="btn btn-success">Ver uma frase lindona</button>
				<div id="show-div-content">
					<h1 id="show">Frasesinha</h1>
					<hr>
					<div class="mostra-frase">

				<!--
				DB: frases. tabela: lista. campos: id, frase, autor

				DB: frases. tabela: usuarios. campos: id, nome, email, senha
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
					echo "<br/><br/>";
					echo "<a href='#topo'>Topo</a>";

				?>
					</div>
				</div>
			</div>
			<br><br>

			</div>
			<div id="add-div">
				<button id="add-btn" class="btn btn-success">Cadastrar uma frase incrível</button>
				<div id="add-div-content">
					<h1 id="add">Cadastro de Frases</h1>
					<hr>

					<div class="form-group">
						<form method="POST" action="insert.php">
							<input class="form-control" type="text" name="frase" placeholder="Digite a frase" required=""><br>
							<input class="form-control" type="text" name="autor" placeholder="Digite o nome do autor" required=""><br>
							<button class="btn btn-success btn-block">Adicionar frase</button>
						</form>

						<?php
							echo "<br/><br/>";
							echo "<a href='#topo'>Topo</a>";
						?>
					</div>
				</div>
			</div>
			<br/><br/>	

			</div>
			<div id="edit-div">
				<button id="edit-btn" class="btn btn-success">Administrar suas frasesinhas</button>
				<div id="edit-div-content">
					<h1 id="edit">Controle de Frases</h1>
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
						<?php
							echo "<a href='#topo'>Topo</a>";
							echo "<br/><br/>";
						?>
					</div>
				</div>
			</div>
			</br/><br/>

		</div>
	</div>
	<br>

</div>
</div>

<?php
include('includes/footer.html'); // Deixe o conteúdo fora da sua aplicação
?>

<!--Include footer.html:
<footer>
	<span><i class="fa fa-heart-o" aria-hidden="true"></i> THE END <i class="fa fa-code" aria-hidden="true"></i></span>
</footer>

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
-->

</body>
</html>