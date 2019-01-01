<!-- Projeto Sistema Comentários -->
<?php
try {
	$pdo = new PDO("mysql:dbname=projeto_comentarios;host:localhost", "root", "pass"); // update info before run the project
} catch(PDOException $e) {
	echo "Falhou a conexão: ".$e->getMessage();
	exit;
}

if(isset($_POST['nome']) && !empty($_POST['nome'])) {
	$nome = $_POST['nome'];
	$mensagem = $_POST['mensagem'];

	$sql = $pdo->prepare("INSERT INTO mensagens SET nome = :nome, msg = :msg, data_msg = NOW()");
	$sql->bindValue(":nome", $nome);
	$sql->bindValue(":msg", $mensagem);
	$sql->execute();
}

?>
<fieldset>
	<form method="POST">
		Nome:<br/>
		<input type="text" name="nome"><br/><br/>
		Mensagem:<br/>
		<textarea name="mensagem"></textarea><br/><br/>
		<input type="submit" value="Enviar Mensagem">
	</form>
</fieldset>
<br/><br/>

<?php
$sql = "SELECT * FROM mensagens ORDER BY data_msg DESC";
$sql = $pdo->query($sql);
if($sql->rowCount() > 0) {
	foreach($sql->fetchAll() as $mensagem):
		?>
		<strong><?php echo $mensagem['nome']; ?></strong> <?php echo "(".$mensagem['data_msg'].")"; ?><br/>
		<?php echo $mensagem['msg']; ?>
		<hr/>
		<?php	
	endforeach;
} else {
	echo "Não há mensagens.";
}
?>