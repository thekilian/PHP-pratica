<?php
session_start();
require 'config.php';
require 'funcoes.php';

if(empty($_SESSION['mmnlogin'])) { // se sessão estiver vazia, direciono para login
	header("Location: login.php");
	exit; // parar execução desta página aqui
}

$id = $_SESSION['mmnlogin'];

$sql = $pdo->prepare("SELECT
	usuarios.nome, patentes.nome as p_nome
	FROM usuarios
	LEFT JOIN patentes ON patentes.id = usuarios.patente
	WHERE usuarios.id = :id");
$sql->bindValue(":id", $id);
$sql->execute();

if($sql->rowCount() > 0) {
	$sql = $sql->fetch();
	$nome = $sql['nome'];
	$p_nome = $sql['p_nome'];
} else {
	header("Location: login.php");
	exit;
}

$lista = listar($id, $limite);
?>
<h1>Sistema de Marketing Multinível</h1>
<h2>Usuário logado: <?php echo $nome.' - '.$p_nome; ?></h2>

<a href="cadastro.php">Cadastrar novo usuário</a><br/>

<a href="sair.php">Sair</a>

<hr>

<h4>Lista de cadastros</h4>

<!-- 
<pre>
<?php // print_r($lista); ?>
</pre>

<ul>
	<?php // foreach($lista as $usuario): ?>
		<li><?php // echo $usuario['nome']; ?></li>
	<?php // endforeach; ?>
</ul>
 -->

<?php exibir($lista); ?>





<!-- DÚVIDAS:
$pdo->query("SELECT * FROM usuarios");

###

$sql = $pdo->prepare("SELECT nome FROM usuarios WHERE id = :id");
$sql->bindValue(":id", $id);
$sql->execute();

1. $sql = "SELECT * FROM usuarios";
   $pdo->query($sql);

   =

   $pdo->query("SELECT * FROM usuarios");

2. :id = $id?

3. query vs prepare
query = PDO (qq tabela)
prepare = PDO Statement = forma mais avançada de montar query (tenho que saber qual é a tabela e quais campos ela tem)

***

4. $usuario['filhos'] da onde vem isso?
-->