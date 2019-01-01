<?php
	require 'config.php';

	$id = 0;

	if(isset($_GET['id']) && empty($_GET['id']) == false) {
		$id = addslashes($_GET['id']);
	}

	if(isset($_POST['nome']) && empty($_POST['nome']) == false) {
		$nome = addslashes($_POST['nome']);
		$sobrenome = addslashes($_POST['sobrenome']);
		$email = addslashes($_POST['email']);

		$sql = "UPDATE usuarios SET nome = '$nome', sobrenome = '$sobrenome', email = '$email' WHERE id = '$id'";
		$pdo->query($sql);

		header("Location: index.php");
	}

		$sql = "SELECT * FROM usuarios WHERE id = '$id'";
		$sql = $pdo->query($sql);
		if($sql->rowCount() > 0) {
			$dado = $sql->fetch();
		} else {
			header("Location: index.php");
		}
?>
<form method="POST">
  <input type="text" name="nome" value="<?php echo $dado['nome'];?>" placeholder="Nome" required><br/><br/>
  <input type="text" name="sobrenome" value="<?php echo $dado['sobrenome'];?>" placeholder="Sobrenome" required><br/><br/>
  <input type="text" name="email" value="<?php echo $dado['email'];?>" placeholder="E-mail" required/><br/><br/>
  <input type="submit" value="Atualizar"/>
</form>