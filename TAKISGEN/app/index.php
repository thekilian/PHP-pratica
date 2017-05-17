<?php
session_start();
if(isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
	//echo "Área restrita";
	header("Location: login.php");
} else {
	echo "não deu"; //apenas para teste :)
}

/*
Se usuário não tá logado, direcionar para login (não precisa do else)
*/

/*
se usa muito isset com SESSION:
//$_SESSION['logged_in'] = 'admin';
em outro script, verificar:
//if(isset($_SESSION['logged_in']) {
	//código
//}
geralmente, se usa o contrário: se não tá setado o logged_in, direcionar para login
*/