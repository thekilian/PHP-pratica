<?php
	require 'config.php';

	if(isset($_GET['id']) && empty($_GET['id']) == false){
		$id = addslashes($_GET['id']);
		$sql = "DELETE FROM lista WHERE id = '$id'";
	    $pdo->query($sql);
	    header("Location: controle.php");
	} else {
		header("Location: controle.php");
	}