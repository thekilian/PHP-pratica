<?php
session_start();
require 'config.php';

if(!empty($_POST['email'])) {
	$email = addslashes($_POST['email']);
	$senha = md5($_POST['senha']);

	$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
	$sql = $pdo->query($sql);

	if($sql->rowCount() > 0) {
		$info = $sql->fetch();

		$_SESSION['logado'] = $info['id'];
		header("Location: index.php");
		exit;
	}
}
?>
<h3>Login</h3>
<form method="POST">
	E-mail:<br/>
	<input type="email" name="email"><br/><br/>
	Senha:<br/>
	<input type="password" name="senha"><br/><br/>
	<input type="submit" value="Entrar"> <a href="cadastrar.php">Cadastrar</a>
</form>