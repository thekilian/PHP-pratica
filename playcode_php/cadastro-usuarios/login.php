<?php

/*

	require 'config.php';

	session_start();

	if(isset($_POST['nome']) && empty($_POST['nome']) == false) {
		$nome = addslashes($_POST['nome']);
	} elseif (isset($_POST['sobrenome']) && empty($_POST['sobrenome']) == false) {
		$sobrenome = addslashes($_POST['sobrenome']);
	} elseif (isset($_POST['email']) && empty($_POST['email']) == false) {
		$email = addslashes($_POST['email']);
	} elseif (isset($_POST['senha']) && empty($_POST['senha']) == false) {
		$senha = md5(addslashes($_POST['senha']));
	}

	//$dsn = "mysql:dbname=cad_usuario;host=127.0.0.1";
	//$dbuser = "root";
	//$dbpass = "";

	//try {
		//$db = new PDO($dsn, $dbuser, $dbpass);
		$sql = $db->query("SELECT * FROM usuarios WHERE nome = '$nome', sobrenome = '$sobrenome', email = '$email', senha = '$senha'");
		if($sql->rowCount() > 0) {
			$dado = $sql->fetch();
			$_SESSION['id'] = $dado['id'];
			header("Location: index.php");
		}

	//} catch(PDOException $e) {
		//echo "Falhou: ".$e->getMessage();
	//}


*/