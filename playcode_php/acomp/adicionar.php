<?php
	require 'config.php';

	if(isset($_POST['aluno']) && empty($_POST['aluno']) == false) {
		$aluno = addslashes($_POST['aluno']);
		$matricula = addslashes($_POST['matricula']);
		$turma = addslashes($_POST['turma']);
		$responsavel = addslashes($_POST['responsavel']);
		$contato = addslashes($_POST['contato']);
		$msg = addslashes($_POST['msg']);
		$observacoes = addslashes($_POST['observacoes']);

		$sql = "INSERT INTO registro SET aluno = '$aluno', matricula = '$matricula', turma = '$turma', responsavel = '$responsavel', contato = '$contato', msg = '$msg', observacoes = '$observacoes'";
		$pdo->query($sql);

		header("Location: index.php");	
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Registro de Acompanhamento</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

<h1>Adicionar registro</h1>

<div class="container">
	<form method="POST">
		<input type="text" name="aluno" placeholder="Aluno" required/>
		<input type="text" name="matricula" placeholder="Matrícula" required/>
		<input type="text" name="turma" placeholder="Turma" required/>
		<input type="text" name="responsavel" placeholder="Responsável" required/>
		<input type="number" name="contato" placeholder="Tipo de contato" required/>
		<input type="text" name="msg" placeholder="Registro" required/>
		<input type="text" name="observacoes" placeholder="Observações" required/>

		<input type="submit" value="Cadastrar">
	</form>
</div>

</body>
</html>
