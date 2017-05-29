<?php
session_start();

require 'config.php';

/*
Se a o campo 'email' e o campo 'senha' não estiverem vazios,
encaminha o login. Lembre que num formulário essas variáveis SEMPRE estarão setadas
*/

if(!empty($_POST['email']) && !empty($_POST['senha'])) {
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']); // <- há um mistério aqui para você resolver, por isso tirei o md5() - solve: coloquei número de caracteres correto no DB (hash tem 32 caracteres) - DEPOIS: recolocar md5

	/*
	- Vc já tinha setado uma variável $pdo no 'config.php'. Não precisa fazer de novo.
	- Não precisa selecionar a senha do banco. Apenas as infos do usuário

	//$db = new PDO($dsn, $dbuser, $dbpass); // não precisa fazer de novo
	*/ 
	
	$sql = $pdo->query("SELECT id, nome, email FROM usuarios WHERE email = '$email' AND senha = '$senha'");
	
	if($sql->rowCount() > 0) {
		// Nome mais fácil de lembrar do que 'dado'
		//$dado = $sql->fetch();
		$user = $sql->fetch(PDO::FETCH_ASSOC); // Puxe como array associativo!
		//var_dump($user);
		# Registrando sessão!
		$_SESSION['id'] = $user['id'];
		$_SESSION['nome'] = $user['nome'];
		$_SESSION['email'] = $user['email'];

		# Te explico isso aqui com calma se quiser depois
		$_SESSION['logado'] = 'TRUE'; 
		# Tudo certo, redireciona pro nosso painel!
		//var_dump($_SESSION);

			header("Location: painel.php");
		}
}
?>

<?php
	include ('includes/header.html');
?>

<div class="container">
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

<?php
	include ('includes/footer.html');
?>

</body>
</html>