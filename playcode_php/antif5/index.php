<!-- Técnica anti-f5 -->
<!-- Serve para evitar de enviar(salvar/inserir) mais de uma vez, por exemplo, o mesmo produto  -->

<?php
// Tudo que for digitado será recebido e salvo em arquivo txt
if(isset($_POST['nome'])) {
	$nome = $_POST['nome'];
	file_put_contents("teste.txt", $nome, FILE_APPEND); // serve para vc criar arquivo e escrever nele. Params: nome do arquivo, o que vamos escrever nele, FILE_APPEND: adiciona info ao q já tem no arquivo)
	header("Location: index.php"); // vc mesmo faz o redirecionamento para index com o header location - e não o navegador
}
?>

<form method="POST">
	<input type="text" name="nome">
	<input type="submit" value="Enviar">
</form>