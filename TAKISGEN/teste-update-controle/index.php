<?php
session_start();
if(isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
	echo "Área restrita";
	header("Location: controle.php");

} else {
	header("Location: login.php");
}