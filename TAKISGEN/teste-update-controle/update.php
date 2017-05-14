<?php
	require 'config.php';

	//$id = 0;
	$frase = $_POST['frase'];
	$autor = $_POST ['autor'];

	//$sql = "UPDATE lista SET frase = '$frase', autor = '$autor' WHERE id = '$id'";
    //$pdo->query($sql);

	
	if(isset($_GET['id']) && empty($_GET['id']) == false){
		$id = addslashes($_GET['id']);
		//$sql = "UPDATE lista SET frase = '$frase', autor = '$autor' WHERE ";
	    $pdo->query($sql);
	    header("Location: controle.php");
	} else {
		header("Location: controle.php");
	}