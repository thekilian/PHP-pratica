<?php
	require 'config.php';

	$id = 0;

	if(isset($_GET['id']) && empty($_GET['id']) == false) {
		$id = addslashes($_GET['id']);
	}

	if(isset($_POST['aluno']) && empty($_POST['aluno']) == false) {
		$aluno = addslashes($_POST['aluno']);
		$matricula = addslashes($_POST['matricula']);
		$turma = addslashes($_POST['turma']);
		$responsavel = addslashes($_POST['responsavel']);
		$contato = addslashes($_POST['contato']);
		$msg = addslashes($_POST['msg']);
		$observacoes = addslashes($_POST['observacoes']);

		$sql = "UPDATE registro SET aluno = '$aluno', matricula = '$matricula', turma = '$turma', responsavel = '$responsavel', contato = '$contato', msg = '$msg', observacoes = '$observacoes' WHERE id = '$id'";
		$pdo->query($sql);

		header("Location: index.php");
	}

		$sql = "SELECT * FROM registro WHERE id = '$id'";
		$sql = $pdo->query($sql);
		if($sql->rowCount() > 0) {
			$dado = $sql->fetch();
		} else {
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

<h1>Editar registro</h1>

<div class="container">
	<form method="POST">
		<input type="text" name="aluno" value="<?php echo $dado['aluno'];?>" placeholder="Aluno" required><br/><br/>

		<input type="text" name="matricula" value="<?php echo $dado['matricula'];?>" placeholder="Matrícula" required><br/><br/>

		<input type="text" name="turma" value="<?php echo $dado['turma'];?>" placeholder="Turma" required><br/><br/>

		<input type="text" name="responsavel" value="<?php echo $dado['responsavel'];?>" placeholder="Responsavel" required><br/><br/>

		<input type="number" name="contato" value="<?php echo $dado['contato'];?>" placeholder="Tipo de contato" required><br/><br/>

		<input type="text" name="msg" value="<?php echo $dado['msg'];?>" placeholder="Registro" required><br/><br/>

		<input type="text" name="observacoes" value="<?php echo $dado['observacoes'];?>" placeholder="Observações" required><br/><br/>

		<input type="submit" value="Atualizar"/>
	</form>
</div>
