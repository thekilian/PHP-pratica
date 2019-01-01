<!-- Projeto ordenação de resultados -->
<!-- Tem muitas formas de fazer -->

<?php
// primeira coisa: conexão DB
try {
	$pdo = new PDO("mysql:dbname=projeto_ordenar;host=localhost", "root", "pass"); // update info before run the project
} catch(PDOException $e){
	echo "Falhou a conexão: ".$e->getMessage();
	exit;
}

// verificar se houve algum envio de ordem (na url via get)
if(isset($_GET['ordem']) && !empty($_GET['ordem'])) {
	$ordem = addslashes($_GET['ordem']);
	$sql = "SELECT * FROM usuarios ORDER BY ".$ordem;
} else {
	$ordem = '';
	$sql = "SELECT * FROM usuarios";
}

?>
<!-- terceira coisa: botão para ordenar -->
<form method="GET"> <!-- como não coloquei action aqui, os dados serão enviados para este própria página (index) - então ele atualiza a pág e envia os dados p/ o index -->
	<select name="ordem" onchange="this.form.submit()"> <!-- onchange vai enviar form/dados ao mudar opção do select -->
		<option>Ordenar por</option>
		<option value="nome" <?php echo ($ordem=="nome")?'selected="selected"':''; ?>>Nome</option>
		<option value="idade" <?php echo ($ordem=="idade")?'selected="selected"':''; ?>>Idade</option>
	</select>
</form>

<!-- segunda coisa: listar o que já temos -->
<table border="1" width="400">
	<tr>
		<th>Nome</th>
		<th>Idade</th>
	</tr>
	<?php

	$sql = $pdo->query($sql);
	if($sql->rowCount() > 0) { // se houve result, mostrar na tela com foreach
		foreach($sql->fetchAll() as $usuario):
			?>

			<tr>
				<td><?php echo $usuario['nome']; ?></td>
				<td><?php echo $usuario['idade']; ?></td>
			</tr>

			<?php
		endforeach;

	}
	?>
</table>