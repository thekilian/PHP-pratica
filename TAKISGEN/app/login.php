<?php
session_start();

require 'config.php';

/*
Se a o campo 'email' E o campo 'senha' não estiverem vazios,
encaminha o login. Lembre que num formulário essas variáveis SEMPRE estarão setadas
*/

if(!empty($_POST['email']) && !empty($_POST['senha'])) {
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']); // <- há um mistério aqui para você resolver, por isso tirei o md5()

	/*
	- Vc já tinha setado uma variável $pdo no 'config.php'. Não precisa fazer de novo.
	- Não precisa selecionar a senha do banco. Apenas as infos do usuário
	*/ 
	$sql = $pdo->query("SELECT id, email FROM usuarios WHERE email = '$email' AND senha = '$senha'");
	
	if($sql->rowCount() > 0) {
		// Nome mais fácil de lembrar do que 'dado'
		$user = $sql->fetch(PDO::FETCH_ASSOC); // Puxe como array associativo!
		//var_dump($user);
		# Registrando sessão!
		$_SESSION['id'] = $user['id'];
		$_SESSION['email'] = $user['email'];
		
		# Te explico isso aqui com calma se quiser depois
		$_SESSION['logado'] = 'TRUE'; 
		# Tudo certo, redireciona pro nosso painel!
		//var_dump($_SESSION);
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