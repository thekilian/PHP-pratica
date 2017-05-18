<?php
session_start();

require 'config.php';

if(isset($_POST['email']) && empty($_POST['senha']) == false) {
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));

	$db = new PDO($dsn, $dbuser, $dbpass);
	$sql = $db->query("SELECT email, senha FROM usuarios WHERE email = '$email' AND senha = '$senha'");
	
	if($sql->rowCount() > 0) {
		$dado = $sql->fetch();
		$_SESSION['id'] = $dado['id'];
		header("Location: painel.php");
	}
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div class="container">
		<div class="col-lg-6 col-lg-offset-3">
			
			<h1>Login</h1>
			<hr>

			<div class="form-group">
				<form method="POST">
					<input class="form-control" type="email" name="email" placeholder="Digite seu e-mail" required=""><br>
					<input class="form-control" type="password" name="senha" placeholder="Digite sua senha" required=""><br>
					<button class="btn btn-success btn-block">Entrar</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>