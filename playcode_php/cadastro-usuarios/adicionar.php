<?php
	require 'config.php';

	if(isset($_POST['nome']) && empty($_POST['nome']) == false) {
		$nome = addslashes($_POST['nome']);
		$sobrenome = addslashes($_POST['sobrenome']);
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));

		$sql = "INSERT INTO usuarios SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', senha = '$senha'";
		$pdo->query($sql);

		header("Location: index.php");	
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Usuários</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1>Adicionar Usuário</h1>

<form method="POST">
	<input type="text" name="nome" placeholder="Nome" required/>
	<input type="text" name="sobrenome" placeholder="Sobrenome" required/>
	<input type="email" name="email" placeholder="E-mail" required/>
	<input type="password" name="senha" placeholder="Senha" required/>
	<input type="submit" value="Cadastrar">
</form>

</body>
</html>